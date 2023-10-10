<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>
<body>
    <div class="header">
        <h1>FROM CREATE NEW</h1>
        <form action="{{ url('/create') }}" method="POST" name = "create">
            
        @csrf
            <p>Name</p>
            <input type="text" name = "name" placeholder="Name">
            <p>Class</p>
            <input type="text" name = "class" placeholder="Class">
            <p>Image</p>
            <input type="file" name = "img" placeholder="Image">
            <p>Code</p>
            <input type="text" name = "code" placeholder="Code">
            <p>Date</p>
            <input type="date" name = "date" placeholder="Date">
            <p>Sex</p>
            <select name="sex" id="">
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            <p>Majors</p>
            <input type="text" name = "majors" placeholder="Majors">
            <p>Hometown</p>
            <input type="text" name ="hometown" placeholder="hometown"><br>
            <input type="submit" value = "Insert Student">
        </form>
    </div>
</body>
</html>