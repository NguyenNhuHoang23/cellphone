<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/student.css') }}">
</head>
<body>
    @if(!empty($male))
    <button type = "submit" value = "Thêm sản phẩm"><a href="/insert">Thêm sản phẩm</a></button>
    <h1>Danh Sách Nam</h1>
    <div class="frame">
    

    @foreach($male as $value)
    <div class="male">
        <h2>{{$value->name}}</h2>
        <p>{{$value->class}}</p>
        <img src="{{asset('/image/'.$value -> image)}}" alt="" width ='100px'>
        <p>{{$value->code}}</p>
        <p>{{$value->date}}</p>
        <p>{{$value->sex}}</p>
        <p>{{$value->majors}}</p>
        <p>{{$value->hometown}}</p>
        <button><a href="{{route('update.student', $value->id)}}">Update</a></button>
        <form method="POST" action="{{ route('student.delete', $value->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
        </form>
    </div>
    @endforeach
    @endif
</div>
    @if(!empty($female))
    <h1>Danh Sách Nữ</h1>

    <div class="frame">
    @foreach($female as $value)
    <div class="female">
        <h2>{{$value->name}}</h2>
        <p>{{$value->class}}</p>
        <img src="{{$value -> image}}" alt="" width ='100px'>
        <p>{{$value->code}}</p>
        <p>{{$value->date}}</p>
        <p>{{$value->sex}}</p>
        <p>{{$value->majors}}</p>
        <p>{{$value->hometown}}</p>
        <button><a href="{{route('update.student', $value->id)}}">Update</a></button>
        <form method="POST" action="{{ route('student.delete', $value->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
        </form>
    </div>
    @endforeach
    </div>
    @endif
</body>
</html>