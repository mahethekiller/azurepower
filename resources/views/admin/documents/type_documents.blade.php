<x-userdashboard-layout :pageTitle="$documentType->name" :pageDescription="'Documents under ' . $documentType->name" :pageScript="">
    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    {{-- Add Button --}}
                    <a href="{{ route('documents.create', $documentType->id) }}" class="btn btn-success mb-3">
                        Add {{ $documentType->name }}
                    </a>

                    {{-- Success Message --}}
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    {{-- Documents Table --}}
                    <table id="documents-table" class="table table-bordered"
                        data-url="{{ route('admin.documents.type', $documentType->id) }}">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Link</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-userdashboard-layout>
