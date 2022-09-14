<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('front/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>
        UTS
    </title>
  </head>
  <body>
  <div class="container bg-info text-dark py-3">
    <h1 style="text-align:center" style>
        HAPPY BOOK STORE
    </h1>

    </div>
<div class="container">
<div class="d-flex my-1 justify-content-center">
<div class="btn-group">
   <a class="btn" href="{{URL::to('/')}}">
       HOME
   </a></li>

    <button type="button" style="padding: 4px;" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      CATEGORY
    </button>
    <ul class="dropdown-menu">
    @foreach($category as $c)
      <li><a class="dropdown-item" href="{{URL::to('/category/'.$c->id)}}">
      {{$c->category}}</a>
    </li>
    @endforeach
    </ul>

   <a class="btn " href="{{URL::to('/contact')}}">
       CONTACT
   </a></li>

  </div>

</div>

<div class="container mt-5 row">
    <div class="col-8">
        @yield('content')
    </div>
    <div class="col-4">
        <div class="bg-primary text-warning p-3">
            <h4>
                CATEGORY
            </h4>

        </div>
        <ul class="category " style = "list-style-type: none;">
          @foreach($category as $c)
            <li><a style="text-decoration:unset;" class="category-item" href="{{URL::to('/category/'.$c->id)}}">{{$c->category}}</a></li>
          @endforeach
          </ul>
    </div>
</div>

<div class="bg-info text-dark mt-30 py-3" style="text-align:center">
  @Happy Book Store 2021
</div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('front/js/bootstrap.bundle.min.js')}}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
    jQuery(document).ready(function($) {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
    });
</script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
