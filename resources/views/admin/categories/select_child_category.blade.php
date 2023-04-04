<option value="{{$child_category->id}}">{{$level . $child_category->title}}</option>
@if ($child_category->categories)
    <?php $level .= ' - - ' ?>
    @foreach ($child_category->categories as $childCategory)
        @include('admin.categories.select_child_category', ['child_category' => $childCategory, 'level' => $level])
    @endforeach
@endif




