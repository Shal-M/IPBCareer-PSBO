<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
    .content{
        font-family: Roboto;
        font-style: normal;
        font-weight: 500;
        font-size: 30px;
        line-height: 35px;
        margin-top: 40px;
        color: #F9F7F7;
    }
    .text1{
        color: #b4d7ee;
        font-size: 38px;
    }
    </style>
    <title>IPB Career</title>
  </head>
  <body style="background-color:#0061A8">
    <!--navbar -->
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand">
          <img src="{{asset("images/ipb2.png")}}" alt="" width="80" height="80">
        </a>
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link active" href="#" style="font-size:20px; color:#1B1717">How it works ?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="font-size:20px; color:#1B1717">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/adminpage')}}" style="font-size:20px; color:#0061A8">Sign your company</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/userloginpage')}}" style="font-size:20px; color:##0061A8">Log in</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary" href="{{url('/usersignuppage')}}" role="button">Sign Up</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="mb-auto p-2 bd-highlight">
    <p class="text1 container">Kerja selain di bank sekarang mudah!</p>
    <p class="content container">Gunakan Website resmi IPB Career<br /> untuk menunjang kualitas diri<br /> kalian untuk masa depan 
    </p>
  </div>
    <img class="rounded float-end" src="{{asset("images/1.png")}}" alt="" width="532px" height="392px" style="margin-top: 7.82px; mix-blend-mode: normal;">
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
