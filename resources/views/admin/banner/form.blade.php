<x-userdashboard-layout>
    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h2>{{ isset($banner) ? 'Edit Banner' : 'Add New Banner' }}</h2>

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



                    <form method="POST" enctype="multipart/form-data"
                        action="{{ isset($banner) ? route('admin.banners.update', $banner) : route('admin.banners.store') }}">
                        @csrf
                        @if (isset($banner))
                            @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="page">Select Page/Menu</label>
                                    <select name="page" class="form-control">
                                        <option value="">-- Select Menu --</option>
                                        @foreach ($pages as $id => $title)
                                            <option value="{{ $id }}"
                                                {{ old('page', $banner->page ?? '') == $id ? 'selected' : '' }}>
                                                {{ $title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="image">Slide Image</label>
                                    <input type="file" name="image" class="form-control">
                                    @if (isset($banner) && $banner->image)
                                        <img src="{{ asset('storage/' . $banner->image) }}" width="50" class="mt-2">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="image_alt">Image Alt Text</label>
                                    <input type="text" name="image_alt" class="form-control"
                                        value="{{ old('image_alt', $banner->image_alt ?? '') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="heading">Heading</label>
                                    <input type="text" name="heading" class="form-control"
                                        value="{{ old('heading', $banner->heading ?? '') }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control ">{{ old('description', $banner->description ?? '') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <h4>Button 1</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="button1_text">Text</label>
                                    <input type="text" name="button1_text" class="form-control"
                                        value="{{ old('button1_text', $banner->button1_text ?? '') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="button1_link">Link</label>
                                    <input type="text" name="button1_link" class="form-control"
                                        value="{{ old('button1_link', $banner->button1_link ?? '') }}">
                                </div>
                            </div>
                        </div>

                        <h4>Button 2</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="button2_text">Text</label>
                                    <input type="text" name="button2_text" class="form-control"
                                        value="{{ old('button2_text', $banner->button2_text ?? '') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="button2_link">Link</label>
                                    <input type="text" name="button2_link" class="form-control"
                                        value="{{ old('button2_link', $banner->button2_link ?? '') }}">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-userdashboard-layout>
