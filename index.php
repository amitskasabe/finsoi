<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bs/css/bootstrap.min.css">
    <style>
        #main-container{
            background-image: url('assets/images/bg.jpg')
        }
        #hero {
            height:100vh;
        }
        #info{
            display:flex;
            justify-content:center;
            align-items:center;
            color:white;
            height:100vh;
        }
        #image-container{
            display:flex;
            justify-content:center;
            align-items:end;
        }
    </style>
    <title>Document</title>
</head>
<body>
    

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    

    <div id="hero">
    <div class="container-fluid" id="main-container">
    <section id="hero">
        <div class="row">
            <div class="col-lg-6" id="image-container">
                <h1> <img src="assets/images/main-character.png" alt=""> </h1>
            </div>
            <div class="col-lg-6" id="info">
                <div class="text-container">
                    <h1>
                        Getting home loan is very BASIC now
                    </h1>
                    <h4>
                    With Us You Get Free Eligibility Check & End To End Fulfillment
                    </h4>
                    <hr>
                    <h2>Get a free consultation</h2>
                    <form action="">
                        <div class="form-group">
                            <input type="text" name="" class="form-control" id="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </div>

    </div>

    <div id="counting " class="container-fluid bg-light" style="height:20vh">
        <div class="row">
            <div class="col-lg-3 flex justify-center items-center bg-warning">
            <h1>test</h1>
            </div>
            <div class="col-lg-3">2</div>
            <div class="col-lg-3">3</div>
            <div class="col-lg-3">4</div>
        </div>
    </div>
    <script src="assets/bs/js/bootstrap.min.js"></script>
</body>
</html>