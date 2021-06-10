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
        border-radius: 10px;
        background-color: white;
        margin: 20px auto;
        margin-top: 101px;
        padding-top: 10px;
        padding-left: 20px;
      }

      .logoipb{
        margin-top: 10px;
        margin-bottom: 73px;
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
        height: 146px;
        width: 156px;
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
        padding-right: 50px;
      }
      
      .form-control{
        width: 359px;
        height: 60px;
        border: solid 2px black;
        margin-bottom: 34px;
        padding-right: 50px;
      }

      #exampleFormControlTextarea1{
        width: 650px;
        height: 300px;
        border: solid 2px black;
        margin-bottom: 34px;
        padding-right: 50px;
      }
      
      .dropdown{
        margin-bottom: 20px;
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
    <div class="box">
        <div class="img">
          <img src="{{asset("images/ipb2.png")}}" alt="" class="rounded mx-auto d-block logoipb">
        </div>
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-4">
                    <form method="POST" action="{{url('/dashboard')}}">
                    <input class="form-control form rounded mx-auto d-block float-lg-start" type="text" placeholder="Job’s name" aria-label="default input example">
                    <input class="form-control form rounded mx-auto d-block float-lg-start" type="text" placeholder="Phone number" aria-label="default input example">
                    <input class="form-control form rounded mx-auto d-block float-lg-start" type="text" placeholder="Email" aria-label="default input example">
                    </form>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Job's Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Minimum Qualifications</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div> 
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Benefits</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div> 
                <label for="exampleFormControlTextarea1" class="form-label">Job's summary</label>
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                   Job's level
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Internship</a></li>
                    <li><a class="dropdown-item" href="#">Fresh graduate</a></li>
                    <li><a class="dropdown-item" href="#">Junior</a></li>
                    <li><a class="dropdown-item" href="#">Senior</a></li>
                  </ul>
                </div>
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Job's category
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Information Technology</a></li>
                    <li><a class="dropdown-item" href="#">System Developer</a></li>
                    <li><a class="dropdown-item" href="#">Business Analyst</a></li>
                    <li><a class="dropdown-item" href="#">Frontend Developer</a></li>
                  </ul>
                </div>
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                   vacancy
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">1</a></li>
                    <li><a class="dropdown-item" href="#">2</a></li>
                    <li><a class="dropdown-item" href="#">3</a></li>
                    <li><a class="dropdown-item" href="#">4</a></li>
                    <li><a class="dropdown-item" href="#">5</a></li>
                  </ul>
                </div>
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Industry
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Technology</a></li>
                    <li><a class="dropdown-item" href="#">IT</a></li>
                    <li><a class="dropdown-item" href="#">Textile</a></li>
                    <li><a class="dropdown-item" href="#">Bank</a></li>
                  </ul>
                </div>
            </div>
            <input class="form-control form rounded mx-auto d-block float-lg-start"  id="required" type="text" placeholder="Educational Requirement" aria-label="default input example">
          </div>
          <div class="row justify-content-around">
            <div class="col-4">
              Cancel
            </div>
            <div class="col-4">
              <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary rounded mx-auto d-block button" style="background-color:#0061A8; font-color:#F9F7F7;" type="submit">Post job</button>
              </div>
            </div>
          </div>
      </div>
  </body>
</html>