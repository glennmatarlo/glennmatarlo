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
        </div>    
    </div>

    <div class="links">
                HOME &nbsp;
                <a href="{{url('/about')}}">ABOUT</a> &nbsp;
                <a href="{{url('/contact')}}">CONTACT</a>
    </div>

    <div class="card" style="width: 18rem;margin-left:40%;">
        <div class="card-body">
        <form action="/action_page.php">
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" id="pwd">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
            <input class="form-check-input" type="checkbox"> Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>

    
</body>
</html>