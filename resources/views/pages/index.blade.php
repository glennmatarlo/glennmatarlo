<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>Glenn Matarlo</title>
</head>
<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="jumbotron">
            <h1>MY LARAVEL HOME</h1>
            </div>
            
            <div class="links">
                
                <a href="{{url('/home')}}">HOME</a>&nbsp;
                ABOUT&nbsp;
                <a href="{{url('/contact')}}">CONTACT</a>
            </div>
        </div>    
    </div>
<br>
<br>
    <div class="card">
  <div class="card-body">
    This is some text within a card body.
  </div>
</div>

</body>
</html>