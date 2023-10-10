<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header">
      @if(!empty($student))
        <h1>UPDATE FROM</h1>
        <form method="POST" action="{{route('student.update',$student->id)}}"> 
            @csrf
            <p>Name</p>
            <input type="text" name = "name" value ="{{$student->name}}">
            <p>Class</p>
            <input type="text" name = "class" value ="{{$student->class}}">
            <p>Image</p>
            <input type="file" name = "image" value ="{{$student->image}}">
            <p>Code</p>
            <input type="text" name ="code" value = "{{$student->code}}">
            <p>Date</p>
            <input type="date" name ="date" value ="{{$student->date}}">
            <p>Sex</p>
            <select name="sex" id="">
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            <p>Majors</p>
            <input type="text" name = "majors" value = "{{$student->majors}}">
            <p>Hometown</p>
            <input type="text" name = "hometown" value = "{{$student->hometown}}"><br>
            <input type="submit" value = "Update Student">
        </form>
    @else
        {{$message}}
    @endif
    </div>
</body>
</html>