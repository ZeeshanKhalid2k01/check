<!doctype html>
    <head>
        
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
        <title>View Company Information</title>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
        <style>
            .main {
                display: flex;
                flex-direction: row;
                width: 95vw;
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
        <h1 style="border: 1px solid black; background-color:rgb(40, 30, 89); text-align:center; color:aliceblue"> View Company Information</h1>
        
        @if (session('status'))
        <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('status') }}
        </div> 
        @endif

        <div style="text-align: left;"><a href="http://localhost/jobify/public/home"> <button class="btnh" >&#8592:<i class="fa fa-home"></i></button></div></a>

        <div class="main">
            <div class="center">
            </table><br>
        <table id="myTable" style="text-align: center; width: 80%;">
                <!-- <tr>
                    <td style></td>    
                <td> -->
            <thead>
                <tr>
                    <th>ID</th>
                    <th> Comapny Name</th>
                    <th> Email</th>
                    <th> Designation</th>
                    <th> Jobtype</th>
                    <th> Province</th>
                    <th> Salary</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <p id="forDeleteCode"></p>
                @foreach ($companys ?? '' as $company)
                <tr>
                    <td>{{$company->id}}</td>
                    <td>{{$company->cname}}</td>
                    <td>{{$company->cemail}}</td>
                    <td>{{$company->designation}}</td>
                    <td>{{$company->jobtype}}</td>
                    <td>{{$company->province}}</td>
                    <td>{{$company->salary}}</td>

            
                    <!-- Buttons with Icons -->
                    <td>
                        <a class="btn" style="border: 2px solid;color:green;background-color:white;" href="{{URL::to('company/edit', $company->id)}}" title="Edit -> {{$company->id}}">Update <i class="fa fa-edit"></i></a>
        
                        <!-- Below we added onclick="return confirm ('Are you sure to delete the company {{$company->name}} having id {{$company->id}}?')"-->
                        <!-- If user presses OK on the confirmation dialogue, the route mentioned in href -->
       
                        <a class="btn" style="border: 2px solid;color:red;background-color:white;" href="{{URL::to('company/delete', $company->id)}}" onclick="return confirm ('Are you sure to delete the company {{$company->name}} having id {{$company->id}}?')" title="Delete -> {{$company->id}}"> Trash <i class="fa fa-trash"></i></a> 
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