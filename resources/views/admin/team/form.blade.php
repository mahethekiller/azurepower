<x-userdashboard-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription" :pageScript="$pageScript">
    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    {{-- Error messages block --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>There were some errors with your submission:</strong>
                            <ul class="mb-0 mt-2">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form
                        action="{{ isset($teamMember) ? route('admin.team-members.update', $teamMember) : route('admin.team-members.store') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @if (isset($teamMember))
                            @method('PUT')
                        @endif

                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control"
                                value="{{ old('name', $teamMember->name ?? '') }}">
                        </div>

                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control"
                                value="{{ old('title', $teamMember->title ?? '') }}">
                        </div>

                        <div class="mb-3">
                            <label for="team_type" class="form-label">Team Type</label>
                            <select name="team_type" id="team_type" class="form-select">
                                @php
                                    $selectedType = old('team_type') ?? ($teamMember->team_type ?? '');
                                @endphp

                                <option value="">-- Select Team Type {{ $selectedType }} --</option>
                                <option value="Board of directors"
                                    {{ $selectedType === 'Board of directors' ? 'selected' : '' }}>
                                    Board of directors
                                </option>
                                <option value="Management team"
                                    {{ $selectedType === 'Management team' ? 'selected' : '' }}>
                                    Management team
                                </option>
                            </select>
                        </div>


                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control editor">{{ old('description', $teamMember->description ?? '') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                            @if (isset($teamMember) && $teamMember->image)
                                <img src="{{ asset('storage/' . $teamMember->image) }}" width="80" class="mt-2">
                            @endif
                        </div>

                        @php
                            $socialLinks = old('social_links', $teamMember->social_links ?? []); // assuming you're editing a `$team`
                        @endphp

                        <div class="mb-3">
                            <label>Social Media Links</label>
                            <div id="socialLinksWrapper">
                                {{-- {{ dd }} --}}
                                @forelse ($socialLinks as $index => $link)
                                    <div class="row mb-3 social-link-row">
                                        <div class="col-md-4">
                                            <label>Social Icon</label>
                                            <select name="social_links[{{ $index }}][icon]" class="form-control">
                                                <option value="fa-brands fa-facebook-f"
                                                    {{ $link['icon'] == 'fa-brands fa-facebook-f' ? 'selected' : '' }}>
                                                    Facebook</option>
                                                <option value="fa-brands fa-x-twitter"
                                                    {{ $link['icon'] == 'fa-brands fa-x-twitter' ? 'selected' : '' }}>
                                                    Twitter</option>
                                                <option value="fa-brands fa-linkedin-in"
                                                    {{ $link['icon'] == 'fa-brands fa-linkedin-in' ? 'selected' : '' }}>
                                                    LinkedIn</option>
                                                <option value="fa-brands fa-instagram"
                                                    {{ $link['icon'] == 'fa-brands fa-instagram' ? 'selected' : '' }}>
                                                    Instagram</option>
                                                <option value="fa-brands fa-youtube"
                                                    {{ $link['icon'] == 'fa-brands fa-youtube' ? 'selected' : '' }}>
                                                    YouTube</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>URL</label>
                                            <input type="url" name="social_links[{{ $index }}][url]"
                                                class="form-control" placeholder="https://example.com"
                                                value="{{ $link['url'] }}">
                                        </div>
                                        <div class="col-md-2 d-flex align-items-end">
                                            <button type="button"
                                                class="btn btn-danger remove-social-link">Remove</button>
                                        </div>
                                    </div>
                                @empty
                                    {{-- First row by default --}}
                                    <div class="row mb-3 social-link-row">
                                        <div class="col-md-4">
                                            <label>Social Icon</label>
                                            <select name="social_links[0][icon]" class="form-control">
                                                <option value="fa-brands fa-facebook-f">Facebook</option>
                                                <option value="fa-brands fa-x-twitter">Twitter</option>
                                                <option value="fa-brands fa-linkedin-in">LinkedIn</option>
                                                <option value="fa-brands fa-instagram">Instagram</option>
                                                <option value="fa-brands fa-youtube">YouTube</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>URL</label>
                                            <input type="url" name="social_links[0][url]" class="form-control"
                                                placeholder="https://example.com">
                                        </div>
                                        <div class="col-md-2 d-flex align-items-end">
                                            <button type="button"
                                                class="btn btn-danger remove-social-link">Remove</button>
                                        </div>
                                    </div>
                                @endforelse
                            </div>

                            <button type="button" id="addSocialLink" class="btn btn-primary mt-2">Add Social
                                Link</button>
                        </div>


                        <button class="btn btn-success">{{ isset($teamMember) ? 'Update' : 'Create' }}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-userdashboard-layout>
