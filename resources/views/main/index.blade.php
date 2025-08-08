<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PK Blog</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand">Pavel Khaliman Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('main.index')}}">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="#">CV</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('personal.main.index')}}">ЛК</a></li>

            </ul>
        </div>
    </div>
</nav>
<!-- Page header with logo and tagline-->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <a href="#!"><img class="card-img-main" src="assets/Main.jpg" alt="..." /></a>
            <h1 class="fw-bolder">Welcome to my blog</h1>
            <p class="lead mb-0">My name is Pavel Khaliman and on this page I will be running my blog</p>
        </div>
    </div>
</header>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-12">

            <div class="row">
                @foreach($posts as $post)
                <div class="col-lg-6">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="{{asset('storage/' . $post->post_image)}}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{$date->translatedFormat('F')}} {{$date->day}}, {{$date->year}}</div>
                            <h2 class="card-title h4">{{$post->title}}</h2>
                            <p class="card-text">{{$post->content}}</p>
                            <a class="btn btn-primary" href="{{route('main.post.show', $post->id)}}">Читать →</a>
                        </div>
                    </div>
            </div>
                @endforeach
            <!-- Pagination-->
                    <div class="mx-auto">
                        {{$posts->links()}}
                    </div>


        </div>

        <!-- Side widgets-->

    </div>
</div>

<!-- Footer-->
<footer class="py-3 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Pavel Khaliman blog</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</div>
</body>
</html>

