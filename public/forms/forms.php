<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | | Registration</title>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js" defer></script>
  </head>
  <body>
    <div class="container">
      <form action="" class="form-login" id="login">
        <div class="link">
          <h1>Login</h1>
        </div>
        <div class="form-message">Incorrect username or password</div>
        <div class="form-input">
          <input
            type="text"
            name="username"
            id="username"
            autofocus
            placeholder="Username or Email"
          />
          <div class="form-message error-message">Wrong username or email</div>
        </div>
        <div class="form-input">
          <input
            type="password"
            name="password"
            id="password"
            autofocus
            placeholder="Password"
          />
        </div>
        <div class="form-input">
          <button type="submit">Continue</button>
        </div>
        <p class="link"><a href="#">Forget your password</a></p>
        <p class="link">
          <a href="#" id="linkCreateAccount"
            >Don't have an account? Create account</a
          >
        </p>
      </form>
      <form action="" class="form-register form-hidden" id="register">
        <div class="link">
          <h1>Registration</h1>
        </div>
        <div class="form-message">Incorrect username / password</div>
        <div class="form-input">
          <input
            type="text"
            name="username"
            id="username"
            autofocus
            placeholder="Username or Email"
          />
        </div>
        <div class="form-input">
          <input
            type="password"
            name="password"
            id="password"
            autofocus
            placeholder="Password"
          />
        </div>
        <div class="form-input">
          <input
            type="password"
            name="retypePassword"
            id="retypePassword"
            autofocus
            placeholder="Re-type Password"
          />
        </div>
        <div class="form-input">
          <button type="submit">Continue</button>
        </div>

        <p class="link">
          <a href="#" id="linkLoginAccount">Already has an account?</a>
        </p>
      </form>
    </div>
  </body>
</html>
