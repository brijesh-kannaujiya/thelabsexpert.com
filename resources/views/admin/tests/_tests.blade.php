<ul class="p-1">
    @empty(!$tests['tests'])
        @foreach ($tests['tests'] as $test)
            <li>
                @if (isset($test['test']))
                    {{ $test['test']['test_name'] }}
                @endif
            </li>
        @endforeach
    @endempty
</ul>
