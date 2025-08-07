<x-userdashboard-layout>

    <div class="container">
        <h2>{{ isset($menu) ? 'Edit Menu' : 'Add Menu' }}</h2>
        <form action="{{ isset($menu) ? route('admin.menus.update', $menu->id) : route('admin.menus.store') }}"
            method="POST">
            @csrf
            @if (isset($menu))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $menu->title ?? '') }}"
                    required>
            </div>

            <div class="mb-3">
                <label>Parent Menu</label>
                <select name="parent_id" class="form-control">
                    <option value="">-- None --</option>
                    @foreach ($parents as $parent)
                        <option value="{{ $parent->id }}"
                            {{ old('parent_id', $menu->parent_id ?? '') == $parent->id ? 'selected' : '' }}>
                            {{ $parent->title }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Route (leave blank if external URL)</label>
                <input type="text" name="route" class="form-control"
                    value="{{ old('route', $menu->route ?? '') }}">
            </div>

            <div class="mb-3">
                <label>External URL (if not using route)</label>
                <input type="text" name="url" class="form-control" value="{{ old('url', $menu->url ?? '') }}">
            </div>

            <div class="mb-3">
                <label>Order</label>
                <input type="number" name="order" class="form-control" value="{{ old('order', $menu->order ?? 0) }}">
            </div>
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" name="show_in_header" id="show_in_header"
                    @checked(old('show_in_header', $menu->show_in_header ?? true))>
                <label class="form-check-label" for="show_in_header">Show in Header Menu</label>
            </div>



            <button class="btn btn-success">{{ isset($menu) ? 'Update' : 'Create' }}</button>
            <a href="{{ route('admin.menus.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</x-userdashboard-layout>
