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
            <div class="d-flex flex-column bd-highlight mb-3" style="margin-top: 0px; padding-left: 10px;">
              <div class="p-2 bd-highlight" style="color:#0061A8; font-style:Poppins; font-size: 48px;">{{$job[0]->jobs_name}}</div>
              <h1><div class="p-2 bd-highlight" style="font-size: 36px;">{{$employer[0]->company_name}}</div></h1>
              <div class="p-2 bd-highlight" style="font-size: 18px;">{{$employer[0]->company_address}}</div>
              <h1><div class="p-2 bd-highlight" style="font-size: 18px;">Posted since {{$job[0]->updated_at}}</div></h1>
              <h1><div class="p-2 bd-highlight" style="font-size: 24px;">100 Students applied for this intern</div></h1>
            </div>
          </div>
        </div>
        <hr>
        <div class="flex-grow-1 ms-3">
            <div class="d-flex flex-column bd-highlight mb-3" style="margin-top:10px;">
              <h1><div class="p-2 bd-highlight" style="color: black solid; font-style:Poppins; font-size: 30px;">Job Description</div></h1>
              <div class="p-2 bd-highlight" style="font-size: 18px;">{{$job[0]->jobs_desc}}</div>
              <h1><div class="p-2 bd-highlight" style="font-size: 30px;">Minimum Qualifications</div></h1>
              <div class="p-2 bd-highlight" style="font-size: 18px;">{{$job[0]->minimum_qualification}}</div>
              <h1><div class="p-2 bd-highlight" style="font-size: 30px;">Benefit</div></h1>
              <div class="p-2 bd-highlight" style="font-size: 18px;">{{$job[0]->Benefits}}</div>
              <h1><div class="p-2 bd-highlight" style="font-size: 30px;">Job's summary</div></h1>
            </div>
        </div>
        <div class="flex-grow-1 ms-3">
            <div class="d-flex flex-column bd-highlight mb-3" style="margin-top:5px;">
              <div class="p-2 bd-highlight" style="font-style:Poppins; font-size: 24px;">Jobs Level</div>
              <div class="p-2 bd-highlight" style="color:#0061A8; font-size: 16px; margin-bottom: 20px;">{{$job[0]->jobs_level}}</div>
              <div class="p-2 bd-highlight" style="font-style:Poppins; font-size: 24px;">Job Category</div>
              <div class="p-2 bd-highlight" style="color:#0061A8; font-size: 16px; margin-bottom: 20px;">{{$job[0]->jobs_category}}</div>
              <div class="p-2 bd-highlight" style="font-style:Poppins; font-size: 24px;">Educational Requirement</div>
              <div class="p-2 bd-highlight" style="color:#0061A8; font-size: 16px; margin-bottom: 20px;">{{$job[0]->educational_recruitment}}</div>
            </div>
        </div>
        <div class="d-flex flex-row-reverse container">
          <form method="POST" action="/applyjob">
            @csrf
                <div class="p-2"><button class="btn btn-primary rounded mx-auto d-block button" style="background-color:#0061A8; font-color:#F9F7F7;" type="submit">Apply Now</button></div>
                <div class="form-group">
                     <input type="hidden" id="id_jobs" name="id_jobs" value={{$job[0]->id}}>
                </div>
          </form>
          <div class="p-2"><a class="btn btn-outline-light" href="#" role="button" style="color:#0A70BB">Add Favorite</a></div>
        </div>
      </div>
    </div>
  </body>
</html>
