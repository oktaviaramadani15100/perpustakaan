<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/login.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post" action="{{ route('loginPost') }}">
        @csrf
        <div class="txt_field">
            <input type="email" required name="email">
            <span></span>
            <label>Email</label>
        </div>
        <div class="txt_field">
            <input type="password" required name="password">
            <span></span>
            <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Sign In">
        <div class="signup_link">
            Not a member? <a href="#">Signup</a>
        </div>
    </form>
    
    </div>

  </body>
</html>
