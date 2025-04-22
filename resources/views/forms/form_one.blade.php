<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> انشاء حساب </title>
    <!-- Add Bootstrap CSS for styling -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/main_1.css') }}" rel="stylesheet">

</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Simple Form</h2>
            <form action="{{ route('Forms.postcontact') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="form-group mm">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control 
                @error('first_name') 
                    is-invalid
                @enderror  " id="first_name" name="first_name" placeholder="Enter First Name"  >
                @error('first_name') 
                <small calss="invalid-feedback">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control  @error('last_name') 
                    is-invalid
                @enderror  " id="last_name" name="last_name" placeholder="Enter Last Name"  >
                @error('last_name') 
                <small calss="invalid-feedback">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control
                @error('email') 
                    is-invalid
                @enderror " id="email" name="email" placeholder="Enter Email" >
                @error('email')
                <small calss="invalid-feedback">{{$message}}</small>
                @enderror
            </div>
     
            <div class="form-group">
                <label for="password">Password Number</label>
                <input type="text" class="form-control
                @error('password') 
                    is-invalid
                @enderror " id="password" name="password" placeholder="Enter Passport Number" >
                @error('password') 
                <small calss="invalid-feedback">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="img">Upload Image</label>
                <input type="file" class="form-control
                 @error('img') 
                    is-invalid
                @enderror" id="img" name="img" >
                @error('img') 
                <small calss="invalid-feedback">{{$message}}</small>
                @enderror
            </div>

            <button type="submit" class="btn">Submit</button>
            <br></br>

            <a  href="{{ route('Forms.index') }}" >العودة للصفحة الرئيسية   </a>
        </form>
    </div>

    <!-- Add Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
