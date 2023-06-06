<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktisi Latihan Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  <div class="container-fluid">
    <div class="nav-1 bg-primary w-100">
      <ul class="nav justify-content-end">
          <li class="nav-item">
              <a class="nav-link text-white" href="#">Gift Card</a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white" href="#">Track Order</a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white" href="#">Contact Us</a>
          </li>
        </ul>
      </div>
      <div class="nav-2 shadow">
        <nav class="navbar bg-light">
          <div class="container-fluid">
            <a class="navbar-brand">
              <img src="https://pnb.ac.id/img/logo-pnb.3aae610b.png" width="30%" alt="">
            </a>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
          </div>
        </nav>
      </div>
        <div class="my-4 bg-light">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link"  href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
          </ul>
        </div>
        <div class="row justify-content-between my-3">
          <div class="col-3">
            <ul class="list-group">
              <li class="list-group-item">An item</li>
              <li class="list-group-item">A second item</li>
              <li class="list-group-item">A third item</li>
              <li class="list-group-item">A fourth item</li>
              <li class="list-group-item">A Fifth item</li>
              <li class="list-group-item">And a sixth item</li>
              <li class="list-group-item">And a seventh one</li>
              <li class="list-group-item">And a another eighth</li>
              <li class="list-group-item">And a another nineth one</li>
              <li class="list-group-item">An item</li>
              <li class="list-group-item">A second item</li>
              <li class="list-group-item">A third item</li>
              <li class="list-group-item">A fourth item</li>
              <li class="list-group-item">A fifth item</li>
              <li class="list-group-item">And a sixth item</li>
            </ul>
          </div>
            <div class="col-9">
              <div class="row">
                <div class="col-8">
                  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                          <img src="https://i0.hippopx.com/photos/857/868/871/adventure-hd-wallpaper-landscape-mountain-preview.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                          <img src="https://e0.pxfuel.com/wallpapers/301/751/desktop-wallpaper-pemandangan-pegunungan.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="https://2.bp.blogspot.com/-AmEgz4MTT-s/VEG-a5OReDI/AAAAAAAACP4/Yj4HoHNHT8k/s1600/Pemandangan+Senja1.jpg" class="d-block w-100" alt="...">
                        </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>
                    </div>
                    <div class="col-4">
                        <ul class="list-group h-50">
                            <li class="list-group-item">The current link item</li>
                            <li class="list-group-item">A second link item</li>
                            <li class="list-group-item">A third link item</li>
                            <li class="list-group-item">A fourth link item</li>
                            <li class="list-group-item">A disabled link item</li>
                            <li class="list-group-item">The current link item</li>
                            <li class="list-group-item">A second link item</li>
                            <li class="list-group-item">A third link item</li>
                            <li class="list-group-item">A fourth link item</li>
                            <li class="list-group-item">A disabled link item</li>
                            <li class="list-group-item">The current link item</li>
                            <li class="list-group-item">A second link item</li>
                            <li class="list-group-item">A third link item</li>
                            <li class="list-group-item">A fourth link item</li>
                            <li class="list-group-item">A disabled link item</li>
                          </ul> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="row mt-5 justify-content-around">
                            <div class="card text-center" style="width: 13rem;">
                                <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2021/7/22/384815d0-33cd-40d6-8aaa-8e8562a09831.jpg.webp" class="card-img-top mt-4" alt="...">
                                <div class="card-body">
                                <p class="card-text">Beli Webcam berkualitas</p>
                                <a href="#" class="btn btn-success">button</a>  
                                </div>
                            </div>
                            <div class="card text-center" style="width: 13rem;">
                                <img src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/1/6/533a5668-d5e1-4fae-b63d-532e146ebb5f.jpg" class="card-img-top mt-4" alt="...">
                                <div class="card-body">
                                <p class="card-text">Beli Webcam berkualitas</p>
                                <a href="#" class="btn btn-success">button</a>  
                                </div>
                            </div>
                            <div class="card text-center" style="width: 13rem;">
                                <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2021/3/31/cef24ce2-6649-42b6-bf73-8f46a3b71034.jpg.webp" class="card-img-top mt-4" alt="...">
                                <div class="card-body">
                                <p class="card-text">Beli Webcam berkualitas</p>
                                <a href="#" class="btn btn-success">button</a>
                                </div>
                            </div>
                          </div>
                        </div>
                    <div class="col-4">
                      <div class="mt-5">
                        <img src="https://qph.cf2.quoracdn.net/main-qimg-2711b5448feaa645dd023f34ed43f06f-pjlq" width="310px" alt="">
                      </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>