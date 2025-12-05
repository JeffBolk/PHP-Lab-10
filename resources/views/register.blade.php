<!-- Jeffrey Bolk -->
<!-- 2025-12-05 -->
<!-- Register Page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        <h2>Register</h2>
        <!-- Send data to /registerUser -->
        <form action="/registerUser" method="post">
            @csrf
            <input type="text" name="name" placeholder="name">
            <br>
            <input type="text" name="email" placeholder="email">
            <br>
            <input type="password" name="password" placeholder="password">
            <br>
            <button>Submit</button>
        </form>
    </div>
@endauth

</body>
</html>