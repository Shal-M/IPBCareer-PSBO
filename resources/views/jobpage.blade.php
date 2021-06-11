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
        width: 800px;
        height: 2150px;
        border-radius: 5px;
        background-color: white;
        margin: 20px auto;
        margin-top: 30px;
        padding-top: 10px;
        padding-left: 20px;
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
        <div class="d-flex">
          <div class="flex-shrink-0">
            <img src="{{asset("images/gojek.png")}}" alt="" width="350" height="220" style="margin-top:20px;">
          </div>
          <div class="flex-grow-1 ms-3">
            <div class="d-flex flex-column bd-highlight mb-3" style="margin-top:10px;">
              <div class="p-2 bd-highlight" style="color:#0061A8; font-style:Poppins; font-size: 30px;">UI Designer Internship</div>
              <div class="p-2 bd-highlight" style="font-size: 20px;">Gojek</div>
              <div class="p-2 bd-highlight" style="font-size: 10px;">South Jakarta City, Indonesia</div>
              <div class="p-2 bd-highlight" style="font-size: 10px;">Posted since 18 August 2021</div>
              <div class="p-2 bd-highlight" style="font-size: 15px;">100 Students applied for this intern</div>
            </div>
          </div>
        </div>
        <hr>
        <div class="flex-grow-1 ms-3">
            <div class="d-flex flex-column bd-highlight mb-3" style="margin-top:10px;">
              <div class="p-2 bd-highlight" style="color: black solid; font-style:Poppins; font-size: 30px;">Job Description</div>
              <div class="p-2 bd-highlight" style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mi vitae, sapien senectus ultricies mi. Tincidunt elementum feugiat ornare pharetra, ac mattis. Vitae risus aliquam, in quis dignissim diam diam. Molestie tortor sed augue cursus ultricies habitant non. Dolor morbi nunc, vitae blandit metus. Ut non aenean nibh morbi dictum enim. At lorem lobortis leo aliquet amet, scelerisque vestibulum arcu in. Faucibus turpis egestas egestas in fames commodo a sed. Commodo est iaculis elit est hac erat libero at. Interdum phasellus maecenas aliquam pellentesque. Elit pretium in facilisi amet faucibus eget ultrices lacus.</div>
              <div class="p-2 bd-highlight" style="font-size: 30px;">Minimum Qualifications</div>
              <div class="p-2 bd-highlight" style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mi vitae, sapien senectus ultricies mi. Tincidunt elementum feugiat ornare pharetra, ac mattis. Vitae risus aliquam, in quis dignissim diam diam. Molestie tortor sed augue cursus ultricies habitant non. Dolor morbi nunc, vitae blandit metus. Ut non aenean nibh morbi dictum enim. At lorem lobortis leo aliquet amet, scelerisque vestibulum arcu in. Faucibus turpis egestas egestas in fames commodo a sed. Commodo est iaculis elit est hac erat libero at. Interdum phasellus maecenas aliquam pellentesque. Elit pretium in facilisi amet faucibus eget ultrices lacus.</div>
              <div class="p-2 bd-highlight" style="font-size: 30px;">Benefit</div>
              <div class="p-2 bd-highlight" style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mi vitae, sapien senectus ultricies mi. Tincidunt elementum feugiat ornare pharetra, ac mattis. Vitae risus aliquam, in quis dignissim diam diam. Molestie tortor sed augue </div>
            </div>
          </div>
      </div>
    </div>
  </body>
</html>