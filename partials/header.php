<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="./styles/app.css">
  </style>
</head>
<body>

  <nav class="navbar bg-primary  navbar-expand-lg" data-bs-theme="dark">
  <!-- Navbar content -->

    <div class="container-fluid">
    <a class="navbar-brand" href="#">Country Source Engine</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/country-wiki/home.php">All Countries</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/country-wiki/searchByCode.php">Search By Code</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/country-wiki/searchByName.php">Search By Name</a>
        </li>
      <!--   <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul> -->
        </li> 
        <!-- <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->
      </ul>
      <form action="/country-wiki/showByName.php" class="d-flex" role="search">
        <input class="form-control me-2" name="name" type="search" placeholder="Search By Country Name" aria-label="Search">
        <button class="btn btn-outline-success"  type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>




  




 