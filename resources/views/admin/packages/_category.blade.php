<ul class="p-1">
    @php
    $uniqueCategories = collect($category['tests'])->pluck('test.category.name')->unique();
    @endphp
    @foreach($uniqueCategories as $categoryName)
    <li>
        {{ $categoryName }}
    </li>
    @endforeach
</ul>
