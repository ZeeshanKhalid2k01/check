<!DOCTYPE html>
<html>
<title>admin panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
   

    h2{
        color:green;
    }
    .header{
        text-align:center;
    }
    p{
        color:green;
    }
    h1{
        color:red;
        text-align:center;
    }
    a{
        /* background-color:Red; */
    }
</style>
<body>

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <!-- <a href="{{ route('login') }}" class="btn btn-primary btn-rounded text-sm text-gray-700 dark:text-gray-500 underline">Log in</a> -->
                        <a href="{{ route('login') }}"><button type="button" class="btn btn-primary btn-rounded">Login</button></a>

                        @if (Route::has('register'))
                            <!-- <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a> -->
                            <a href="{{ route('register') }}"><button type="button" class="btn btn-primary btn-rounded">Register</button></a>

                        @endif
                    @endauth
                </div>
            @endif

<!-- <div class="w3-container">
    <div class="header">
    <h2>Admin Panel</h2>
    </div>

    <p>Manage Employee Record:</p>
    <div class="w3-bar w3-black">
        



        <a href="http://localhost/jobify/public/employee/create"><button  class="w3-bar-item w3-button">Add Employee</button></a>
        <a href="{{URL::to('employee/readonly')}}"><button  class="w3-bar-item w3-button">Read data</button></a>
        <a href="http://localhost/jobify/public/employee/read"><button class="w3-bar-item w3-button">Update Data</button></a>
        <a href="http://localhost/jobify/public/listsemployee/admin"><button class="w3-bar-item w3-button">Mails</button></a>
    </div>

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
       
    </div>
        <p>See Website:</p>
    <div class="w3-bar w3-teal">
        <a href="http://localhost/jobify/public/"><button class="w3-bar-item w3-button">Main Page</button></a>
        <a href="http://localhost/jobify/public/aboutus"><button class="w3-bar-item w3-button">About us</button></a>
        <a href="http://localhost/jobify/public/contactus"><button class="w3-bar-item w3-button">Contact us</button></a>
        <a href="http://localhost/jobify/public/privacypolicy"><button class="w3-bar-item w3-button">Privacy Policy</button></a>
        <a href="http://localhost/jobify/public/termsandconditions"><button class="w3-bar-item w3-button">Terms & Conditions</button></a>
    </div>

</div> -->
<div class="security">
    <h1>
        Due to Security first login	&#9888
    </h1>
</div>
</body>
</html>
