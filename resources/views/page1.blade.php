<!-- Jeffrey Bolk -->
<!-- 2025-12-05 -->
<!-- Page 1 Page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
</head>
<body>

@auth
<!-- Welcome message -->
<h1 style="border: 1px black solid; width: 15%; padding: 20px">Hello {{$user}}</h1>
<form action="/logout" method="post">
    @csrf 
    <button>Logout</button>
</form>

@else
    <!-- Redirect to login page -->
    <div>
        <h2>Not Authenticated</h2>
        <form action="/" method="get">
            <button>Login</button>
        </form>
    </div>
@endauth

</body>
</html>