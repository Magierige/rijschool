<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta tags for responsive design and compatibility -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta tags for SEO -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Page title -->
    <title>SB Admin 2 - Register</title>

    <!-- Importing custom fonts and styles for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <!-- Main container -->
    <div class="container">

        <!-- Card for the registration form -->
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <!-- Registration form -->
                            <form class="user" action="/register" method="post">
                                @csrf
                                <!-- Input fields for first and last name -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name" name="first_name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name" name="last_name">
                                    </div>
                                </div>
                                <!-- Input field for email -->
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" name="email">
                                </div>
                                <!-- Input field for date of birth -->
                                <div class="form-group">
                                    <input type="date" class="form-control form-control-user" id="exampleInputDate" placeholder="5-3-24" name="birthdate">
                                </div>
                                <!-- Input fields for street and house number -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleStreet" placeholder="Street" name="street">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user" id="exampleHouseNumber" placeholder="73" name="house_number">
                                    </div>
                                </div>
                                <!-- Input field for country -->
                                <div class="form-group">
                                    <select type="number" class="form-control" id="exampleHouseNumber" placeholder="Select Country" name="country">
                                        <option value="The Netherlands">The Netherlands</option>
                                        <option value="Germany">Germany</option>
                                    </select>
                                </div>
                                <!-- Input fields for city and zip code -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleCity" placeholder="City" name="city">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleZipCode" placeholder="ZipCode" name="zip">
                                    </div>
                                </div>
                                <!-- Input fields for password and password confirmation -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" name="repeat_password">
                                    </div>
                                </div>
                                <!-- Submit button for the form -->
                                <input type="submit" value="Register Account" class="btn btn-primary btn-user btn-block">
                            </form>
                            <!-- Links for password recovery and login -->
                            <hr>
                            <div class="text-center">
                                <a class="small" href="">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="/login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Importing JavaScript libraries -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>