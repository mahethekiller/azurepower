<nav aria-label="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
    <ol class="breadcrumb">
        @foreach($items as $index => $item)
            <li
                class="breadcrumb-item {{ $loop->last ? 'active' : '' }}"
                {{ $loop->last ? 'aria-current=page' : '' }}
                itemprop="itemListElement"
                itemscope
                itemtype="https://schema.org/ListItem"
            >
                @if(!$loop->last)
                    <a href="{{ $item['url'] }}" itemprop="item">
                        <span itemprop="name">{{ $item['label'] }}</span>
                    </a>
                @else
                    <span itemprop="name">{{ $item['label'] }}</span>
                @endif
                <meta itemprop="position" content="{{ $index + 1 }}" />
            </li>
        @endforeach
    </ol>
</nav>
