<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        @if(!empty($staff))
        @foreach($staff as $value)
            <li><a href="/user/{{$value -> id}}">Id:{{$value -> id}}</a></li>
            <li><a href="{{$value -> name}}">Ten là: {{$value->name}}</a></li>
            <li><a href="{{$value->date}}">Ngày sinh: {{$value->date}}</a></li>
            <li>Thông tin: {{$value->infor}}</li>
            <br><br>
        @endforeach
        @else
            <h2>Lỗi</h2>
        @endif
    </ul>
</body>
</html>