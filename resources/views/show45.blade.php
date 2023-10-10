<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(!empty($show))
    <ul>
    @foreach($show as $value)
        <li>Id: {{$value -> id}}</li>
        <li>Tên: {{$value -> name}}</li>
        <li>Ngay: {{$value -> date}}</li>
        <li>Giới Thiệu: {{$value -> infor}}</li>
        <br><br>
    @endforeach
    </ul>
    @else
    <h2>Lỗi</h2>
    @endif
</body>
</html>