<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/login.css">
  </head>
  <body>
    <div class="center">
      <h1>Sign Up</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
            <input type="nohp" required>
            <span></span>
            <label>No hp</label>
          </div>
          <div class="txt_field">
            <input type="password" required>
            <span></span>
            <label>Password</label>
          </div>
        {{-- <div class="pass">Back</div> --}}
        <input type="submit" value="Sign Up">
      </form>
    </div>

  </body>
</html>
