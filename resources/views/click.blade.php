<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if(!empty($showname))
    <li>Id: {{$showname -> id}}</li>
    <li>Ten là: {{$showname -> name}}</li>
    <li>Ngày là: {{$showname -> date}}</li>
    <li>Thông tin: {{$showname -> infor}}</li>
    @else
        <h1>{{$message1}}</h1>
    @endif

</body>
</html>