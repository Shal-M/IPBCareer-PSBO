<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
      .body{
        background-color: #0061A8;
      }

      .logoipb{
        margin-top: 10px;
        margin-bottom: 73px;
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
        height: 146px;
        width: 156px;
      }

      .box{
        width: 500px;
        height: 500px;
        background-color: white;
        margin: 20px auto;
        margin-top: 101px;
        padding-top: 10px;
      }

      .btn{
        background-color: #0061A8;
        margin-bottom: 34px;
        padding-left: 50px;
        padding-right: 50px;
      }
    </style>
  </head>
  <body class="body">
      <div class="box">
        <div class="img">
          <img src="{{asset("images/ipb2.png")}}" alt="" class="rounded mx-auto d-block logoipb">
          <h1><p class="text-center">IPB Career</p></h1>
            <div class="d-grid gap-2 col-6 mx-auto">
              <a class="btn btn-primary" role="button" href="">Log In as employer</a>
              <a class="btn btn-primary" role="button" href="">Sign Up as employer</a>
            </div>
        </div>
      </div>
  </body>
</html>