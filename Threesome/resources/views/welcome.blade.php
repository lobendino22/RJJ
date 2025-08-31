<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Threesome Website</title>
  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Segoe UI", Arial, sans-serif;
      background: #0f0f0f;
      color: #fff;
      overflow-x: hidden;
      scroll-behavior: smooth;
    }

    /* Background Gradient */
    body::before {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: radial-gradient(circle at top left, #d35266, transparent 40%),
                  radial-gradient(circle at bottom right, #222, transparent 40%);
      z-index: -2;
    }

    /* Floating Shapes */
    .shape {
      position: absolute;
      border-radius: 50%;
      opacity: 0.25;
      filter: blur(60px);
      z-index: -1;
      animation: float 8s infinite ease-in-out alternate;
    }

    .shape1 { width: 250px; height: 250px; background: #d35266; top: 80px; left: -120px; animation-delay: 0.3s; }
    .shape2 { width: 320px; height: 320px; background: #444; bottom: -120px; right: -180px; animation-delay: 1s; }
    .shape3 { width: 200px; height: 200px; background: #ff758f; top: 300px; right: 100px; animation-delay: 2s; }

    @keyframes float {
      from { transform: translateY(0) rotate(0deg); }
      to { transform: translateY(-40px) rotate(20deg); }
    }

    /* Navbar */
    nav {
      backdrop-filter: blur(12px);
      background: rgba(20, 20, 20, 0.7);
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 1000;
      border-bottom: 1px solid rgba(255,255,255,0.15);
      animation: slideDown 1s ease;
    }

    @keyframes slideDown {
      from { transform: translateY(-100%); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    nav .logo {
      color: #fff;
      font-size: 24px;
      font-weight: bold;
      letter-spacing: 2px;
      text-transform: uppercase;
      text-shadow: 0 0 12px rgba(211,82,102,0.8);
    }

    nav .menu a {
      color: white;
      margin-left: 25px;
      text-decoration: none;
      font-size: 16px;
      transition: 0.3s;
      padding: 8px 16px;
      border-radius: 8px;
      opacity: 0;
      animation: fadeIn 1s forwards;
      position: relative;
    }

    nav .menu a:nth-child(1) { animation-delay: 0.5s; }
    nav .menu a:nth-child(2) { animation-delay: 0.8s; }
    nav .menu a:nth-child(3) { animation-delay: 1.1s; }

    nav .menu a::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: -4px;
      width: 100%;
      height: 2px;
      background: #d35266;
      transform: scaleX(0);
      transition: transform 0.3s;
      transform-origin: right;
    }

    nav .menu a:hover::after {
      transform: scaleX(1);
      transform-origin: left;
    }

    /* Hero */
    .hero {
      position: relative;
      background: linear-gradient(rgba(20,20,20,0.8), rgba(0,0,0,0.9)), url("https://picsum.photos/1600/800?blur") center/cover no-repeat fixed;
      color: white;
      text-align: center;
      padding: 140px 20px;
      overflow: hidden;
    }

    .hero h1 {
      font-size: 56px;
      margin-bottom: 20px;
      animation: fadeUp 1.2s ease;
      letter-spacing: 2px;
    }

    .hero p {
      font-size: 22px;
      margin-bottom: 35px;
      animation: fadeUp 1.5s ease;
      color: #ddd;
    }

    .hero a {
      background: #d35266;
      color: white;
      padding: 14px 34px;
      border-radius: 30px;
      font-size: 18px;
      text-decoration: none;
      transition: 0.3s;
      animation: fadeUp 1.8s ease;
      display: inline-block;
      box-shadow: 0 0 18px rgba(211,82,102,0.6);
    }

    .hero a:hover {
      background: #b63f52;
      transform: scale(1.05);
      box-shadow: 0 0 30px rgba(211,82,102,0.9);
    }

    /* Resume Cards */
    .cards {
      display: flex;
      justify-content: center;
      gap: 30px;
      padding: 100px 20px;
      flex-wrap: wrap;
    }

    .card {
      background: rgba(255,255,255,0.05);
      backdrop-filter: blur(15px);
      padding: 30px;
      width: 300px;
      border-radius: 20px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.3);
      text-align: center;
      transition: 0.5s;
      transform: translateY(40px) scale(0.95);
      opacity: 0;
      position: relative;
      overflow: hidden;
    }

    .card.visible {
      transform: translateY(0) scale(1);
      opacity: 1;
    }

    .card::before {
      content: "";
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: conic-gradient(#d35266, transparent, #ff758f, transparent);
      animation: rotate 6s linear infinite;
      z-index: 0;
    }

    @keyframes rotate {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }

    .card > * {
      position: relative;
      z-index: 1;
    }

    .card:hover {
      transform: translateY(-15px) scale(1.05);
      box-shadow: 0 12px 28px rgba(0,0,0,0.5);
    }

    .card img {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      margin-bottom: 15px;
      border: 4px solid #d35266;
      transition: 0.3s;
    }

    .card img:hover {
      transform: rotate(12deg) scale(1.1);
    }

    .card h3 {
      margin: 10px 0;
      color: #ff758f;
      font-size: 22px;
    }

    .card p {
      font-size: 15px;
      color: #ccc;
      margin-bottom: 20px;
      line-height: 1.6;
    }

    .card a {
      display: inline-block;
      background: #d35266;
      color: white;
      padding: 10px 22px;
      border-radius: 20px;
      text-decoration: none;
      transition: 0.3s;
    }

    .card a:hover {
      background: #b63f52;
      box-shadow: 0 0 20px rgba(211,82,102,0.8);
    }

    /* Footer */
    footer {
      background: #111;
      color: white;
      text-align: center;
      padding: 25px;
      font-size: 14px;
      animation: fadeIn 2s ease;
      letter-spacing: 1px;
    }

    /* Animations */
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(50px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <!-- Floating shapes -->
  <div class="shape shape1"></div>
  <div class="shape shape2"></div>
  <div class="shape shape3"></div>

  <!-- Navbar -->
  <nav>
    <div class="logo">Threesome</div>
    <div class="menu">
      <a href="{{ url('/rodel') }}">Rodel’s Resume</a>
      <a href="{{ url('/john') }}">John Loise’s Resume</a>
      <a href="{{ url('/jaby') }}">Jaby’s Resume</a>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="hero">
    <h1>Welcome to our Website</h1>
    <p>Explore professional resumes and learn more about us.</p>
    <a href="#resumes">View Resumes</a>
  </div>

  <!-- Resume Cards -->
  <div class="cards" id="resumes">
    <div class="card">
      <img src="https://picsum.photos/100" alt="Jaby">
      <h3>Rodel</h3>
      <p>Aspiring Web Developer passionate about Laravel & modern web design.</p>
      <a href="{{ url('/rodel') }}">View Resume</a>
    </div>
    <div class="card">
      <img src="https://picsum.photos/101" alt="Maverick">
      <h3>John Loise</h3>
      <p>Creative Designer with a focus on UI/UX and responsive web apps.</p>
      <a href="{{ url('/john') }}">View Resume</a>
    </div>
    <div class="card">
      <img src="{{ asset('images/jaby.jpg') }}" alt="Lasquite">
      <h3>Jaby Maverick</h3>
      <p>Hello! I'm <strong>Jaby Maverick Lasquite</strong>, “CEO of ‘I’ll do it later.’” 😎</p>
      <a href="{{ url('/jaby') }}">View Resume</a>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    &copy; {{ date('Y') }} My Website. All rights reserved.
  </footer>

  <!-- Scroll reveal animation -->
  <script>
    const cards = document.querySelectorAll('.card');
    const revealOnScroll = () => {
      cards.forEach(card => {
        const rect = card.getBoundingClientRect();
        if(rect.top < window.innerHeight - 50){
          card.classList.add('visible');
        }
      });
    };
    window.addEventListener('scroll', revealOnScroll);
    window.addEventListener('load', revealOnScroll);
  </script>
</body>
</html>
