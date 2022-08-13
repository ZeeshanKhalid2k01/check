<!doctype html>
    <head>
        <title>View Staff Information</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

        <style>
            .main {
                display: flex;
                flex-direction: row;
                width: 100vw;
                height: 100vh;
                text-align: c;
                text-align:center;
                
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
        <h1 style="border: 1px solid black; background-color:rgb(40, 30, 89); text-align:center; color:aliceblue"> Mails send to Employees</h1>
        
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
            <th> Email</th>
            <th> cc</th>
            <th> bcc</th>
            <th> Subject</th>
            <th> Body</th>
            <th> Employee Name</th>
            <th> Employee ID</th>
            <th>Action</th>
            <!-- $table->id();
            $table->string('email',100);
            $table->string('cc',100);
            $table->string('bcc',100);
            $table->string('subject',100);
            $table->string('body',250);
            $table->string('empname',250);
            // $table->string('empid',250);


            $table->unsignedbiginteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees')
            ->onDelete('cascade'); -->

        </tr>
        </thead>
        <tbody>
        <p id="forDeleteCode"></p>
        @foreach ($listsemployees ?? '' as $listsemployee)
        <tr>
            <td>{{$listsemployee->id}}</td>
            <td>{{$listsemployee->email}}</td>
            <td>{{$listsemployee->cc}}</td>
            <td>{{$listsemployee->bcc}}</td>
            <td>{{$listsemployee->subject}}</td>
            <td>{{$listsemployee->body}}</td>
            <td>{{$listsemployee->empname}}</td>
            <td>{{$listsemployee->employee_id}}</td>

            
            <!-- Buttons with Icons -->
        <td>
        <a class="btn" style="border: 2px solid;background-color:white;color:green;" href="{{URL::to('listsemployee/edit', $listsemployee->id)}}" title="Edit -> {{$listsemployee->id}}">Update <i class="fa fa-edit"></i></a>
        
        <!-- Below we added onclick="return confirm ('Are you sure to delete the employee {{$listsemployee->name}} having id {{$listsemployee->id}}?')"-->
        <!-- If user presses OK on the confirmation dialogue, the route mentioned in href -->
       
        <a class="btn" style="border: 2px solid;color:red;background-color:white;" href="{{URL::to('listsemployee/delete', $listsemployee->id)}}" onclick="return confirm ('Are you sure to delete the company {{$listsemployee->name}} having id {{$listsemployee->id}}?')" title="Delete -> {{$listsemployee->id}}"> Trash <i class="fa fa-trash"></i></a> 
        </td>
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