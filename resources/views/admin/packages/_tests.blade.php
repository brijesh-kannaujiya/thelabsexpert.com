<ul class="p-1">
    @foreach($package['tests'] as $test)
    <li>
        {{$test['test']['test_name']}}
    </li>
    @endforeach
</ul>
