<!-- resources/views/about.blade.php -->
@extends('layouts.master')

@section('title', 'About')

@section('content')
<section id="about" class="about-me container my-5 py-5">
  <div class="row align-items-center">
    <div class="col-md-4 text-center">
      <img src="{{ asset('images/04-profil.png') }}" alt="Avatar" class="img-fluid profile-img-about">
    </div>
    <div class="col-md-8">
      <h2>About Me</h2>
      <p class = "about-text">
        Hi everyone! My name is Reynaldy Al. I'm a Maha-Student from Makassar, University of Hasanuddin.
        I have 1 years experience in doing something and make something worst. but somehow i make that better too!
        In my opinion, creating programs is not just a job, but also an art that has aesthetic value.
      </p>
      <p class = "about-text">
        Today's task for praktikum is build your website to be functional and user-friendly, yet still attractive.
        In addition, I provide a personal touch to your product and ensure that the website catches attention
        and is easy to use. My goal is to convey your message and identity in the most creative way possible.
      </p>
    </div>
  </div>

  <!-- Add after about text and before skills section -->
<div class="university-section mt-5">
  <h3 class="text-center mb-4">Current Education</h3>
  
  <div class="univ-card">
    <div class="univ-header">
      <div class="univ-logo">
        <img src="{{ asset('images/About-me/ayam.png') }}" alt="Unhas Logo">
      </div>
      <div class="univ-title">
        <h4>Universitas Hasanuddin</h4>
        <p>Faculty of Mathematics and Natural Science</p>
      </div>
    </div>
    
    <div class="univ-details">
      <div class="detail-item">
        <i class="bi bi-mortarboard"></i>
        <div class="detail-content">
          <span>Program</span>
          <p>Information Systems</p>
        </div>
      </div>
      
      <div class="detail-item">
        <i class="bi bi-calendar3"></i>
        <div class="detail-content">
          <span>Year</span>
          <p>2023 - Present</p>
        </div>
      </div>
      
      <div class="detail-item">
        <i class="bi bi-geo-alt"></i>
        <div class="detail-content">
          <span>Location</span>
          <p>Makassar, Indonesia</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Add after university section -->
<div class="achievements-section mt-5">
  <h3 class="text-center mb-4">Achievements & Certifications</h3>
  <div class="achievements-grid">
    <div class="achievement-card">
      <div class="achievement-icon">
        <i class="bi bi-trophy"></i>
      </div>
      <h4>Web Development</h4>
      <p>Dicoding Certificate</p>
      <span class="achievement-date">2024</span>
    </div>
    <!-- Add more achievement cards -->
  </div>
</div>

<!-- Add after university section -->
<div class="learning-journey mt-5">
  <h3 class="text-center mb-4">Learning Journey</h3>
  <div class="journey-container">
    <!-- Current Learning Card -->
    <div class="journey-card">
      <div class="journey-icon">
        <i class="bi bi-book"></i>
      </div>
      <div class="journey-content">
        <h4>Currently Learning</h4>
        <div class="course-list">
          <div class="course-item">
            <i class="bi bi-code-slash"></i>
            <span>Web Development</span>
          </div>
          <div class="course-item">
            <i class="bi-server"></i>
            <span>Database Management</span>
          </div>
          <div class="course-item">
            <i class="bi bi-braces"></i>
            <span>Programming Logic</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="roadmap-section mt-5">
  <h3 class="text-center mb-4">My Study Roadmap</h3>
  <div class="roadmap-outer-container">
    <div class="roadmap-scroll-container">
      <div class="roadmap-items">
        <!-- Completed -->
        <div class="roadmap-item completed">
          <div class="roadmap-content">
            <span class="semester">Semester 1</span>
            <h5>Programming Fundamentals</h5>
            <div class="subject-tags">
              <span>Python</span>
              <span>Algorithm</span>
              <span>Logic Gates</span>
            </div>
            <div class="milestone">
              <i class="bi bi-check-circle-fill"></i>
              <span>First Program Written</span>
            </div>
          </div>
        </div>

        <div class="roadmap-item completed">
          <div class="roadmap-content">
            <span class="semester">Semester 2</span>
            <h5>Web Development</h5>
            <div class="subject-tags">
              <span>HTML/CSS</span>
              <span>Laravel</span>
              <span>MySQL</span>
            </div>
            <div class="milestone">
              <i class="bi bi-check-circle-fill"></i>
              <span>First Website Deployed</span>
            </div>
          </div>
        </div>

       
        <!-- Update roadmap items -->
        <div class="roadmap-item" data-semester="3" data-start="2023-09" data-end="2024-12-16">
          <div class="roadmap-content">
            <span class="semester">Semester 3</span>
            <h5>Creative Development</h5>
            <div class="subject-tags">
              <span>Advanced Web</span>
              <span>Photo Editing</span>
            </div>
            <div class="progress-wrapper">
              <div class="progress">
                <div class="progress-fill"></div>
              </div>
            </div>
          </div>
        </div>

        <!-- Known Future -->
        <div class="roadmap-item future">
          <div class="roadmap-content">
            <span class="semester">Semester 4</span>
            <h5>Mobile Development</h5>
            <div class="subject-tags">
              <span>Android</span>
              <span>Kotlin</span>
              <span>Mobile UI</span>
            </div>
            <div class="goals">
              <i class="bi bi-rocket-takeoff"></i>
              <span>Mobile App Development Journey</span>
            </div>
          </div>
        </div>

        <!-- Unknown Future -->
        <div class="roadmap-item unknown">
          <div class="roadmap-content">
            <span class="semester">Semester 5</span>
            <h5>Advanced Computing</h5>
            <div class="subject-tags">
              <span>Coming Soon</span>
            </div>
            <div class="mystery">
              <i class="bi bi-stars"></i>
              <span>Future Path to Explore</span>
            </div>
          </div>
        </div>

        <div class="roadmap-item unknown">
          <div class="roadmap-content">
            <span class="semester">Semester 6</span>
            <h5>Advanced Development</h5>
            <div class="subject-tags">
              <span>Coming Soon</span>
            </div>
            <div class="mystery">
              <i class="bi bi-stars"></i>
              <span>Future Path to Explore</span>
            </div>
          </div>
        </div>

        <div class="roadmap-item unknown">
          <div class="roadmap-content">
            <span class="semester">Semester 7</span>
            <h5>Professional Development</h5>
            <div class="subject-tags">
              <span>Coming Soon</span>
            </div>
            <div class="mystery">
              <i class="bi bi-stars"></i>
              <span>Future Path to Explore</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="semester-progress mt-5">
  <h3 class="text-center mb-4">Current Progress</h3>
  <div class="progress-stats">
    <div class="stat-item">
      <div class="stat-circle">
        <span>3/7</span>
      </div>
      <p>Semester</p>
    </div>
</div>

<div class="experience-section mt-5">
  <h3 class="text-center mb-4">Experience</h3>
  <div class="timeline">
    <div class="timeline-item">
      <div class="timeline-dot"></div>
      <div class="timeline-content">
        <h4>SMAN 1 TORAJA UTARA</h4>
        <p>Science Student</p>
        <span class="timeline-date">2020-2023</span>
      </div>
    </div>
    <div class="timeline-item">
      <div class="timeline-dot"></div>
      <div class="timeline-content">
        <h4>Maha-Student</h4>
        <p>Information Systems</p>
        <span class="timeline-date">2023 - Present</span>
      </div>
    </div>
    <div class="timeline-item">
      <div class="timeline-dot"></div>
      <div class="timeline-content">
        <h4>PT.FREEPORT INDONESIA</h4>
        <p>IT </p>
        <span class="timeline-date">2026 - Future</span>
      </div>
    </div>
    <!-- Add more timeline items -->
  </div>
</div>

<div class="stats-section mt-5">
  <div class="row text-center">
    <div class="col-md-4">
      <div class="stat-card">
        <i class="bi bi-code-square"></i>
        <h4>10+</h4>
        <p>Projects Completed</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="stat-card">
        <i class="bi bi-clock-history"></i>
        <h4>1+</h4>
        <p>Years Experience</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="stat-card">
        <i class="bi bi-stars"></i>
        <h4>5+</h4>
        <p>Certifications</p>
      </div>
    </div>
  </div>
</div>

<div class="cv-section text-center mt-5">
  <a href="#" class="cv-button">
    <i class="bi bi-file-earmark-text"></i>
    Download CV
  </a>
</div>

  {{-- <!-- <script src="{{ asset('js/styling.js') }}"></script> --> --}}

  <div class="skills-section mt-5">
    <h3 class="text-center">Skills</h3>
    <div class="row text-center">
      <div class="col-md-3 col-6 skill-box">
        <div class="tech-stack">
          <i class="bi bi-code-slash"></i>
          <span>HTML</span>
        </div>
      </div>
      <div class="col-md-3 col-6 skill-box">
        <div class="tech-stack">
          <i class="bi bi-brush"></i>
          <span>CSS</span>
        </div>
      </div>
      <div class="col-md-3 col-6 skill-box">
        <div class="tech-stack">
          <i class="bi bi-filetype-php"></i>
          <span>PHP</span>
        </div>
      </div>
      <div class="col-md-3 col-6 skill-box">
        <div class="tech-stack">
          <i class="bi bi-filetype-js"></i>
          <span>JavaScript</span>
        </div>
      </div>
    </div>
    <div class="row text-center mt-3">
      <div class="col-md-3 col-6 skill-box">
        <div class="tech-stack">
          <i class="bi bi-moon-stars"></i>
          <span>Rebahan</span>
        </div>
      </div>
      <div class="col-md-3 col-6 skill-box">
        <div class="tech-stack">
          <i class="bi bi-heart"></i>
          <span>Love language</span>
        </div>
      </div>
      <div class="col-md-3 col-6 skill-box">
        <div class="tech-stack">
          <i class="bi bi-translate"></i>
          <span>English</span>
        </div>
      </div>
      <div class="col-md-3 col-6 skill-box">
        <div class="tech-stack">
          <i class="bi bi-chat-dots"></i>
          <span>Bhs.Indonesia</span>
        </div>
      </div>
    </div>
</div>

<!-- Add after skills section -->
<div class="tools-section mt-5">
  <h3 class="text-center mb-4">Tools & Software</h3>
  <div class="tools-grid">
    <div class="tool-item">
      <i class="bi bi-camera"></i>
      <span>Adobe </span>
      <div class="tool-label">Editing</div>
    </div>
    <div class="tool-item">
      <i class="bi bi-code-square"></i>
      <span>VS Code</span>
      <div class="tool-label">Development</div>
    </div>
    <div class="tool-item">
      <i class="bi bi-github"></i>
      <span>GitHub</span>
      <div class="tool-label">Version Control</div>
    </div>
  </div>
</div>

<div class="interests-section mt-5">
  <h3 class="text-center mb-4">Interests</h3>
  <div class="interests-grid">
    <div class="interest-item">
      <i class="bi bi-camera"></i>
      <span>Photography</span>
    </div>
    <div class="interest-item">
      <i class="bi bi-code"></i>
      <span>Coding</span>
    </div>
    <div class="interest-item">
      <i class="bi bi-music-note"></i>
      <span>Music</span>
    </div>
  </div>
</div>
@endsection

@section('social-icons')
<div class="social-icons text-center">
  <a href="https://github.com/reynaldyAl"><i class="bi bi-github"></i></a>
  <a href="www.linkedin.com/in/reynaldy-al-495390315"><i class="bi bi-linkedin"></i></a>
  <a href="https://www.instagram.com/Reynaldy_al/"><i class="bi bi-instagram"></i></a>
</div>
@endsection

@section('footer')
<footer>
  <div class="container">
    <p class="text-center">&copy; 2024 ReynaldyAl. All rights reserved.</p>
    <p class="text-center">Contact: <a href="mailto:reynaldy.al@gmail.com">reynaldy.al@gmail.com</a></p>
    <p class="text-center">
      <a href="#privacy-policy">Privacy Policy</a> | 
      <a href="#terms-of-service">Terms of Service</a>
    </p>
    <p class="text-center">Universitas Hasanuddin | Sistem Informasi 23</p>
  </div>
</footer>
@endsection