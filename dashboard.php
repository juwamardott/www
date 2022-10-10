<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Toko Mardood | Dashbord</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <!-- membuat  css secara manual -->
    <link rel="stylesheet" href="style.css" />
  </head> 
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#">Mardood Trans</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacs</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- jumbotron -->
    <section class="jumbotron text-center">
      <img src="img.png" alt="Mardood Trans" width="250" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Mardood Trans</h1>
      <p class="lead">Bersama Kami ke Luar Negeri.</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#0099ff"
          fill-opacity="1"
          d="M0,256L48,224C96,192,192,128,288,122.7C384,117,480,171,576,202.7C672,235,768,245,864,234.7C960,224,1056,192,1152,170.7C1248,149,1344,139,1392,133.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- akhirjumbotron -->

    <!-- about -->
    <section id="about">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2>About me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-4">
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo dolorum provident dolorem laudantium officia nesciunt alias ratione. Sed placeat similique modi qui id consectetur quod, dolore neque! Ratione, fugiat. Dolor
              deserunt odit reiciendis quos. Beatae labore rem quisquam, maxime totam nemo, itaque vitae eius, repellendus ullam odio aliquam dolore soluta!
            </p>
          </div>
          <div class="col-4">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad quas voluptatibus iusto a temporibus perspiciatis eos iste et, vitae nisi suscipit sit, ullam fugit asperiores, earum fuga similique sapiente labore vero. Voluptas
              porro saepe laudantium. Recusandae quam laudantium ex magnam rem distinctio est, neque commodi autem maiores. Ratione, iure dolore.
            </p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e2edff"
          fill-opacity="1"
          d="M0,288L48,245.3C96,203,192,117,288,106.7C384,96,480,160,576,176C672,192,768,160,864,165.3C960,171,1056,213,1152,218.7C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- akhir about -->

    <!-- product -->
    <section id="product">
      <div class="container">
        <div class="row text-center mb-3 pd-4">
          <div class="col">
            <h2>My product</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="card">
              <img src="avanza2.jpg" class="card-img-top" alt="Product 1" />
              <div class="card-body">
                <p class="card-text">New Avanza</p>
                <p class="card-text">1.500 cc</p>
                <p class="card-text">Maks 6 Orang</p>
                <p class="card-text">IDR 250.000</p>
                <input type="submit" class="btn btn-success" name="Book" value="Book"/>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <img src="yaris.jpg" class="card-img-top" alt="Product 1" />
              <div class="card-body">
                <p class="card-text">New Yaris</p>
                <p class="card-text">1.500 cc</p>
                <p class="card-text">Maks 6 Orang</p>
                <p class="card-text">IDR 250.000</p>
                <input type="submit" class="btn btn-success" name="Book" value="Book"/>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <img src="veloz" class="card-img-top" alt="Product 1" />
              <div class="card-body">
                <p class="card-text">New Veloz</p>
                <p class="card-text">1.500 cc</p>
                <p class="card-text">Maks 6 Orang</p>
                <p class="card-text">IDR 250.000</p>
                <input type="submit" class="btn btn-success" name="Book" value="Book"/>
                <?php
                if (isset($_POST["action"])) {
                  switch ($_POST["action"]) {
                  case "Book":
                    Book();
                    break;
                    }
                  }
                  function Book() {
                    echo '<script>window.location="login.php"</script>';
                    exit;
                   };
                ?>

              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <img src="avanza.jpg" class="card-img-top" alt="Product 1" />
              <div class="card-body">
                <p class="card-text">New Avanza</p>
                <p class="card-text">1.500 cc</p>
                <p class="card-text">Maks 6 Orang</p>
                <p class="card-text">IDR 250.000</p>
                <input type="submit" class="btn btn-success" name="Book" value="Book"/>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <img src="cary.jpg" class="card-img-top" alt="Product 1" />
              <div class="card-body">
                <p class="card-text">NEW Carry</p>
                <p class="card-text">1.500 cc</p>
                <p class="card-text">Maks 6 Orang</p>
                <p class="card-text">IDR 250.000</p>
                <input type="submit" class="btn btn-success" name="Book" value="Book"/>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card">
              <img src="OIP.jpg" class="card-img-top" alt="Product 1" />
              <div class="card-body">
                <p class="card-text">Xenia Type X</p>
                <p class="card-text">1.300 cc</p>
                <p class="card-text">Maks 6 Orang</p>
                <p class="card-text">IDR 250.000</p>
                <input type="submit" class="btn btn-success" name="Book" value="Book"/>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#0099ff"
          fill-opacity="1"
          d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- akhir product -->

    <!-- contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <form>
              <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="" />
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Contact</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" />
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir contact -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
