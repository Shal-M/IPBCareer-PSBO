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
        width: 600px;
        height: 1200px;
        border-radius: 10px;
        background-color: white;
        margin: 20px auto;
        margin-top: 101px;
        padding-top: 10px;
      }

      .form{
        width: 359px;
        height: 60px;
        border: solid 2px black;
        margin-bottom: 34px;
      }

      .form-control{
        width: 359px;
        height: 60px;
        border: solid 2px black;
        margin-bottom: 34px;
      }

      .btn{
        background-color: #0061A8;
        border-radius: 8px;
        margin-left: 80px;
        margin-right: 80px;
      }
    </style>
  </head>
  <body class="body">
    <div class="box">
        <div class="img">
          <img src="{{asset("images/ipb2.png")}}" alt="" class="rounded mx-auto d-block logoipb">
        </div>
        <form method="POST" action="{{url('/dashboard')}}">
            <input class="form-control form rounded mx-auto d-block" type="text" placeholder="Company name" aria-label="default input example">
            <input class="form-control form rounded mx-auto d-block" type="text" placeholder="Company employer's name" aria-label="default input example">
            <input class="form-control form rounded mx-auto d-block" type="text" placeholder="company type" aria-label="default input example">
            <input class="form-control form rounded mx-auto d-block" type="text" placeholder="company's address" aria-label="default input example">
        <div class="mb-3">
            <input type="email" class="form-control form rounded mx-auto d-block" name='email' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Company Email">
        </div>
        <div class="mb-3">
            <input type="password" class="form-control form rounded mx-auto d-block" name='password' id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="mb-3">
            <input type="password" class="form-control form rounded mx-auto d-block" name="retype-password" id="exampleInputPassword1" placeholder="Confirm password" placeholder="Retype-Password" Required>
        </div>   
        <div class="d-grid gap-2 col-6 mx-auto">
            <a class="btn btn-primary" role="button" href="">Sign Up</a>
        </div>      
        </form>
    </div>
  </body>
</html>