<x-userdashboard-layout :pageTitle="'Documents'" :pageDescription="'Manage all documents'" :pageScript="null">
    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="card">
                <div class="card-body">

                    <div class="mb-3 text-right">
                        @foreach ($documentTypes as $type)
                            <a href="{{ route('documents.create', $type->id) }}" class="btn btn-primary mb-2">
                                Add {{ $type->name }}
                            </a>
                        @endforeach

                    </div>

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Type</th>
                                <th>File</th>
                                <th width="20%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($documents as $document)
                                <tr>
                                    <td>{{ $document->title }}</td>
                                    <td>{{ $document->doc_date }}</td>
                                    <td>{{ $document->documentType->name }}</td>
                                    <td>
                                        <a href="{{ asset('storage/' . $document->file) }}" target="_blank"
                                            class="btn btn-sm btn-info">View</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.documents.edit', $document->id) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('admin.documents.destroy', $document->id) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Delete this document?')"
                                                class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">No documents found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="mt-3">
                        {{ $documents->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-userdashboard-layout>
