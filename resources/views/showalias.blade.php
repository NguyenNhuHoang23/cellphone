<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if($show)
    <table border = 1 cellspacing = 0>
    <tr>
        
                
                <td>{{$show -> name}}</td>
                <td><img src="{{$show-> image}}" alt="" width = "100px"></td>
                <td>{{$show-> alias}}</td>
                <td>{{$show-> quantity}}</td>
                <td>{{$show-> national}}</td>
                <td>{{$show-> price}}</td>
                <td>{{$show -> describe}}</td>
                <td>{{$show-> sale_percenr}}</td>
       
    </tr>
    </table>
@else{
    {{$masse}}
}
@endif
</body>
</html>