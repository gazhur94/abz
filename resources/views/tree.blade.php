<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Tree</title>
</head>
<body>

    @foreach ($workers as $worker)

         <ul>
             <li onclick="getSubordinates({{$worker->id}})" id="{{$worker->id}}"><a href="#"  style="text-decoration: none; color: black; cursor: pointer">{{$worker->name . ' | ' . $worker->position}}</a></li>
             @php($childrens = $worker->children)
                @if($childrens || count($childrens) > 0)
                    @include('worker', ['workers' => $childrens])
                @endif
        </ul>
    @endforeach
    <script src="js/script.js"></script>
</body>
</html>
