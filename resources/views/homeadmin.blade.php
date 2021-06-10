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

    .btn{
        weight: 100px;
        height: 40px; 
        border: 1px solid black;
        background-color: #F9F7F7;
        color: black;
        font-size: 18px;
        border-radius: 5px;
        margin-bottom: 34px;
        margin-left: 133px;
      }

      .box{
        width: 1080px;
        height: 201px;
        border-radius: 6px;
        background-color: white;
        margin: 15px auto;
        margin-top: 5px;
        padding-top: 10px;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
      }

      .garis{
        background-color: white;
        border: 1px solid white;
        color: white;
      }
    </style>
  </head>
  <body>
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
                  <div class="p-2 flex-shrink-1 bd-highlight">Log Out</div>
                </div>
            </li>
          </ul>
        </li>
        </ul>
      </div>
    </nav>
    <hr class="garis">
    <div class="d-grid gap-2 d-md-block">
        <h1><a class="btn" href="{{url('/postjob')}}" role="button">Post Job</a></h1>
    </div>
    <div class="box">
        <div class="d-flex">
          <div class="flex-shrink-0">
            <img src="{{asset("images/gojek.png")}}" alt="" width="230" height="145" style="margin-top:20px;">
          </div>
          <div class="flex-grow-1 ms-3">
            <div class="d-flex flex-column bd-highlight mb-3" style="margin-top:10px;">
              <div class="p-2 bd-highlight" style="color:#0061A8; font-style:Poppins; font-size: 30px;">Nama Job</div>
              <div class="p-2 bd-highlight" style="font-size: 20px;">Nama Company</div>
              <div class="p-2 bd-highlight text-wrap" style="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Auctor quam eu nisi malesuada. Enim tortor vitae.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="box">
        <div class="d-flex">
          <div class="flex-shrink-0">
            <img src="{{asset("images/gojek.png")}}" alt="" width="230" height="145" style="margin-top:20px;">
          </div>
          <div class="flex-grow-1 ms-3">
            <div class="d-flex flex-column bd-highlight mb-3" style="margin-top:10px;">
              <div class="p-2 bd-highlight" style="color:#0061A8; font-style:Poppins; font-size: 30px;">Nama Job</div>
              <div class="p-2 bd-highlight" style="font-size: 20px;">Nama Company</div>
              <div class="p-2 bd-highlight text-wrap" style="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Auctor quam eu nisi malesuada. Enim tortor vitae.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
