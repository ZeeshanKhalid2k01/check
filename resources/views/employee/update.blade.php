<!DOCTYPE html>
<html>
    <head>
        <title>Update Employee data</title>
        <!-- For Success alert that appears after deletion -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            body{
                /* background-color: lightblue; */
                background: radial-gradient(rgb(98, 121, 79),#02581f);

                text-align: center;
            }
            
        </style>
    </head>
    <body>
        <h1 style="border: 1px solid black; background-color:#999; text-align:center;">Update Employees Data</h1>
        <form action="{{ route ('employee.update', $employees->id) }}" method="post">
        @csrf
        <label for="name">Name: &nbsp;</label>
        <input type="text" id="name" name="name" value="{{$employees->name}}"><br><br>
            
            <label for="age">Age: &nbsp;</label>
            <input type="text" id="age" name="age" value="{{$employees->age}}"><br><br>
            
            <label for="phoneNO">Phone NO: &nbsp;</label>
            <input type="text" id="phoneNO" name="phoneNO" value="{{$employees->phoneNo}}"><br><br>
            
            <label for="email">Email: &nbsp;</label>
            <input type="text" id="email" name="email" value="{{$employees->email}}"><br><br>
            
            <label for="city">City: &nbsp;</label>
            <input type="text" id="city" name="city" value="{{$employees->city}}"><br><br>
            
            <label for="province">Choose a province:</label>
            <select id="province" name="province">
            <option value="{{$employees->province}}"></option>

                <option value="punjab">Punjab</option>
                <option value="sindh">Sindh</option>
                <option value="balochistan">Balochistan</option>
                <option value="nwfp">NWFP</option>
                <option value="any">Any</option>

            </select>
            
            <label for="expertise">Expertise: &nbsp;</label>
            <input type="text" id="expertise" name="expertise" value="{{$employees->expertise}}"><br><br>

            <label for="experience">experience: &nbsp;</label>
            <input type="text" id="experience" name="experience" value="{{$employees->experience}}"><br><br>




            <br><br>
            <input type="submit" value="Update">
        </form>
    </body>
</html>
    