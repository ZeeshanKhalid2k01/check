<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test mail</title>
    <style>

    .email-body
    {
        color:white;
        width:60%;
        margin: 30px auto;
        background-color: #BBA7A3;
        text-align:center;
        font-size:30px;
    }
    </style>

</head>
<body>
    <div class="email-body">
    <p>{{$details["body"]}}</p>
    </div>
    <div class="email-signature">
    <!-- <img src="images\cartBG.png" width="125px"> -->
    <p><b>NOTE:</b></p><br>This email is sent for the apllication request</p><br>
    <p>Regards: <br><b>Jobify</b> <br>AUTO GENERATED Mail Service</p>
    </div>

</body>
</head>