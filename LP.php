<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jesar Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        body { 
            background-color: black;
            color: white; 
            font-family: 'Poppins', sans-serif; 
            overflow-x: hidden; 
        }
        html { 
            scroll-behavior: smooth; 
        }
        .logo { 
            color: #b74b4b;
            font-weight: 800; 
            transition: 0.5s ease; 
        }
        .logo:hover { 
            transform: scale(1.1); 
        }
        .nav-link.active { 
            color: #b74b4b !important; 
            border-bottom: 3px solid #b74b4b; 
        }
        .nav-link { 
            color: white !important; 
            transition: 0.3s ease; 
            border-bottom: 3px solid transparent; 
        }
        .nav-link:hover { 
            color: #b74b4b !important; 
            border-bottom: 3px solid #b74b4b; 
        }
        .home-img img { 
            width: 15vw; 
            border-radius: 50%; 
            box-shadow: 0 0 25px #b74b4b; 
            transition: 0.2s linear; 
        }
        .home-img img:hover { 
            transform: scale(1.05); 
        }
        .social-icons a { 
            display: inline-flex;
            justify-content: center; 
            align-items: center; 
            width: 40px; 
            height: 40px; 
            border: 2px solid #b74b4b; 
            font-size: 20px; 
            border-radius: 50%; 
            margin-right: 15px; 
            transition: 0.3s ease; 
            color: #b74b4b; 
        }
        .social-icons a:hover { 
            color: black; 
            transform: scale(1.3) translateY(-5px); 
            background-color: #b74b4b; 
            box-shadow: 0 0 25px #b74b4b; 
        }
        .btn-custom { 
            padding: 10px 28px; 
            border-radius: 40px; 
            color: #b74b4b; 
            border: 2px solid #b74b4b; 
            transition: 0.3s ease; 
        }
        .btn-custom:hover { 
            background-color: #b74b4b; 
            color: black; 
            box-shadow: 0 0 25px #b74b4b; 
        }
        .section-padding { 
            padding: 80px 0; 
            min-height: 100vh; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            flex-direction: column; 
            text-align: center; 
        }
        .slide-card { 
            background-color: rgba(255,255,255,0.05); 
            padding: 40px; 
            border-radius: 15px; 
            box-shadow: 0 0 15px rgba(0,0,0,0.2); 
            backdrop-filter: blur(5px); 
        }
        .section-title { 
            font-size: 3rem; 
            color: #b74b4b; 
            margin-bottom: 20px; 
            text-transform: uppercase; 
        }
        footer { 
            padding: 40px 20px; 
            background-color: #111; 
            text-align: center; 
            border-top: 1px solid rgba(255,255,255,0.1); 
        }
        footer a { 
            color: #b74b4b; 
            text-decoration: none; 
        }
        footer a:hover { 
            color: white; 
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top py-3">
            <div class="container-fluid px-5">
                <a class="navbar-brand logo" href="#">My Portfolio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                        <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
                        <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Home Section -->
    <section id="home" class="home d-flex justify-content-center align-items-center vh-100 container section-padding">
        <div class="row g-5 align-items-center justify-content-center">
            <div class="col-md-5 d-flex justify-content-center">
                <div class="home-img">
                    <img src="jesar.jpg" alt="Jesar's Portrait">
                </div>
            </div>
            <div class="col-md-7 text-center text-md-start">
                <div class="home-content">
                    <h1>Hi, It's <span>Jesar</span></h1>
                    <h3 class="typing-text">I'm a <span></span></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum deserunt fugiat odit exercitationem, similique illum!</p>
                    <div class="social-icons my-4">
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-github"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                    <a href="#" class="btn btn-custom">Hire me</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Include other sections -->
    <?php include 'projects.php'; ?>
    <?php include 'skills.php'; ?>
    <?php include 'education.php'; ?>
    <?php include 'experience.php'; ?>
    <?php include 'contact.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
