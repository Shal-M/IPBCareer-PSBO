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
        height: 900px;
        border-radius: 5px;
        background-color: white;
        margin: 20px auto;
        margin-top: 30px;
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
                <a class="btn btn-primary" href="#" role="button">Edit Profile</a>
            </div>
            <div class="d-flex flex-column bd-highlight mb-3" style="margin: 10px 100px 10px 30px;">
              <h1><div class="p-2 bd-highlight" style="color: black solid; font-style:Poppins; font-size: 30px;">About Us</div></h1>
              <div class="p-2 bd-highlight" style="font-size: 18px;">Gojek is Southeast Asia’s leading on-demand, multi-service tech platform providing access to a wide range of services including transport, payments, food delivery, logistics, and many more. Founded in 2010 with providing solutions to Jakarta’s ever-present traffic problems in mind. Gojek started as a call center with a fleet of only 20 motorcycle-taxi drivers (ojek). With the principle of using technology to improve the lives of users, the Gojek app was launched in January 2015 for users in Indonesia to provide motorbike ride-sharing (GoRide), delivery (GoSend), and shopping (GoMart) services. Today, Gojek has transformed into a “Super App”: a one-stop platform with more than 20 services, connecting users with over 2 million registered driver-partners, and 500,000 GoFood merchants – with a total of more than 170 million total downloads across the region. By providing them access to products and services across multiple sectors, Gojek has helped – and continues to help – create more value for society, improving efficiency and productivity, as well as boosting financial inclusion.</div>
              <h1><div class="p-2 bd-highlight" style="font-size: 30px;">Address</div></h1>
              <div class="p-2 bd-highlight" style="font-size: 18px;">Pasaraya Blok M Gedung B Lt. 6, Jl. Iskandarsyah II No.7, RT.3/RW.1, Melawai, Kec.Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12160</div>
            </div>
        </div>
    </div>    
  </body>
</html>