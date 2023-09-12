<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSS Local --}}
    <link rel="stylesheet" href="{{ asset('css/style-login.css') }}">

    <title>Login</title>
</head>
<body>
    <div class="login-page">
        <div class="form">
          <form class="register-form" action="/registerAction" method="POST">
            @csrf
            <input type="text" name="name" placeholder="name"/>
            <input type="text" name="username" placeholder="username"/>
            <input type="password" name="password" placeholder="password"/>
            <button>create</button>
            <p class="message">Already registered? <a href="/login">Sign In</a></p>
          </form>
        </div>
      </div>

      {{-- JS --}}
      <script>
        $('.message a').click(function(){
            $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
      </script>
</body>
</html>
