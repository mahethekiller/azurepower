<x-userdashboard-layout :pageTitle="$documentType->name" :pageDescription="'Documents under ' . $documentType->name" :pageScript="''">
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
                    @if ($documents->count())
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>File</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($documents as $doc)
                                    <tr>
                                        <td>{{ $doc->title }}</td>
                                        <td>{{ $doc->doc_date }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="{{ asset('storage/' . $doc->file) }}" target="_blank">View</a>
                                        </td>
                                        <td>
                                        {{-- Edit Button --}}
                                            <a href="{{ route('admin.documents.edit', $doc->id) }}" class="btn btn-sm btn-primary">Edit</a>

                                        <form action="{{ route('admin.documents.destroy', $doc->id) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Delete this document?')"
                                                class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{-- Pagination --}}
                        {{ $documents->links() }}
                    @else
                        <p>No documents found under this type.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-userdashboard-layout>
