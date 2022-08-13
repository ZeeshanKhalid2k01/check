<!doctype html>
    <head>
    <title>View Customers Orders</title>
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- NOTE: -->
    <!-- Below W3Schools link can be used to study different buttons -->
    <!-- https://www.w3schools.com/howto/howto_css_icon_buttons.asp -->
    <!-- For Success alert that appears after deletion -->


    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    </head>
 
    <!-- Cascading Style Sheet applied to different parts of the table -->
    <!-- START -->
    <style>
        table, th, td {
            border: 2px solid;
            border: double;
            text-align: center;
        }
        .center {
            margin-left: auto;
            margin-right: auto;
        }
        table {
            margin: 25px;
            color:black;

        }
        th, td {
            padding: 5px;
            
        }
        body{
                /* background-color: lightblue; */
                background: radial-gradient(rgb(156, 158, 80),#616527);
                /* width: 70%; */

                text-align: center;
            }
        .btn{
            color:white;
            width:100px;
        }

        .btnh {
                /* background-color: yellow; */
                border: none;
                color: black;
                padding: 12px 16px;
                font-size: 16px;            
                cursor: pointer;
                border:2px solid black;
                text-align: left;

                }

                /* Darker background on mouse-over */
                .btnh:hover {
                background-color: yellow;
                }

    </style>
    <!-- END -->
    <body>
        <h1 style="order: 1px solid black; background-color:rgb(40, 30, 89); text-align:center; color:aliceblue"> Present Employees</h1>
        <!--
        // ----------------------------------------------------------------
        // *** This view would get three values from StudentController.php
        // 1. a code to identify that update or delete operation was performed in controller
        // 2. updated student list
        // 3. CNIC of the student which has been updated/deleted
        // ----------------------------------------------------------------
        -->
        <!-- For Redirecting With Flashed Session Data when 'Delete' or 'Update' -->
        <!-- button is pressed in the 'list.blade.php' view which calls the relevant -->
        <!-- function 'delete' or 'update' in the StudentController and then this -->
        <!-- view, 'list.blade.php' is again called -->
        <!-- START -->
        @if (session('status'))
        <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('status') }}
        </div> 
        @endif

        <div style="text-align: left;"><a href="http://localhost/jobify/public"> <button class="btnh" >&#8592:<i class="fa fa-home"></i></button></div></a>

        <!-- END -->
        <table id="myTable" class="center">
        <thead>
        <tr>

        <!-- $table->string('name',35);
            $table->string('age',3);
            $table->string('phoneNo',11);
            $table->string('email',30);
            $table->string('city',15);
            $table->string('province',10);
            $table->string('expertise',20);
            $table->string('experience',20); -->
            <!-- <th>ID</th> -->
            <th> Name</th>
            <th> PhoneNo</th>
            <th> Email</th>
            <th> City</th>
            <th> Province</th>
            <th> Expertise</th>
            <th> Experience</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <p id="forDeleteCode"></p>
        <!-- Using Blade Loop. -->

    @csrf
        @foreach($employees as $employee)
        <tr>
        <td>{{$employee->name}}</td>
        <td>{{$employee->phoneNo}}</td>
        <td>{{$employee->email}}</td>
        <td>{{$employee->city}}</td>
        <td>{{$employee->province}}</td>
        <td>{{$employee->expertise}}</td> 
        <td>{{$employee->experience}}</td> 
        <!-- <td>{{$employee->salary}}</td>  -->
        <td><a href="{{URL::to('listsemployee/save' , $employee->id)}}"><button type="button" class="btn btn-danger">Contact</button></a></td> 
    
        </tr>
        @endforeach
        </tbody>
        </table>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready( function () {
            $('#myTable').DataTable();
            } );
        </script>


    </body>
</html>

