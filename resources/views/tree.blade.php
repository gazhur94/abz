<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


    <title>Tree</title>
</head>
<body>
    <h1>hello</h1>
    <button id="btn_start">1</button>
    <button id="btn_reset">2</button>
    <div>
        <div id="message"></div>
    </div>
    @foreach ($workers as $worker)

         <ul>
             <li>{{$worker->name . ' | ' . $worker->position}}</li>
             @php($childrens = $worker->children)
                @if(count($childrens) > 0)
                    @include('worker', ['workers' => $childrens])
                @endif
        </ul>
    @endforeach
    <script src="js/script.js"></script>
</body>
</html>
