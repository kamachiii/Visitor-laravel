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
          <form class="login-form" action="/loginAction" method="POST">
            @csrf
            <input type="text" name="username" placeholder="username"/>
            <input type="password" name="password" placeholder="password"/>
            <button>login</button>
            <p class="message">Not registered? <a href="/register">Create an account</a></p>
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
