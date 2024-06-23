<ul class="p-1">
    @php
    $uniqueVial = collect($vial['tests'])->pluck('test.vial.name')->unique();
    @endphp
    @foreach($uniqueVial as $vial)
    <li>
        {{ $vial }}
    </li>
    @endforeach
</ul>
