<x-userdashboard-layout
    :pageTitle="$documentType->name"
    :pageDescription="(isset($document->id) ? 'Edit' : 'Upload') . ' ' . $documentType->name"
    :pageScript="''">

    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="card">
                <div class="card-body">

                    {{-- Success Message --}}
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    {{-- Form Start --}}
                    <form action="{{ isset($document->id) ? route('admin.documents.update', $document->id) : route('documents.store') }}"
                          method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        @if (isset($document->id))
                            @method('PUT')
                        @endif

                        <!-- Hidden Field for Document Type -->
                        <input type="hidden" name="document_type_id" value="{{ $documentType->id }}">

                        <!-- Title -->
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input
                                type="text"
                                name="title"
                                class="form-control"
                                value="{{ old('title', $document->title ?? '') }}"
                                required>
                        </div>

                        <!-- Document Date -->
                        <div class="form-group">
                            <label for="doc_date">Document Date</label>
                            <input
                                type="date"
                                name="doc_date"
                                class="form-control"
                                value="{{ old('doc_date', $document->doc_date->format('Y-m-d') ?? '') }}"
                                required>
                        </div>

                        <!-- File Upload -->
                        <div class="form-group">
                            <label for="file">File (PDF, DOC, Image)</label>
                            <input type="file" name="file" class="form-control" {{ isset($document->id) ? '' : 'required' }}>

                            {{-- If editing, show existing file --}}
                            @if (isset($document->file) && $document->file)
                                <p class="mt-2">
                                    Existing File:
                                    <a href="{{ asset('storage/' . $document->file) }}" target="_blank" class="btn btn-sm btn-info">
                                        View
                                    </a>
                                </p>
                                <!-- Hidden field to retain old file if no new upload -->
                                <input type="hidden" name="existing_file" value="{{ $document->file }}">
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-success">
                            {{ isset($document->id) ? 'Update' : 'Save' }}
                        </button>
                    </form>
                    {{-- Form End --}}
                </div>
            </div>
        </div>
    </div>
</x-userdashboard-layout>
