<ul class="navbar-nav mr-auto" id="menu">
    @foreach ($menus as $menu)
        <li class="nav-item {{ $menu->children->isNotEmpty() ? 'submenu' : '' }}">
            <a class="nav-link" href="{{ $menu->route ? route($menu->route) : $menu->url }}">
                {{ $menu->title }}
            </a>

            @if ($menu->children->isNotEmpty())
                <ul>
                    @foreach ($menu->children as $child)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $child->route ? route($child->route) : $child->url }}">
                                {{ $child->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach

    <li class="nav-item highlighted-menu"><a class="nav-link" href="#">Write to Us</a></li>

</ul>
