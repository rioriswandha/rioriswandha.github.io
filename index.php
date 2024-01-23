<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-PJsj/BTMqILvmcej7ulplguok8ag4xFTPryRq8xevL7eBYSmpXKcbNVuy+P0RMgq" crossorigin="anonymous" />
    <!-- Akhir Boostrap CSS -->

    <!-- Bootsrtap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <!-- Akhir Bootstrap Icons -->

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
    <!-- Akhir CSS -->
    <title>GEOPORTAL KABUPATEN KUDUS</title>
  </head>
  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning shadow-lg fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand text-black" href="#"><img src="img/kudusjava.png" alt="Bootstrap" width="100" height="50" />GEOPORTAL KABUPATEN KUDUS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active text-black" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="#projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
        <!-- login -->
        <form class="d-flex" role="login">
          <a href="login_form.php" class="btn btn-info enable" tabindex="-1" role="button" aria-disabled="true">Login/Daftar</a>
        </form>
        <!-- akhir login -->
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img src="img/kudus.jpg" alt="logokudus" width="200" />
      <h1 class="display-4">Selamat datang di Geoportal Kabupaten Kudus!</h1>
      <h1 class="display-4">Data dan informasi geospasial disediakan dalam</h1>
      <h1 class="display-4">bentuk GIS web services dan dapat ditelusuri keberadaanya</h1>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,128L60,154.7C120,181,240,235,360,256C480,277,600,267,720,229.3C840,192,960,128,1080,106.7C1200,85,1320,107,1380,117.3L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Jumbotron -->
    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum expedita corporis animi numquam veritatis aperiam hic explicabo consequuntur reprehenderit placeat?</p>
          </div>
          <div class="col-md-4">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius velit ut quo distinctio, quaerat maiores necessitatibus libero voluptatem, id earum sed delectus. Rem, quisquam numquam?</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e2edff"
          fill-opacity="1"
          d="M0,0L80,26.7C160,53,320,107,480,128C640,149,800,139,960,117.3C1120,96,1280,64,1360,48L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About -->

    <!-- Projects -->
    <section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My Projects</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/keyboard.jpg" class="card-img-top" alt="projek1" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/setup.jpg" class="card-img-top" alt="projek2" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/stik.jpg" class="card-img-top" alt="projek3" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/madrid.jpg" class="card-img-top" alt="projek5" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/gym.jpg" class="card-img-top" alt="projek5" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffff"
          fill-opacity="1"
          d="M0,96L30,85.3C60,75,120,53,180,69.3C240,85,300,139,360,144C420,149,480,107,540,112C600,117,660,171,720,192C780,213,840,203,900,181.3C960,160,1020,128,1080,138.7C1140,149,1200,203,1260,192C1320,181,1380,107,1410,69.3L1440,32L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Projects -->

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Message</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary mb-3">Send</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#0d6efd"
          fill-opacity="1"
          d="M0,96L60,101.3C120,107,240,117,360,149.3C480,181,600,235,720,229.3C840,224,960,160,1080,138.7C1200,117,1320,139,1380,149.3L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer class="bg-primary text-white text-center pb-3">
      <p>Created by <i class="bi bi-instagram"> </i><a href="https://www.instagram.com/rifqinawwal/" class="text-white fw-bold">Rifqinawwal</a></p>
    </footer>
    <!-- Akhir Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
