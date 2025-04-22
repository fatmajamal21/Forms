<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

          <title>تسجيل الدخول  </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('assets/css/main_2.css') }}" rel="stylesheet">
    </head>
    <body>
    <div class="login-container">
        <h2>تسجيل الدخول</h2>
        <form action="{{ url('/submit-form') }}" method="POST">
            @csrf
            <input  name="email" id="email" type="email" class=" input-field" placeholder="البريد الإلكتروني" required>
            <input  name="password" type="password" id="password" class="input-field" placeholder="كلمة المرور" required>
            <button type="submit" class="btn">دخول</button>
        </form>
        <div class="forgot-password">
            <a href="#">نسيت كلمة المرور؟</a>
            <div class="sing-up ">
                <a href="{{ route('Forms.form_one') }}" >انشاء حساب </a>
        </div>
    </div>
    </body>
</html>




