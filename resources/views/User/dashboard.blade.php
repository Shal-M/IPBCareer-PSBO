<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <title>IPB Career</title>
  </head>
  <body style="background-color:#0061A8">
    <!--navbar -->
    <div class="d-flex flex-column bd-highlight mb-3">
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand">
          <img src="{{asset("images/ipb2.png")}}" alt="" width="80" height="80">
        </a>
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link" href="#" style="font-size:24px; font-family: poppins; color:#1B1717">Favorites</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{asset("images/carbon_user-avatar.png")}}" alt="" width="45" height="45">
          </a>
          <ul class="dropdown-menu dropdown-menu-lg-end">
            <li><div class="dropdown-item disabled d-flex bd-highlight">
                  <div class="p-2 bd-highlight"><div class="d-flex flex-column bd-highlight mb-2">
                      <div class="bd-highlight" style="color:#000000; font-size: 25px; font-family: Poppins; font-style: bold;">{{Auth::user()->name}}</div>
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
    <form class="p-4 bd-highlight bg-light" >
        <div class="input-group" style="filter: drop-shadow(0px 6px 4px rgba(0, 0, 0, 0.25));">
            <input type="search" name="search" class="form-control">
            <span class="input-group-prepend">
                <button type="submit" class="btn btn-primary btn-outline-info" style="background-color:#42ADE2; color:#000000;">search</button>
            </span>
        </div>
    </form>
    </div>
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