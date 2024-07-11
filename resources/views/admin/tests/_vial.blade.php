<ul class="p-1">
    @empty(!$test['vials'])
        @foreach ($test['vials'] as $test)
            <li>
                @if (isset($test['vial']))
                    {{ $test['vial']['name'] }}
                @endif
            </li>
        @endforeach
    @endempty
</ul>
