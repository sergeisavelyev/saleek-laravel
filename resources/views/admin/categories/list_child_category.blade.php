<li>{{ $child_category->title }}</li>

@if ($child_category->categories)
    <ul>
        @foreach ($child_category->categories as $childCategory)
            @include('admin.categories.list_child_category', ['child_category' => $childCategory])
        @endforeach
    </ul>
@endif