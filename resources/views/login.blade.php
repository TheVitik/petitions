<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MyPetition | Login</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
<div id="login-form">
    <h1>Login</h1>
    <fieldset>
        <form action="/login" method="post">
            <input type="text" name="name" placeholder="Name" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
            <footer class="clearfix">
                <p><span class="info">R</span><a href="/register">Don't have an account?</a></p>
            </footer>
            <p id="message"></p>
        </form>
    </fieldset>

</div>
</body>
</html>