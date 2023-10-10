<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @if(!empty($type))
    <h1>Đồ Điện Tử</h1>
    
        <div class="header">
        @foreach($type as $value)
        <div class="type1">
                <h2><a href="{{$value -> alias}}">{{$value -> name}}</a></h2>
                <img src="{{$value->image}}" alt="" width = '100px'>
                <p>{{$value-> price}}</p>
        </div>
        @endforeach
        </div>
    @endif
    @if(!empty($type2))
    <h1>Đồ Khác</h1>
    <table border = 1 cellspacing = 0>
        
        @foreach($type2 as $value)
            <tr>
                <td><a href="{{$value -> alias}}">{{$value -> name}}</a></td>
                <td><img src="{{$value->image}}" alt="" width = '100px'></td>
                <td>{{$value-> price}}</td>
            </tr>
        @endforeach
        
    </table>
   
    @endif


</body>
</html>