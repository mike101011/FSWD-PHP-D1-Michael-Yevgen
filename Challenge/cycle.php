<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Challenge PHP Day 1</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styleChallenge.css">
</head>
<body>
    
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">CarShop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Cars</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cycle.php">Bikes</a>
                        </li>
                        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  More
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</div>
</nav>
</header>

<!-- including multidimensional array of arrays -->
<?php include 'bikes.php'; ?>

<main class="container">
    <div class="row">

        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card">
                <img src="<?php echo $bikes["Yamaha"]["picture"]?>" class="card-img-top" alt="<?php echo $bikes["Yamaha"]["model"]?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $bikes["Yamaha"]["model"]?></h5>
                    <p class="card-text">This is a short information about this motorcycle.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo "Seats: {$bikes["Yamaha"]["ps"]}"?></li>
                        <li class="list-group-item">Now at: <?php echo $bikes["Yamaha"]["location"]?></li>
                        <li class="list-group-item">Price: <?php echo $bikes["Yamaha"]["price"]?> €</li>
                    </ul>
                    <a href="#" class="btn btn-primary">More info...</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card">
                <img src="<?php echo $bikes["BMW"]["picture"]?>" class="card-img-top" alt="<?php echo $bikes["BMW"]["model"]?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $bikes["BMW"]["model"]?></h5>
                    <p class="card-text">This is a short information about this motorcycle.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo "Seats: {$bikes["BMW"]["ps"]}"?></li>
                        <li class="list-group-item">Now at: <?php echo $bikes["BMW"]["location"]?></li>
                        <li class="list-group-item">Price: <?php echo $bikes["BMW"]["price"]?> €</li>
                    </ul>
                    <a href="#" class="btn btn-primary">More info...</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card">
                <img src="<?php echo $bikes["Honda"]["picture"]?>" class="card-img-top" alt="<?php echo $bikes["Honda"]["model"]?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $bikes["Honda"]["model"]?></h5>
                    <p class="card-text">This is a short information about this motorcycle.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo "Seats: {$bikes["Honda"]["ps"]}"?></li>
                        <li class="list-group-item">Now at: <?php echo $bikes["Honda"]["location"]?></li>
                        <li class="list-group-item">Price: <?php echo $bikes["Honda"]["price"]?> €</li>
                    </ul>
                    <a href="#" class="btn btn-primary">More info...</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card">
                <img src="<?php echo $bikes["Harley Davidson"]["picture"]?>" class="card-img-top" alt="<?php echo $bikes["Harley Davidson"]["model"]?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $bikes["Harley Davidson"]["model"]?></h5>
                    <p class="card-text">This is a short information about this motorcycle.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo "Seats: {$bikes["Harley Davidson"]["ps"]}"?></li>
                        <li class="list-group-item">Now at: <?php echo $bikes["Harley Davidson"]["location"]?></li>
                        <li class="list-group-item">Price: <?php echo $bikes["Harley Davidson"]["price"]?> €</li>
                    </ul>
                    <a href="#" class="btn btn-primary">More info...</a>
                </div>
            </div>
        </div>

    </div> 
</main>


<footer>
  <p class="text-center">CarShop created @ Michael & Yevgen </p>
</footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>