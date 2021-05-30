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
            display: flex;
            align-items: center;
            color:#FFFFFF;
            position: absolute;
            width: 342px;
            height: 205px;
            top: calc(50% - 205px/2 - 146.5px);
        }
        .box {
          display: flex;
          align-items: flex-end;
          justify-content: flex-end;
        }
        .logoipb{
            margin-top: 101px;
            margin-bottom: 73px;
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
            height: 146px;
            width: 146px;
        }
        .button{
            width: 116px;
            height: 38px;
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
        }
        .form{
            width: 359px;
            height: 60px;
            margin-bottom: 13px;
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
        }
        .img{
            position: absolute;
            width: 535px;
            height: 453px;
            left: 204px;
            top: 247px;
        }
    </style>

    <title>IPBCareer</title>
  </head>
  <body>
  <div class="d-flex bd-highlight" style="flex:stretch;">
  <div class="p-5 flex-fill bd-highlight" style="background-color:#0A70BB;flex: 3;align-items: stretch;">
    <div class="d-flex align-items-start flex-column bd-highlight mb-1">
  <div class="mb-auto p-2 bd-highlight">
    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Imperdiet velit donec fermentum fermentum sed at eget cursus. Nulla duis ut.
    </p>
  </div>
  
</div>

<div class="d-flex align-items-end flex-column bd-highlight mb-3" style="flex:stretch">
  
  <div class="mt-auto p-2 bd-highlight">
    <img src="{{asset("images/2_1.png")}}" alt="" width="400" height="600" class="align-self-stretch">
  </div>
</div>
    </div>
      <div class="p-3 flex-fill bd-highlight" style="background-color:#E5E5E5;;flex: 2;align-items: stretch; width: auto;">
        <img src="{{asset("images/ipb2.png")}}" alt="" class="rounded mx-auto d-block logoipb">
        <form method="POST" action="{{url('/user')}}">
        @csrf
          <div class="mb-3">
            <input type="email" class="form-control form rounded mx-auto d-block" name='name' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
          </div>
          <div class="mb-3">
            <input type="password" class="form-control form rounded mx-auto d-block" name='password' id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="row justify-content-between"  style="margin-top:41px">
            <div class="col-4" style="margin-left:41px;">
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1" style="font-size:18px; font-weight: 500; color: rgba(0, 0, 0, 0.5);">Remember Me</label>
              </div>
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-primary">Log In</button>
            </div>
          </div>
        </form>
        <div class="text-center" style="padding-top:30px; padding-bottom:70px; text-align: justify;">
            <a style="color:#0061A8" href="{{url('/signup')}}">Don’t have an account ? Sign up!</a>
        </div>
      </div>
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
