<x-userdashboard-layout>
<div class="container">
        <h2>Menus</h2>
        <a href="{{ route('admin.menus.create') }}" class="btn btn-primary mb-3">Add Menu</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Parent</th>
                    <th>Route</th>
                    <th>URL</th>
                    <th>Order</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menus as $menu)
                    <tr>
                        <td>{{ $menu->title }}</td>
                        <td>—</td>
                        <td>{{ $menu->route }}</td>
                        <td>{{ $menu->url }}</td>
                        <td>{{ $menu->order }}</td>
                        <td>
                            <a href="{{ route('admin.menus.edit', $menu->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.menus.destroy', $menu->id) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this menu?')">Delete</button>
                            </form>
                        </td>
                    </tr>

                    @foreach($menu->children as $child)
                        <tr>
                            <td>— {{ $child->title }}</td>
                            <td>{{ $menu->title }}</td>
                            <td>{{ $child->route }}</td>
                            <td>{{ $child->url }}</td>
                            <td>{{ $child->order }}</td>
                            <td>
                                <a href="{{ route('admin.menus.edit', $child->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.menus.destroy', $child->id) }}" method="POST" style="display:inline;">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this submenu?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                @endforeach
            </tbody>
        </table>
    </div>

</x-userdashboard-layout>
