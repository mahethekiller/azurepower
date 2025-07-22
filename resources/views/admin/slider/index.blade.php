<x-userdashboard-layout>
  <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="card">
                <div class="card-body">
    <h1>Slides</h1>
    <a href="{{ route('admin.slides.create') }}" class="btn btn-primary mb-3">Add New Slide</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Page</th>
                <th>Image</th>
                <th>Heading</th>
                <th>Description</th>
                {{-- <th>Buttons</th> --}}
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($slides as $slide)
            {{-- {{ dd($slide) }} --}}
                <tr>
                    <td>{{ $slide->id }}</td>
                    <td>{{ $slide->menu->title ?? 'N/A' }}</td>

                    <td><img src="{{ asset('storage/'.$slide->image) }}" width="100"></td>
                    <td>{{ $slide->heading }}</td>
                    <td>{{ $slide->description }}</td>
                    {{-- <td>
                        <a href="{{ $slide->button1_link }}" class="btn btn-sm btn-info">{{ $slide->button1_text }}</a>
                        <a href="{{ $slide->button2_link }}" class="btn btn-sm btn-secondary">{{ $slide->button2_text }}</a>
                    </td> --}}
                    <td>
                        <a href="{{ route('admin.slides.edit', $slide) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.slides.destroy', $slide) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
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
