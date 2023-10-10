<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    @if(!empty($showid))
    <li>Id: {{$showid -> id}}</li>
    <li>Ten là: {{$showid -> name}}</li>
    <li>Ngày là: {{$showid -> date}}</li>
    <li>Thông tin: {{$showid -> infor}}</li>
    @else
        <h1>{{$message}}</h1>
    @endif
</body>
</html>