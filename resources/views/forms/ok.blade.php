

<div class="container">
    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
    <p>شكراً لك على تعبئة النموذج. سوف نتواصل معك قريباً.</p>
    <a href="{{ route('Forms.form_one') }}" class="btn btn-primary">العودة إلى الصفحة الرئيسية</a>
</div>
