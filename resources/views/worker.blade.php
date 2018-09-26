@foreach ($childrens as $children)
    <ul>
        <li><a href="#" onclick="getSubordinates({{$children->id}})" id="{{$children->id}}" style="text-decoration: none; color: black; cursor: pointer">{{$children->name . ' | ' . $children->position}}</a></li>
        @if (isset($children->children))
            @include('worker', ['childrens' => $children->children])
        @endif
    </ul>
@endforeach