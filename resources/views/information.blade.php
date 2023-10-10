<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        @if(!empty($name))
        <h1 style="font-size: 25px;"><em>{{$name}}</em></h1>
        @endif
    
        @if(!empty($information))
            <ul>
            @foreach($information as $key => $value)
            <li>{{$key}} {{$value}}</li>
            @endforeach 
            </ul>
        @endif


        @if(!empty($namefamily))
            <h2>{{$namefamily['namefml']}}</h2>
        @endif

        @if(!empty($family))
            <ul>
            @foreach($family as $key => $value)
            <li>{{$key}} {{$value}}</li>
            @endforeach
            </ul> 
        @endif
        
       @if(!empty($orther))
       {{$orther}}
       @endif   
        


</body>
</html>