<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "POST" action="{{route('student.delete',$student->id)}}">
    @csrf
    <button type="submit">Xóa</button>
    </form>
</body>
</html>