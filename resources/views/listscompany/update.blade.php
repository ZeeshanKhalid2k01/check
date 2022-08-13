<!DOCTYPE html>
<html>
    <head>
        <title>Update Student</title>
        <!-- For Success alert that appears after deletion -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.c
        ss">
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

    <!-- $table->id();
            $table->string('email',100);
            $table->string('cc',100);
            $table->string('bcc',100);
            $table->string('subject',100);
            $table->string('body',250);
            $table->unsignedbiginteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')
            ->onDelete('cascade'); -->
        <h1 style="border: 1px solid black; background-color:#999; text-align:center;">Update Customers Data</h1>
        <form action="{{ route ('listscompany.update', $listscompanys->id) }}" method="post">
        @csrf
            <label for="id">ID: &nbsp;</label>
            <input type="text" id="id" name="id" value="{{$listscompanys->id}}"><br><br>
            <label for="email">Email: &nbsp;</label>
            <input type="text" id="email" name="email" value="{{$listscompanys->email}}"><br><br>
            <label for="cc">cc: &nbsp;</label>
            <input type="text" id="cc" name="cc" value="{{$listscompanys->cc}}"><br><br>
            <label for="bcc">bcc &nbsp;</label>
            <input type="text" id="bcc" name="bcc" value="{{$listscompanys->bcc}}"><br><br>
            <label for="subject">Subject &nbsp;</label>
            <input type="text" id="subject" name="subject" value="{{$listscompanys->subject}}"><br><br>
            <label for="body">body &nbsp;</label>
            <input type="text" id="body" name="body" value="{{$listscompanys->body}}"><br><br>

            <!-- For the Department dropdown -->
            <label for="company">Company_ID: &nbsp;</label>
            <select id="dropdown" name="company_id">
            @foreach($companys as $company)
            <option value="{{$company->id}}">
            {{$company->id}}
            </option>
            @endforeach
            </select>
            <br><br>
            <input type="submit" value="Update">
        </form>
    </body>
</html>
    