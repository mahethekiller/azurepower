<x-userdashboard-layout>
    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h2>{{ isset($slide) ? 'Edit Slide' : 'Add New Slide' }}</h2>

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
                        action="{{ isset($slide) ? route('admin.slides.update', $slide) : route('admin.slides.store') }}">
                        @csrf
                        @if (isset($slide))
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
                                                {{ old('page', $slide->page ?? '') == $id ? 'selected' : '' }}>
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
                                    @if (isset($slide) && $slide->image)
                                        <img src="{{ asset('storage/' . $slide->image) }}" width="50" class="mt-2">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="image_alt">Image Alt Text</label>
                                    <input type="text" name="image_alt" class="form-control"
                                        value="{{ old('image_alt', $slide->image_alt ?? '') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="heading">Heading</label>
                                    <input type="text" name="heading" class="form-control"
                                        value="{{ old('heading', $slide->heading ?? '') }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control ">{{ old('description', $slide->description ?? '') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <h4>Button 1</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="button1_text">Text</label>
                                    <input type="text" name="button1_text" class="form-control"
                                        value="{{ old('button1_text', $slide->button1_text ?? '') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="button1_link">Link</label>
                                    <input type="text" name="button1_link" class="form-control"
                                        value="{{ old('button1_link', $slide->button1_link ?? '') }}">
                                </div>
                            </div>
                        </div>

                        <h4>Button 2</h4>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="button2_text">Text</label>
                                    <input type="text" name="button2_text" class="form-control"
                                        value="{{ old('button2_text', $slide->button2_text ?? '') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="button2_link">Link</label>
                                    <input type="text" name="button2_link" class="form-control"
                                        value="{{ old('button2_link', $slide->button2_link ?? '') }}">
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
