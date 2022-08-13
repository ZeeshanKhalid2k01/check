<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Laravel File Upload</title>
    <style>
        .container {
            max-width: 500px;
        }
        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        body{
                background-color: #25274d;
                text-align: center;

            }
        h3{
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
    <div style="text-align: left;"><a href="http://localhost/jobify/public/home"> <button class="btnh" >&#8592:<i class="fa fa-home"></i></button></div></a>

    <div class="container mt-5">
        <form action="{{route('imgUpload')}}" method="post" enctype="multipart/form-data">
          <h3 class="text-center mb-5">Upload images </h3>
            @csrf
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
          @endif
          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
            <div class="custom-file">
                <input type="file" name="file" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select file</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                Upload image
            </button>
        </form>
    </div>
</body>
</html>