<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<h1>List of Users</h1>
<ul>
    @foreach ($users as $user)
        <li>Tên là: {{$user->name}}</li>
        <li>Ngày là: {{$user->date}}</li>
        <li>Trường: {{$user->studen}}</li>
       
    
    @endforeach

   
</ul>
  
</body>
</html>