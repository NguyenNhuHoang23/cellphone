<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    @if(!empty($showsex)){
        @foreach($showsex as $value)
        <li>{{$value->stafff_name}}</li>
        <li>{{$value -> sex_id}}</li>
        <li>{{$value -> sex}}</li>
        @endforeach
    }else{
        <h1>Khoong co du lieu tra ve</h1>
    }
    @endif
    
</body>
</html>