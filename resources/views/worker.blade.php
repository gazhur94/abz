@foreach ($childrens as $children)
    <ul>
        <li>{{$children->name . ' | ' . $children->position}}</li>
        @if (isset($children->children))
            @include('worker', ['childrens' => $children->children])
        @endif
    </ul>
@endforeach