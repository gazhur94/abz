<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tree</title>
</head>
<body>
@foreach ($workers as $worker)

     <ul>
         <li>{{$worker->name . ' | ' . $worker->position}}</li>
         @php($childrens = $worker->children)
            @if(count($childrens) > 0)
                @include('worker', ['workers' => $childrens])
            @endif
    </ul>
@endforeach
</body>
</html>
