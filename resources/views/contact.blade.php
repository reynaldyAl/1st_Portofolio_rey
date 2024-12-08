<!-- resources/views/contact.blade.php -->
@extends('layouts.master')

@section('title', 'Contact')

@section('content')

<section class="contact-section container my-5 py-5">
  <div class="row">
    <!-- Personal Info Section -->
    <div class="col-lg-4 mb-4 ">
      <div class="personal-info-card py-5">
        <div class="profile-image-container">
          <img src="{{ asset('images/04-profil.png') }}" alt="Reynaldy Al" class="profile-img">
        </div>
        <div class="info-content">
          <h4 class="text-center mb-3">Reynaldy Al</h4>
          <div class="info-item">
            <i class="bi bi-geo-alt"></i>
            <span>Makassar, Indonesia</span>
          </div>
          <div class="info-item">
            <i class="bi bi-envelope"></i>
            <span>reynaldy.al@gmail.com</span>
          </div>
          <div class="info-item">
            <i class="bi bi-phone"></i>
            <span>+62 XXX-XXXX-XXXX</span>
          </div>
          <div class="info-item">
            <i class="bi bi-building"></i>
            <span>Universitas Hasanuddin</span>
          </div>
          <div class="info-item">
            <i class="bi bi-mortarboard"></i>
            <span>Sistem Informasi 2023</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Contact Form Section -->
    <div class="col-lg-8">
      <h3 class="text-center mb-4">Get In Touch</h3>
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
          <label for="subject" class="form-label">Subject</label>
          <input type="text" class="form-control" id="subject" placeholder="Message subject">
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" rows="5" placeholder="Your message" required></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-gold">Send Message</button>
        </div>
      </form>
    </div>
  </div>
</section>
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

    <p class="text-center">
      <a href="#privacy-policy">Privacy Policy</a> 
      <a href="#terms-of-service">Terms of Service</a>
    </p>
    <p class="text-center">Universitas Hasanuddin | Sistem Informasi 23</p>
  </div>
</footer>
@endsection