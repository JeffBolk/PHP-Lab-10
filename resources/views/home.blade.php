<!-- Jeffrey Bolk -->
<!-- 2025-12-05 -->
<!-- Home Page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

@auth
<!-- Prompt Logout -->
<form action="/logout" method="post">
    @csrf 
    <button>Logout</button>
</form>

@else
    <div style="border: 1px black solid; width: 15%; padding: 20px">
        <h2>Login</h2>
        <!-- Send data to /login via POST -->
        <form action="/login" method="post">
            @csrf 
            <input type="text" name="username" placeholder="UserName">
            <br>
            <input type="password" name="password" placeholder="Password">
            <br>
            <button>Login</button>
        </form>

        <!-- Redirect to register page -->
        <form action="/register" method="get">
            @csrf
            <button>Register</button>
        </form>
    </div>
@endauth

</body>
</html>