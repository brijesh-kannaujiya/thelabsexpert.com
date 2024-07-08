<ul class="p-1">


    @empty(!$tests['tests'])
        @foreach ($tests['tests'] as $test)
            <li>
                {{ $test['test']['test_name'] }}
            </li>
        @endforeach
    @endempty
</ul>
