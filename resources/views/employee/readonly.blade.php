<!doctype html>
    <head>
        <title>View Employee Information</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <!-- new link via sir -->
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            .main {
                display: flex;
                flex-direction: row;
                width: 98vw;
                height: 100vh;
                text-align: c;
            }
            .center {
                width: 1000vw;
                height: 80vh;
                text-align: center;

            }
            table, th, td {
                border: 2px solid black;
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
            }
            *{
                /* margin:0; */
                padding:0;
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
    </head>
    
    <body>
        <h1 style="border: 1px solid black; background-color:rgb(40, 30, 89); text-align:center; color:aliceblue"> View Employee Information</h1>
        
        @if (session('status'))
        <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('status') }}
        </div> 
        @endif

        <div style="text-align: left;"><a href="http://localhost/jobify/public/home"> <button class="btnh" >&#8592:<i class="fa fa-home"></i></button></div></a>

        <div class="main">
            <div class="center">
        
            <table  id="myTable" style="text-align: center; width: 80%;">
                
        <thead>
        <tr>
            <th>ID</th>
            <th> Name</th>
            <th> Age</th>
            <th> PhoneNo</th>
            <th> Email</th>
            <th> City</th>
            <th> Province</th>
            <th> Expertise</th>
            <th> Experience</th>
        </tr>
        </thead>
        <tbody>
        <p id="forDeleteCode"></p>
        @foreach ($employees ?? '' as $employee)
        <tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->name}}</td>
            <td>{{$employee->age}}</td>
            <td>{{$employee->phoneNo}}</td>
            <td>{{$employee->email}}</td>
            <td>{{$employee->city}}</td>
            <td>{{$employee->province}}</td>
            <td>{{$employee->expertise}}</td>
            <td>{{$employee->experience}}</td>
            
            <!-- Buttons with Icons -->

        </tr>
        @endforeach
        </tbody>
        </table>
        </div>

        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready( function () {
            $('#myTable').DataTable();
            } );
        </script>


    </body>
</html>