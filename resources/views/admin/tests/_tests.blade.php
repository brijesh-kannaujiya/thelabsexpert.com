<ul class="p-1">
    @foreach($tests['tests'] as $test)
    <li>
        {{$test['test']['test_name']}}
    </li>
    @endforeach
</ul>
