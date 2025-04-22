
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض البيانات</title>
    <link href="{{ asset('assets/css/main_3.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="title">بيانات المستخدمين</h2>
        <div class="btn-container">
        <a href="{{ route('Forms.form_one') }}"  class="btn-back">الرجوع إلى الصفحة الرئيسية</a>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Image</th>
                <th scope="col">Ceratedat</th>
                <th scope="col">Updateat</th>
              </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->first_name }}</td>
                        <td>{{ $contact->last_name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->password }}</td>
                        <td><img src="{{ asset('uploads/'.$contact->img) }}" alt="image" class="img-thumbnail"></td>
                        <td>{{ $contact->created_at }}</td>
                        <td>{{ $contact->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
