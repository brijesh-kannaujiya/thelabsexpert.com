<ul class="p-1">
    @empty(!$tests['categories'])
        @foreach ($tests['categories'] as $categoriy)
            <li>
                @if (isset($categoriy['name']))
                    {{ $categoriy['name'] }}
                @endif
            </li>
        @endforeach
    @endempty
</ul>
