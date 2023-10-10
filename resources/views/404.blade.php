
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
 @if(isset($error))
    <div class="alert alert-danger">
        {{$error}}
    </div>
@endif
 </body>
 </html>