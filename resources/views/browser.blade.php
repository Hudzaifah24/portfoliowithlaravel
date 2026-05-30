<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hudzaifah - Portfolio</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: #050816;
      color: white;
      overflow-x: hidden;
    }

    body::before {
      content: '';
      position: fixed;
      width: 500px;
      height: 500px;
      background: rgba(0, 255, 255, 0.15);
      filter: blur(120px);
      top: -100px;
      left: -100px;
      z-index: -1;
    }

    body::after {
      content: '';
      position: fixed;
      width: 500px;
      height: 500px;
      background: rgba(0, 119, 255, 0.15);
      filter: blur(120px);
      bottom: -100px;
      right: -100px;
      z-index: -1;
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: auto;
    }

    header {
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000;
      backdrop-filter: blur(15px);
      background: rgba(5, 8, 22, 0.7);
      border-bottom: 1px solid rgba(255,255,255,0.08);
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 0;
    }

    .logo {
      font-size: 28px;
      font-weight: 800;
      letter-spacing: 2px;
    }

    .menu {
      display: flex;
      gap: 30px;
    }

    .menu a {
      color: #cbd5e1;
      text-decoration: none;
      transition: 0.3s;
      font-weight: 500;
    }

    .menu a:hover {
      color: cyan;
    }

    .hero {
      min-height: 100vh;
      display: flex;
      align-items: center;
      padding-top: 120px;
    }

    .hero-content {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 60px;
      align-items: center;
    }

    .badge {
      display: inline-block;
      padding: 12px 22px;
      background: rgba(0,255,255,0.1);
      border: 1px solid rgba(0,255,255,0.2);
      color: cyan;
      border-radius: 999px;
      margin-bottom: 25px;
      font-size: 14px;
    }

    .hero h1 {
      font-size: 70px;
      line-height: 1.1;
      font-weight: 900;
      margin-bottom: 25px;
    }

    .gradient {
      background: linear-gradient(to right, cyan, #2563eb);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .hero p {
      color: #94a3b8;
      font-size: 18px;
      line-height: 1.8;
      margin-bottom: 35px;
    }

    .btn-group {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }

    .btn {
      padding: 16px 34px;
      border-radius: 18px;
      border: none;
      cursor: pointer;
      font-size: 16px;
      font-weight: 600;
      transition: 0.4s;
      text-decoration: none;
      display: inline-block;
    }

    .btn-primary {
      background: linear-gradient(to right, cyan, #2563eb);
      color: white;
      box-shadow: 0 10px 40px rgba(0,255,255,0.2);
    }

    .btn-primary:hover {
      transform: translateY(-5px);
    }

    .btn-secondary {
      border: 1px solid rgba(255,255,255,0.2);
      color: white;
      background: transparent;
    }

    .btn-secondary:hover {
      background: rgba(255,255,255,0.1);
    }

    .glass-card {
      background: rgba(255,255,255,0.05);
      border: 1px solid rgba(255,255,255,0.08);
      backdrop-filter: blur(20px);
      border-radius: 35px;
      padding: 40px;
      box-shadow: 0 10px 50px rgba(0,0,0,0.3);
    }

    .profile-box {
      position: relative;
    }

    .profile-icon {
      width: 100px;
      height: 100px;
      border-radius: 30px;
      background: linear-gradient(to right, cyan, #2563eb);
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 42px;
      font-weight: 800;
      margin-bottom: 35px;
    }

    .experience {
      font-size: 60px;
      font-weight: 900;
    }

    .small-text {
      color: #94a3b8;
    }

    section {
      padding: 120px 0;
    }

    .section-title {
      color: cyan;
      margin-bottom: 15px;
      font-weight: 600;
      letter-spacing: 1px;
    }

    .section-heading {
      font-size: 50px;
      font-weight: 900;
      margin-bottom: 60px;
      line-height: 1.2;
    }

    .about-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 50px;
    }

    .about-text p {
      color: #94a3b8;
      line-height: 1.9;
      margin-bottom: 20px;
      font-size: 18px;
    }

    .skills-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 30px;
    }

    .skill-card {
      background: rgba(255,255,255,0.05);
      border: 1px solid rgba(255,255,255,0.08);
      border-radius: 30px;
      padding: 35px;
      transition: 0.4s;
    }

    .skill-card:hover {
      transform: translateY(-10px);
      border-color: rgba(0,255,255,0.5);
    }

    .skill-icon {
      width: 60px;
      height: 60px;
      border-radius: 18px;
      background: linear-gradient(to right, cyan, #2563eb);
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 22px;
      font-weight: bold;
      margin-bottom: 25px;
    }

    .skill-card h3 {
      margin-bottom: 15px;
      font-size: 24px;
    }

    .skill-card p {
      color: #94a3b8;
      line-height: 1.8;
    }

    .experience-card {
      background: rgba(255,255,255,0.05);
      border: 1px solid rgba(255,255,255,0.08);
      border-radius: 30px;
      padding: 40px;
      margin-bottom: 25px;
      transition: 0.3s;
    }

    .experience-card:hover {
      background: rgba(255,255,255,0.08);
    }

    .experience-card h3 {
      font-size: 30px;
      margin-bottom: 10px;
    }

    .experience-card p {
      color: #94a3b8;
      font-size: 18px;
    }

    .contact-box {
      background: linear-gradient(to right, rgba(0,255,255,0.08), rgba(37,99,235,0.08));
      border: 1px solid rgba(255,255,255,0.08);
      border-radius: 40px;
      padding: 70px;
      text-align: center;
    }

    .contact-box p {
      color: #cbd5e1;
      font-size: 18px;
      line-height: 1.8;
      max-width: 700px;
      margin: 0 auto 40px;
    }

    footer {
      padding: 40px 0;
      border-top: 1px solid rgba(255,255,255,0.08);
      text-align: center;
      color: #64748b;
    }

    .class-input-likes {
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      background: transparent;
      border: none;
      color: white;
      margin: 20px 0 20px 0;
    }

    .animate__heartBeat {
      animation-duration: 0.8s;
    }

    .animate__animated {
      animation-fill-mode: both;
    }

    /* Layouting */
    .margin-top-primary {
      margin-top: 30px;
    }

    @media(max-width: 768px) {
      .menu {
        display: none;
      }

      .hero h1 {
        font-size: 50px;
      }

      .section-heading {
        font-size: 38px;
      }

      .contact-box {
        padding: 40px 25px;
      }
    }
  </style>
</head>
<body>

  <header>
    <div class="container">
      <nav>
        <div class="logo">HUDZAIFAH</div>

        <div class="menu">
          <a href="#about">About</a>
          <a href="#skills">Skills</a>
          <a href="#experience">Experience</a>
          <a href="#contact">Contact</a>
        </div>
      </nav>
    </div>
  </header>

  <section class="hero">
    <div class="container hero-content">

      <div>
        <div class="badge">● Available for Freelance & Fulltime</div>

        <h1>
          Fullstack
          <span class="gradient">Developer</span>
        </h1>

        <p>
          Halo, saya Hudzaifah. Developer dengan pengalaman 4 tahun
          membangun website modern, backend system, dan mobile UI
          menggunakan Flutter serta Laravel.
        </p>

        <div class="btn-group">
          <a href="#contact" class="btn btn-primary">Hire Me</a>
          <a href="#skills" class="btn btn-secondary">View Skills</a>
        </div>
      </div>

      <div class="glass-card profile-box">
        <div class="profile-icon">H</div>

        <div class="experience">4+</div>
        <p class="small-text">Years Experience</p>

        <br><br>

        <h3 style="margin-bottom:10px;">Location</h3>
        <p class="small-text" style="line-height:1.8;">
          Pademangan Bar., Kec. Pademangan,
          Jakarta Utara, DKI Jakarta 14420
        </p>

        <br><br>

        <h3 style="margin-bottom:10px;">Main Stack</h3>
        <p class="small-text">Laravel • Flutter • PHP • JavaScript</p>
      </div>

    </div>
  </section>

  <section id="about">
    <div class="container about-grid">

      <div>
        <div class="section-title">ABOUT ME</div>

        <h2 class="section-heading">
          Passionate Developer Building Modern Digital Products
        </h2>
      </div>

      <div class="about-text">
        <p>
          Saya seorang developer profesional dengan pengalaman lebih dari
          4 tahun di bidang pengembangan website, backend system,
          dan aplikasi mobile UI.
        </p>

        <p>
          Fokus utama saya adalah membangun aplikasi yang cepat,
          modern, scalable, dan memiliki user experience premium.
        </p>

        <p>
          Saya terbiasa menggunakan Laravel, PHP, JavaScript,
          dan Flutter untuk menciptakan solusi digital yang powerful.
        </p>
      </div>

    </div>
  </section>

  <section id="skills">
    <div class="container">

      <div class="section-title">MY SKILLS</div>
      <h2 class="section-heading">Tech Stack & Expertise</h2>

      <div class="skills-grid">

        <div class="skill-card">
          <div class="skill-icon">W</div>
          <h3>Web Developer</h3>
          <p>Membangun website modern dengan performa tinggi dan UI premium.</p>
        </div>

        <div class="skill-card">
          <div class="skill-icon">B</div>
          <h3>Backend Developer</h3>
          <p>Membangun backend scalable, aman, dan efisien untuk aplikasi modern.</p>
        </div>

        <div class="skill-card">
          <div class="skill-icon">F</div>
          <h3>Flutter Developer</h3>
          <p>Membuat mobile UI modern dan responsive menggunakan Flutter.</p>
        </div>

        <div class="skill-card">
          <div class="skill-icon">L</div>
          <h3>Laravel Developer</h3>
          <p>Fullstack development menggunakan Laravel dengan clean architecture.</p>
        </div>

        <div class="skill-card">
          <div class="skill-icon">P</div>
          <h3>PHP</h3>
          <p>Experienced menggunakan PHP untuk berbagai project skala kecil hingga besar.</p>
        </div>

        <div class="skill-card">
          <div class="skill-icon">J</div>
          <h3>JavaScript</h3>
          <p>Mengembangkan interactive frontend dan dynamic web application.</p>
        </div>

      </div>

    </div>
  </section>

  <section id="experience">
    <div class="container">

      <div class="section-title">WORK EXPERIENCE</div>
      <h2 class="section-heading">Companies I've Worked With</h2>

      <div class="experience-card">
        <h3>PT Mahir Technology</h3>
        <p>Developer</p>
      </div>

      <div class="experience-card">
        <h3>PT Sellerpintar Digital Asia</h3>
        <p>Developer</p>
      </div>

    </div>
  </section>

  <section id="contact">
    <div class="container">

      <div class="contact-box">

        <div class="section-title">LET'S WORK TOGETHER</div>

        <h2 class="section-heading">
          Ready to Build Amazing Projects
        </h2>

        <p>
          Saya siap membantu membangun website, backend system,
          maupun aplikasi mobile dengan performa tinggi dan desain modern.
        </p>

        <div class="btn-group" style="justify-content:center;">
          <a href="https://wa.me/6281575319184" class="btn btn-primary">Contact Me</a>
          <a href="https://drive.google.com/file/d/1vVAmsuXGNwrmGxRYvfWkEKKgKqjFhv4z/view?usp=drivesdk" class="btn btn-secondary">Download CV</a>
        </div>

      </div>

    </div>
  </section>

  <section id="likes">
    <div class="container">
        <div class="contact-box">
            <div class="section-title">MY LIKES</div>

            <h3>
                Click the button below to show some love! ❤️
            </h3>

            <input id="input-likes" type="text" readonly disabled value="{{ $defaultValue }}" class="class-input-likes" />
            <div class="btn-group" style="justify-content: center;">
                <button id="btn-likes" class="btn btn-primary">
                    <svg id="heart-o" xmlns="http://www.w3.org/2000/svg" style="width: 100%" viewBox="0 0 640 640"><path d="M442.9 144C415.6 144 389.9 157.1 373.9 179.2L339.5 226.8C335 233 327.8 236.7 320.1 236.7C312.4 236.7 305.2 233 300.7 226.8L266.3 179.2C250.3 157.1 224.6 144 197.3 144C150.3 144 112.2 182.1 112.2 229.1C112.2 279 144.2 327.5 180.3 371.4C221.4 421.4 271.7 465.4 306.2 491.7C309.4 494.1 314.1 495.9 320.2 495.9C326.3 495.9 331 494.1 334.2 491.7C368.7 465.4 419 421.3 460.1 371.4C496.3 327.5 528.2 279 528.2 229.1C528.2 182.1 490.1 144 443.1 144zM335 151.1C360 116.5 400.2 96 442.9 96C516.4 96 576 155.6 576 229.1C576 297.7 533.1 358 496.9 401.9C452.8 455.5 399.6 502 363.1 529.8C350.8 539.2 335.6 543.9 320 543.9C304.4 543.9 289.2 539.2 276.9 529.8C240.4 502 187.2 455.5 143.1 402C106.9 358.1 64 297.7 64 229.1C64 155.6 123.6 96 197.1 96C239.8 96 280 116.5 305 151.1L320 171.8L335 151.1z"/></svg>
                    <svg id="heart" xmlns="http://www.w3.org/2000/svg" style="width: 100%;" viewBox="0 0 640 640"><path fill="#F53003" d="M305 151.1L320 171.8L335 151.1C360 116.5 400.2 96 442.9 96C516.4 96 576 155.6 576 229.1L576 231.7C576 343.9 436.1 474.2 363.1 529.9C350.7 539.3 335.5 544 320 544C304.5 544 289.2 539.4 276.9 529.9C203.9 474.2 64 343.9 64 231.7L64 229.1C64 155.6 123.6 96 197.1 96C239.8 96 280 116.5 305 151.1z"/></svg>
                </button>
            </div>
        </div>
    </div>
  </section>

  <footer>
    © 2026 Hudzaifah Portfolio. All rights reserved.
  </footer>

  <script>
    let input = document.getElementById("input-likes");
    let btnLikes = document.getElementById("btn-likes");
    let initialLikes = @json($defaultValue);

    let heartO = document.getElementById("heart-o");
    let heart = document.getElementById("heart");
    heart.style.display = "none";

    let isLiked = false;

    btnLikes.addEventListener("click", async function() {
        if (isLiked === false) {
            await fetch("/api/likes", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
            }).then(response => response.json())
              .then(data => {
                    let currentValue = parseInt(input.value) || 0;

                    if (data.code === 200) {
                        input.value = currentValue + 1;

                        heartO.style.display = "none";
                        heart.style.display = "block";

                        heartO.classList.add("animate__animated", "animate__heartBeat");
                        heart.classList.add("animate__animated", "animate__heartBeat");

                        isLiked = true;

                        console.log(data.message);
                    } else {
                        input.value = currentValue;
                        heartO.style.display = "block";
                        heart.style.display = "none";
                        console.log(data.message);
                        console.log(data.error);
                    }
              })
              .catch(() => {
                  input.value = initialLikes;
                  heartO.style.display = "block";
                  heart.style.display = "none";
                  console.log("Gagal woy fetching nya");
              });
        } else {
            console.log("User sudah pernah like sebelumnya");
        }
    });

  </script>

</body>
</html>
