<!-- @extends('layouts.app') -->

<!-- @section('content') -->
<!DOCTYPE html>
<html>
<head>
    
<title>login admin panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
     body{
                background-image: url('https://ssgnet.com/wp-content/uploads/2015/09/blue-red-background.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                text-align: center;
            }
</style>
</head>

<body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            {{ __('You are logged in!') }}
                            <div class="w3-container">
            <div class="header">
            <h2>Admin Panel</h2>
            <!-- <p>Buttons bars can easily be used as navigation bars:</p> -->
            </div>

            <p>Manage Employee Record:</p>
            <div class="w3-bar w3-black">
                


                <!-- <a href="https://www.w3schools.com">Visit W3Schools.com!</a> -->

                <a href="http://localhost/jobify/public/employee/create"><button  class="w3-bar-item w3-button">Add Employee</button></a>
                <a href="{{URL::to('employee/readonly')}}"><button  class="w3-bar-item w3-button">Read data</button></a>
                <a href="http://localhost/jobify/public/employee/read"><button class="w3-bar-item w3-button">Update Data</button></a>
                <a href="http://localhost/jobify/public/listsemployee/admin"><button class="w3-bar-item w3-button">Mails</button></a>
            </div>
        <!-- <div class="w3-bar w3-border">
        <button class="w3-bar-item w3-button">Button</button>
        <button class="w3-bar-item w3-button">Button</button>
        <button class="w3-bar-item w3-button">Button</button>
        </div> -->
        <!-- <br> -->
            <p>Manage Companies Record:</p>
            <div class="w3-bar w3-green">
                <a href="http://localhost/jobify/public/company/create"><button class="w3-bar-item w3-button">Add Company</button></a>
                <a href="{{URL::to('company/readonly')}}"><button class="w3-bar-item w3-button">Read data</button></a>
                <a href="{{URL::to('company/read')}}"><button class="w3-bar-item w3-button">Update Data</button></a>
                <a href="http://localhost/jobify/public/listscompany/admin"><button class="w3-bar-item w3-button">Mails</button></a>
            </div>
                <p>Update Website:</p>
            <div class="w3-bar w3-red">
                <a href="http://127.0.0.1:8000/file/upload-file2"><button class="w3-bar-item w3-button">Add images</button></a>
                <!-- <button class="w3-bar-item w3-button">Button</button>
                <button class="w3-bar-item w3-button">Button</button> -->
            </div>
                <p>See Website:</p>
            <div class="w3-bar w3-teal">
                <a href="http://localhost/jobify/public/"><button class="w3-bar-item w3-button">Main Page</button></a>
                <a href="http://localhost/jobify/public/aboutus"><button class="w3-bar-item w3-button">About us</button></a>
                <a href="http://localhost/jobify/public/contactus"><button class="w3-bar-item w3-button">Contact us</button></a>
                <a href="http://localhost/jobify/public/privacypolicy"><button class="w3-bar-item w3-button">Privacy Policy</button></a>
                <a href="http://localhost/jobify/public/termsandconditions"><button class="w3-bar-item w3-button">Terms & Conditions</button></a>
            </div>

        </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>

<!-- @endsection -->
