<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Jaby Maverick</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- AOS Animation CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <!-- Custom Styles -->
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #121212;
      color: #f5f5f5;
      scroll-behavior: smooth;
    }

    /* Navbar */
    .navbar {
      background-color: rgba(211, 82, 102, 0.9);
      position: sticky;
      top: 0;
      z-index: 1000;
      backdrop-filter: blur(8px);
    }
    .navbar-brand, .nav-link {
      color: white !important;
      font-weight: 600;
    }

    /* Hero Section */
    .hero {
      background: linear-gradient(-45deg, #1e1e1e, #121212, #2a2a2a, #121212);
      background-size: 400% 400%;
      animation: gradientMove 10s ease infinite;
      padding: 100px 20px;
      text-align: center;
    }
    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* Profile Image Styling */
    .profile-img {
      width: 250px;
      height: 250px;
      object-fit: cover;
      border-radius: 50%;
      border: 6px solid #d35266;
      box-shadow: 0 0 25px rgba(211, 82, 102, 0.7);
      animation: float 4s ease-in-out infinite;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .profile-img:hover {
      transform: scale(1.05);
      box-shadow: 0 0 35px rgba(211, 82, 102, 0.9);
    }
    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    /* Card Styling */
    .card {
      background-color: #1e1e1e;
      border: none;
      border-radius: 15px;
      padding: 20px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 0 20px rgba(211, 82, 102, 0.4);
    }

    /* Social Icons */
    a.social-icon {
      color: #d35266;
      font-size: 1.8rem;
      margin: 0 10px;
      position: relative;
      transition: transform 0.3s ease, color 0.3s ease;
    }
    a.social-icon:hover {
      color: #ff637d;
      transform: scale(1.2);
    }
    a.social-icon::after {
      content: attr(data-tooltip);
      position: absolute;
      bottom: -30px;
      left: 50%;
      transform: translateX(-50%);
      background: #d35266;
      color: white;
      padding: 5px 8px;
      font-size: 0.8rem;
      border-radius: 5px;
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.3s;
    }
    a.social-icon:hover::after {
      opacity: 1;
    }

    /* Scroll-to-top Button */
    #scrollTopBtn {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #d35266;
      color: white;
      border: none;
      border-radius: 50%;
      width: 45px;
      height: 45px;
      display: none;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      z-index: 999;
      box-shadow: 0 0 10px rgba(211, 82, 102, 0.6);
    }
    #scrollTopBtn:hover {
      background-color: #ff637d;
    }

    footer {
      background-color: #1e1e1e;
      padding: 20px;
      text-align: center;
      margin-top: 40px;
      font-size: 0.9rem;
      color: #aaa;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">Jaby Maverick</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#profile">Profile</a></li>
          <li class="nav-item"><a class="nav-link" href="#school">School</a></li>
          <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Social</a></li>
          <!-- Back to Home in Navbar -->
          <li class="nav-item"><a class="nav-link" href="{{ url('/') }}"><i class="fas fa-arrow-left me-1"></i> Home</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero text-light">
    <h1 class="display-4 fw-bold">Hi, I'm Jaby Maverick Lasquite</h1>
    <p class="lead"> Good Student! HAHAHAH🚀</p>
    <a href="#profile" class="btn btn-danger mt-3">Explore More</a>
    <!-- Back to Home Button -->
    <a href="{{ url('/') }}" class="btn btn-outline-light mt-3 ms-2">
      <i class="fas fa-arrow-left me-2"></i> Back to Home
    </a>
  </section>

  <!-- Profile Section -->
  <section id="profile" class="py-5 text-center" data-aos="fade-up">
    <img src="{{ asset('images/jaby.jpg') }}" alt="Profile Picture" class="profile-img mb-4">
    <h2 class="section-title text-light">Profile</h2>
    <p class="text-light fs-5">Hello! I'm <strong>Jaby Maverick Lasquite</strong>, “CEO of ‘I’ll do it later.’” 😎</p>
   
    <div class="container mt-4">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
          <div class="card p-4 shadow-lg border-0">
            <ul class="list-group list-group-flush text-start fs-5">
              <li class="list-group-item bg-dark text-light border-0"><i class="fas fa-user me-2 text-danger"></i><strong>Name:</strong> Jaby Maverick Lasquite</li>
              <li class="list-group-item bg-dark text-light border-0"><i class="fas fa-hourglass-half me-2 text-danger"></i><strong>Age:</strong> 21</li>
              <li class="list-group-item bg-dark text-light border-0"><i class="fas fa-birthday-cake me-2 text-danger"></i><strong>Birthday:</strong> June 9, 2004</li>
              <li class="list-group-item bg-dark text-light border-0"><i class="fas fa-mars me-2 text-danger"></i><strong>Gender:</strong> Male</li>
              <li class="list-group-item bg-dark text-light border-0"><i class="fas fa-map-marker-alt me-2 text-danger"></i><strong>Address:</strong> Tagudin, Philippines</li>
              <li class="list-group-item bg-dark text-light border-0"><i class="fas fa-phone-alt me-2 text-danger"></i><strong>Contact:</strong> +63 963 858 0777</li>
              <li class="list-group-item bg-dark text-light border-0"><i class="fas fa-envelope me-2 text-danger"></i><strong>Email:</strong> jabymavericklasquite@gmail.com</li>
              <li class="list-group-item bg-dark text-light border-0"><i class="fas fa-flag me-2 text-danger"></i><strong>Nationality:</strong> Filipino</li>
              <li class="list-group-item bg-dark text-light border-0"><i class="fas fa-heart me-2 text-danger"></i><strong>Hobbies:</strong> Reading Books, Playing Basketball, Sleeping</li>
              <li class="list-group-item bg-dark text-light border-0"><i class="fas fa-language me-2 text-danger"></i><strong>Languages:</strong> English, Filipino</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- School Background -->
  <section id="school" class="container py-5" data-aos="fade-up">
    <h2 class="section-title text-center mb-5"><i class="fas fa-graduation-cap me-2 text-danger"></i>School Background</h2>
    <div class="row g-4">
      <div class="col-md-3"><div class="card bg-dark text-light shadow-lg h-100 border-0"><img src="{{ asset('images/ISPSC.jpg') }}" class="card-img-top" alt="University" style="height:200px; object-fit:cover;"><div class="card-body"><h5 class="card-title text-danger">Ilocos Sur Polytechnic State College</h5><p class="card-text">Bachelor of Science in IT<br><small>(2023-present)</small></p></div></div></div>
      <div class="col-md-3"><div class="card bg-dark text-light shadow-lg h-100 border-0"><img src="{{ asset('images/TNHS.jpg') }}" class="card-img-top" alt="Senior High" style="height:200px; object-fit:cover;"><div class="card-body"><h5 class="card-title text-danger">Tagudin National High School</h5><p class="card-text">Senior High - ICT<br><small>(2021-2023)</small></p></div></div></div>
      <div class="col-md-3"><div class="card bg-dark text-light shadow-lg h-100 border-0"><img src="{{ asset('images/TNHS.jpg') }}" class="card-img-top" alt="Junior High" style="height:200px; object-fit:cover;"><div class="card-body"><h5 class="card-title text-danger">Tagudin National High School</h5><p class="card-text">Junior High<br><small>(2017-2021)</small></p></div></div></div>
      <div class="col-md-3"><div class="card bg-dark text-light shadow-lg h-100 border-0"><img src="{{ asset('images/SMES.jpg') }}" class="card-img-top" alt="Elementary" style="height:200px; object-fit:cover;"><div class="card-body"><h5 class="card-title text-danger">San Miguel Elementary School</h5><p class="card-text">Elementary Level<br><small>(2011-2017)</small></p></div></div></div>
    </div>
  </section>

  <!-- Experience Section -->
  <section id="experience" class="container py-5" data-aos="fade-up">
    <h2 class="section-title text-center mb-5"><i class="fas fa-briefcase me-2 text-danger"></i>Experience</h2>
    <div class="card bg-dark text-light shadow-lg border-0 mb-4"><div class="card-body"><h5 class="card-title text-danger mb-3"><i class="fas fa-laptop-code me-2"></i> News Video Editor</h5><p>In 2023, I did a work immersion as a video editor at DZTP Radio-Tv Tirad Pass in Candon City, Ilocos Sur.</p></div></div>
    <div class="row g-4">
      <div class="col-md-6"><div class="card bg-dark shadow-lg border-0"><img src="{{ asset('images/cc.jpg') }}" class="card-img-top img-fluid" style="object-fit: cover; height: 400px;"><div class="card-body text-light text-center"><h6 class="mb-0"><i class="fas fa-award text-warning me-2"></i>Certificate</h6></div></div></div>
      <div class="col-md-6"><div class="card bg-dark shadow-lg border-0"><img src="{{ asset('images/doc.jpg') }}" class="card-img-top img-fluid" style="object-fit: cover; height: 400px;"><div class="card-body text-light text-center"><h6 class="mb-0"><i class="fas fa-file-alt text-info me-2"></i>Documentation</h6></div></div></div>
    </div>
  </section>

  <!-- Social Media Links -->
  <section id="contact" class="container py-5 text-center" data-aos="fade-up">
    <h2 class="section-title">Connect With Me</h2>
    <a href="https://www.facebook.com/jabymaverick.lasquite.9" class="social-icon" target="_blank" data-tooltip="Facebook"><i class="fab fa-facebook"></i></a>
    <a href="https://github.com/jaby77" class="social-icon" target="_blank" data-tooltip="GitHub"><i class="fab fa-github"></i></a>
  </section>

  <!-- Footer -->
  <footer>&copy; 2025 Jaby Maverick. All rights reserved.</footer>

  <!-- Scroll to Top Button -->
  <button id="scrollTopBtn"><i class="fas fa-arrow-up"></i></button>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AOS Animation JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 1000, once: true });

    // Scroll to top button
    const scrollTopBtn = document.getElementById("scrollTopBtn");
    window.addEventListener("scroll", () => {
      if (window.scrollY > 300) {
        scrollTopBtn.style.display = "flex";
      } else {
        scrollTopBtn.style.display = "none";
      }
    });
    scrollTopBtn.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  </script>
</body>
</html>
