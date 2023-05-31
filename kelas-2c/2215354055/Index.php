<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>


    <div class=" bg-dark">

        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Role</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Gacha</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
            </li>
        </ul>
    </div>
    <div>

        <nav class="navbar bg-dark" data-bs-theme="dark">
            <!-- <nav class="navbar bg-body-tertiary"> -->
            <div class="container-fluid">
                <a class="navbar-brand"><img src="data:image/jpeg;base64,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" width="60"></a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search your Waifu</button>
                </form>
            </div>
            <!-- </nav> -->
        </nav>
    </div>

    <div class="container-fluit">
        <div class="row">
            <div class="col">
                <ul class="list-group">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                    <li class="list-group-item">A fourth item</li>
                    <li class="list-group-item">And a fifth one</li>
                </ul>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://lh3.googleusercontent.com/uTX3EO0KP1xXumtJlFGcYVKPQpPxmkiNWdJAvhn8eDz0ggjxWnvTB0QFZ4T8rz-KOwDe-A=s162" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gacor</h5>
                        <p class="card-text">Dijamin dapet waifu</p>
                        <a href="#" class="btn btn-primary">Top up Now !!</a>
                    </div>
                </div>

            </div>
            <div class="col">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">An active item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                    <li class="list-group-item">A fourth item</li>
                    <li class="list-group-item">And a fifth one</li>
                </ul>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


</body>


</html>