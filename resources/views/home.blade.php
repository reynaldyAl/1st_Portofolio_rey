<!-- resources/views/home.blade.php -->
@extends('layouts.master')

@section('title', 'Home')

@section('content')
<section id="hero" class="hero-text">
  <img src="{{ asset('images/01-Taku-Morisaki.png') }}" alt="profile" class="profile-img" width="200" height="200">
  <h1 class="heading-warna">Reynaldy Al</h1>
  <p class="paragraf-warna">Maha-Student | Universitas Hasanuddin</p>
  <div class="bio-marquee">
    <span>Passionate about technology, creative design, and coding the future. Let's build something amazing together!</span>
  </div>
  <div class="social-icons-container">
    <div class="social-icons">
      <a href="https://github.com/reynaldyAl"><i class="bi bi-github"></i></a>
      <a href="https://linkedin.com/in/reynaldy-al-495390315"><i class="bi bi-linkedin"></i></a>
      <a href="https://instagram.com/Reynaldy_al/"><i class="bi bi-instagram"></i></a>
    </div>
  </div>
</section>


@endsection



