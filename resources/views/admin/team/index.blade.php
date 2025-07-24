<x-userdashboard-layout>
    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="card">
                <div class="card-body">

                    <a href="{{ route('admin.team-members.create') }}" class="btn btn-success mb-3">Add Member</a>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($members as $member)
                                <tr>
                                    <td>{{ $member->id }}</td>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->title }}</td>
                                    <td>
                                        @if ($member->image)
                                            <img src="{{ asset('storage/' . $member->image) }}" width="50">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.team-members.edit', $member) }}"
                                            class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('admin.team-members.destroy', $member) }}" method="POST"
                                            class="d-inline">
                                            @csrf @method('DELETE')
                                            <button onclick="return confirm('Are you sure?')"
                                                class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-userdashboard-layout>
