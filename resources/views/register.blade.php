<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MyPetition | Register</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
<div id="login-form">
    <h1>Register</h1>
    <fieldset>
        <form action="/register" method="post">
            <input type="text" name="name" placeholder="Name" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Register">
            <footer class="clearfix">
                <p id="message"><span class="info">L</span><a href="/login">Already registered?</a></p>
            </footer>
            <p></p>
        </form>
    </fieldset>
</div>
</body>
</html>