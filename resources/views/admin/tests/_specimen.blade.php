<ul class="p-1">
    @empty(!$test['specimens'])
        @foreach ($test['specimens'] as $test)
            <li>
                @if (isset($test['specimen']))
                    {{ $test['specimen']['name'] }}
                @endif
            </li>
        @endforeach
    @endempty
</ul>
