<!DOCTYPE html>
<html>
    <head>
        <title>Update Company data</title>
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
            .btn{
                color:white;
            }
        </style>
    </head>
    <body>
        <h1 style="border: 1px solid black; background-color:#999; text-align:center;">Update Company Data</h1>
        <form action="{{ route ('company.update', $companys->id) }}" method="post">
        @csrf
            <label for="cname">Company Name: &nbsp;</label>
            <input type="text" id="cname" name="cname" value="{{$companys->cname}}"><br><br>

            <label for="email">Email: &nbsp;</label>
            <input type="text" id="cemail" name="cemail" value="{{$companys->cemail}}"><br><br>
            
            <label for="designation">Designation: &nbsp;</label>
            <input type="text" id="designation" name="designation" value="{{$companys->designation}}"><br><br>

<!--             
            <input type="radio" id="jobtype" name="jobtype" value="{{$companys->jobtype}}">
            <label for="jobtype">Jobtype</label><br>
            <input type="radio" id="css" name="fav_language" value="CSS">
            <label for="css">CSS</label><br>
            <input type="radio" id="javascript" name="fav_language" value="JavaScript">
            <label for="javascript">JavaScript</label> -->
                        
            
            <label for="jobtype">Change Jobtype:</label>
            <select id="jobtype" name="jobtype">
                <!-- <option value="{{$companys->jobtype}}">upda</option> -->
                <option value="{{$companys->jobtype}}"></option>
                <option value="remote">Remote</option>
                <option value="full-time">Full-time</option>
                <option value="hybrid">Hybrid</option>
            </select>

            <br><br>

            <label for="province">Change Province:</label>
            <select id="province" name="province">
            <option value="{{$companys->province}}"></option>
                <option value="punjab">Punjab</option>
                <option value="sindh">Sindh</option>
                <option value="balochistan">Balochistan</option>
                <option value="nwfp">NWFP</option>
                <option value="any">Any</option>
            </select>

            <br><br>
            
            <label for="salary">salary: &nbsp;</label>
            <input type="text" id="salary" name="salary" value="{{$companys->salary}}"><br><br>





            <br><br>
            <input type="submit" value="Update">
        </form>
    </body>
</html>
    