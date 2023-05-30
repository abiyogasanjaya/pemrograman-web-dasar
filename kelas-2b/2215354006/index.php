<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <title>belajar git</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-dark bg-primary pl-0 pr-0">
    <div class="container-fluid">
      <a class="navbar-brand"><img src="https://pnb.ac.id/img/logo-pnb.3aae610b.png" alt="" width="50px"></a>
      <div class="flex col-3">
        <div class="pb-3">
        <ul class="nav text-center justify-content-center text-white">
          <li class="nav-item px-3">
              <a class="text-white text-decoration-none" href="#">Gift Card</a>
          </li>
          <li class="nav-item px-3">
            <a class="text-white text-decoration-none" href="#">Track Order</a>
          </li>
          <li class="nav-item px-3">
            <a class="text-decoration-none text-white" href="#">Contact us</a>
          </li>
        </ul>
        </div>
      <div>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-info" type="submit">Search</button>
        </form>
      </div>
      </div>
    </div>
  </nav>
  <ul class="nav text-center justify-content-center">
    <li class="nav-item px-5">
        <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item px-5">
      <a class="nav-link" href="#">Shop</a>
    </li>
    <li class="nav-item px-5">
      <a class="nav-link" href="#">Blog</a>
    </li>
    <li class="nav-item px-5">
      <a class="nav-link" href="#">About Us</a>
    </li>
  </ul>
  <div class="container-fluid">
    <div class="row m-2">
      <!-- list group kiri -->
      <div class="col-sm-3">
        <ul class="list-group">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
          <li class="list-group-item">A fourth item</li>
          <li class="list-group-item">And a fifth one</li>
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
          <li class="list-group-item">A fourth item</li>
          <li class="list-group-item">And a fifth one</li>
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A third item</li>
          <li class="list-group-item">A fourth item</li>
          <li class="list-group-item">And a fifth one</li>
          <li class="list-group-item">An item</li>
        </ul> 
      </div>
      <div class="container col-6">
        <!-- carousel -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://i0.wp.com/mahatekno.com/wp-content/uploads/2020/09/iklan-sprite.jpg?fit=640%2C360" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://i0.wp.com/mahatekno.com/wp-content/uploads/2020/09/contoh-iklan-minuman-sprite.jpg?resize=640%2C360&ssl=1" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://salamadian.com/wp-content/uploads/2017/01/contoh-iklan-niaga-minuman.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <!-- card -->
        <div class="card-group pt-lg-2">
          <!-- card 1 -->
          <div class="card">
            <div class="d-flex">
              <div class="col-3">
                <img src="https://www.sprite.com/content/dam/nagbrands/us/sprite/en/new-cans-7-18-22/tropical-mix/sprite-tropical-mix-pdp-image-20ozbottle-desktop.png" class="card-img-top pt-lg-2" alt="Product 1" style="width: 90px;">
              </div> 
              <div class="card-body col-9 pt-lg-2">
                <h5 class="card-title">SPRITE® TROPICAL MIX</h5>
                <p class="card-text">An ode to our past for all the Sprite Remix fans from the early 2000s.</p>
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary text-white justify-content-center"><a class="text-decoration-none text-white"href="https://www.sprite.com/products/sprite-tropical-mix">Check Out</a></button>
            </div>
          </div>
          <!-- card 2 -->
          <div class="card ">
            <div class="d-flex">
              <div class="col-3">
                <img src="https://www.sprite.com/content/dam/nagbrands/us/sprite/en/new-cans-7-18-22/cherry/sprite-cherry-pdp-image-12ozcan-desktop.png" class="card-img-overlays pt-lg-2" alt="Product 1" style="width: 80px;">
              </div>
              <div class="card-body col-9 pt-lg-2">
                <h5 class="card-title">SPRITE® CHERRY</h5>
                <p class="card-text mb-4">ce-cold refreshment with just the right amount of cherry.</p>
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary text-white"><a class="text-decoration-none text-white"href="https://www.sprite.com/products/sprite-cherry">Check Out</a></button>
            </div>
          </div>
          <!-- Card 3 -->
          <div class="card ">
            <div class="d-flex">
              <div class="col-3">
                <img src="https://www.sprite.com/content/dam/nagbrands/us/sprite/en/2531-22-sprite-zero-sugar-vis-refresh/plp/sprite-zero-sugar-can.png" class="card-img-overlays pt-lg-2" alt="Product 1" style="width: 90px;">
              </div>
              <div class="card-body col-9 pt-lg-2">
                <h5 class="card-title">SPRITE® ZERO SUGAR</h5>
                <p class="card-text mb-4">The iconic great taste of Sprite with zero sugar.</p>
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary text-white"><a class="text-decoration-none text-white"href="https://www.sprite.com/products/sprite-zero-sugar">Check Out</a></button>
            </div>
          </div>
        </div>
      </div>
      <!-- list group kanan -->
      <div class="col-sm-3">
        <ul class="list-group">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
          <li class="list-group-item">A fourth item</li>
          <li class="list-group-item">And a fifth one</li>
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
          <li class="list-group-item">A fourth item</li>
          <li class="list-group-item">And a fifth one</li> 
        </ul> 
        <a href="https://www.sprite.com"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgE0oXlQCl1GLVCJJHWoS8iHHA-uQmo4Vtz94eC5RxW9Msr1EnWmwbHDjubLlTg_lPCDY&usqp=CAU alt="" width="300px"></a>
      </div>
    </div>
    
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>