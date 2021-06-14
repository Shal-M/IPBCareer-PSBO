<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
    .float-lg-start{
        margin-right: 600px;
      }

    .box{
        width: 1080px;
        height: 950px;
        border-radius: 5px;
        background-color: white;
        margin: 20px auto;
        margin-top: 30px;
      }

      #exampleFormControlTextarea1{
        width: 950px;
        height: 300px;
        border: solid 2px black;
        margin-bottom: 34px;
        padding-right: 50px;
      }

      #exampleFormControlTextarea2{
        width: 950px;
        height: 100px;
        border: solid 2px black;
        margin-bottom: 34px;
        padding-right: 50px;
      }
    </style>
  </head>
  <body style="background-color:#0061A8">
   <!--navbar -->
   <div class="d-flex flex-column bd-highlight mb-3">
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand">
          <img src="{{asset("images/ipb2.png")}}" alt="" width="90" height="80">
        </a>
        <div class="float-lg-start" style="font-size: 36px;">IPB CAREER</div><br>
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link" href="#" style="font-size:24px; font-family: poppins; color:#1B1717">Home</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{asset("images/carbon_user-avatar.png")}}" alt="" width="45" height="45">
          </a>
          <ul class="dropdown-menu dropdown-menu-lg-end">
            <li><div class="dropdown-item disabled d-flex bd-highlight">
                  <div class="p-2 bd-highlight"><div class="d-flex flex-column bd-highlight mb-2">
                      <div class="bd-highlight" style="color:#000000; font-size: 25px; font-family: Poppins; font-style: bold;"></div>
                      <div class="bd-highlight" style="color:#000000;">Ilmu Komputer</div>
                  </div>
                </div>
                  <div class="p-2 flex-shrink-1 bd-highlight"><img src="{{asset("images/ipb2.png")}}" alt="" width="48" height="48"></div>
                </div>
            </li>
            <li><div class="d-flex bd-highlight">
                  <div class="p-2 w-50 bd-highlight">View Profile</div>
                  <div class="p-2 flex-shrink-1 bd-highlight" type="button" href="#">Log Out</div>
                </div>
            </li>
          </ul>
        </li>
        </ul>
      </div>
    </nav>
    <hr>
    <div class="box">
        <div class="container">
            <div class="row">
                <div class="col align-self-center">
            <img src="{{asset("images/gojek.png")}}" alt="" width="450" height="280" style="margin-top:20px; margin-bottom: 20px;">
            </div>
          <div class="flex-grow-1 ms-3 ">
            <div class="d-grid gap-1 col-2 mx-auto">
                <a class="btn btn-primary" href="#" role="button">Save Profile</a>
            </div>
    <div class="container">
        <div class="row justify-content-start">
            <div class="mb-3">
                <h3><label for="exampleFormControlTextarea1" class="form-label">About us</label></h3>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="jobs_desc" rows="3"></textarea>
            </div>
            <div class="mb-3">
                    <h3><label for="exampleFormControlTextarea1" class="form-label">Address</label></h3>
                    <textarea class="form-control" id="exampleFormControlTextarea2" name="minimum_qualification" rows="3"></textarea>
            </div>
        </div>
    </div>     
  </body>
</html>