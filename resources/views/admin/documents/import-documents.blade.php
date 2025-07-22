<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Import Documents CSV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Import Documents CSV</h4>
                    </div>
                    <div class="card-body">
                        <!-- Success Message -->
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('admin.documents.import') }}" enctype="multipart/form-data">
                            @csrf

                            <!-- Document Type Select -->
                            <div class="mb-3">
                                <label for="document_type_id" class="form-label">Document Type</label>
                                <select name="document_type_id" id="document_type_id" class="form-select" required>
                                    <option value="">-- Select Document Type --</option>
                                    @foreach($documentTypes as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Radio Buttons -->
                            <div class="mb-3">
                                <label class="form-label">File Type</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="file_type" id="file" value="file" checked>
                                    <label class="form-check-label" for="file">File</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="file_type" id="link" value="link">
                                    <label class="form-check-label" for="link">Link</label>
                                </div>
                            </div>

                            <!-- File Upload -->
                            <div class="mb-3">
                                <label for="csv_file" class="form-label">Upload CSV File</label>
                                <input type="file" name="csv_file" id="csv_file" class="form-control" required>
                                <div class="form-text">Accepted formats: .csv</div>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-upload"></i> Import CSV
                                </button>
                            </div>
                        </form>

                        <!-- Download Sample CSV Button -->
                        <div class="mt-4 text-center">
                            <a href="{{ asset('storage/samples/sample.csv') }}" class="btn btn-outline-primary" download>
                                <i class="bi bi-download"></i> Download Sample CSV
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</body>
</html>
