<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>--}}
    {{--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
          integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Forum</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}/register">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <h4>Movie</h4>
            <ul class="list-group">
                <li class="list-group-item list-group-item-action"><a href="{{url('/')}}/1/view">Three days</a>
                    <span class="badge bg-info text-dark">4</span>
                    <span class="badge bg-info text-dark"><i class="fa-thin fa-heart"></i>3</span>
                    <br>
                    <small>2022-01-22 | by SB Hero</small>
                </li>
                <li class="list-group-item list-group-item-action">Four days
                    <span class="badge bg-info text-dark">4</span>
                    <span class="badge bg-info text-dark"><i class="fa-thin fa-heart"></i>3</span>
                    <br>
                    <small>2022-01-22 | by B Hero</small>
                </li>
                <li class="list-group-item list-group-item-action">Five days
                    <span class="badge bg-info text-dark">4</span>
                    <span class="badge bg-info text-dark"><i class="fa-thin fa-heart"></i>3</span>
                    <br>
                    <small>2022-01-22 | by S Hero</small>
                </li>
            </ul>
        </div>
        <div class="col-12 my-3">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-dark">All Movies</button>
            </div>
        </div>
    </div>
    <hr>
    <div class="row mt-5">
        <div class="col-12">
            <h4>Music</h4>
            <ul class="list-group">
                <li class="list-group-item list-group-item-action"><a href="#">Three days</a>
                    <span class="badge bg-info text-dark">4</span>
                    <span class="badge bg-info text-dark"><i class="fa-thin fa-heart"></i>3</span>
                    <br>
                    <small>2022-01-22 | by SB Hero</small>
                </li>
                <li class="list-group-item list-group-item-action">Four days
                    <span class="badge bg-info text-dark">4</span>
                    <span class="badge bg-info text-dark"><i class="fa-thin fa-heart"></i>3</span>
                    <br>
                    <small>2022-01-22 | by B Hero</small>
                </li>
                <li class="list-group-item list-group-item-action">Five days
                    <span class="badge bg-info text-dark">4</span>
                    <span class="badge bg-info text-dark"><i class="fa-thin fa-heart"></i>3</span>
                    <br>
                    <small>2022-01-22 | by S Hero</small>
                </li>
            </ul>
        </div>
        <div class="col-12 my-3">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-dark">All Musics</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
