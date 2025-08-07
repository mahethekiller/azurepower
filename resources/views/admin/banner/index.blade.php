<x-userdashboard-layout>
  <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="card">
                <div class="card-body">
    <h1>Banners</h1>
    <a href="{{ route('admin.banners.create') }}" class="btn btn-primary mb-3">Add New Banner</a>

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
            @foreach($banners as $banner)
            {{-- {{ dd($banner) }} --}}
                <tr>
                    <td>{{ $banner->id }}</td>
                    <td>{{ $banner->menu->title ?? 'N/A' }}</td>

                    <td><img src="{{ asset('storage/'.$banner->image) }}" width="100"></td>
                    <td>{{ $banner->heading }}</td>
                    <td>{{ $banner->description }}</td>
                    {{-- <td>
                        <a href="{{ $banner->button1_link }}" class="btn btn-sm btn-info">{{ $banner->button1_text }}</a>
                        <a href="{{ $banner->button2_link }}" class="btn btn-sm btn-secondary">{{ $banner->button2_text }}</a>
                    </td> --}}
                    <td>
                        <a href="{{ route('admin.banners.edit', $banner) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.banners.destroy', $banner) }}" method="POST" style="display:inline;">
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
