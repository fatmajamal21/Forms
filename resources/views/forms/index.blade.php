<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة التسجيل والدخول</title>
    <link href="{{ asset('assets/css/main_0.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>مرحبًا بك في موقعنا</h1>
        <div class="button-container">
            <a href="{{ route('Forms.form_two') }}"  class="btn login">تسجيل الدخول</a>
            <a href="{{ route('Forms.form_one') }}" class="btn register">إنشاء حساب</a>
        </div>
    </div>
</body>
</html>
