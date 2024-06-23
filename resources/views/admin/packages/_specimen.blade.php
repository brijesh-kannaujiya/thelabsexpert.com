<ul class="p-1">
    @php
    $uniqueSpecimens = collect($specimen['tests'])->pluck('test.specimen.name')->unique();
    @endphp
    @foreach($uniqueSpecimens as $SpecimenName)
    <li>
        {{ $SpecimenName }}
    </li>
    @endforeach
</ul>
