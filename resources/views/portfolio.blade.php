<!-- resources/views/portfolio.blade.php -->
@extends('layouts.master')

@section('title', 'Portfolio')

@section('content')
<section class="portfolio-section">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">My Projects</h2>
      <div class="filter-buttons">
        <button class="filter-btn active" data-filter="all">All</button>
        <button class="filter-btn" data-filter="web">Web Dev</button>
        <button class="filter-btn" data-filter="mobile">Mobile</button>
        <button class="filter-btn" data-filter="ui">UI/UX</button>
      </div>
    </div>

    <div class="portfolio-grid">
      <!-- Project Card 1 -->
      <!-- Update portfolio card structure -->
<div class="portfolio-item" data-category="web">
    <div class="portfolio-card">
      <div class="portfolio-img">
        <img data-src="{{ asset('images/portfolio/project-library.png') }}" alt="Library System">
        <div class="portfolio-overlay">
          <div class="portfolio-links">
            <a href="#" class="btn-demo" data-modal="project1">
              <i class="bi bi-eye"></i>
            </a>
            <a href="https://github.com/reynaldyAl/Laravel-Library_Project" class="btn-source" target="_blank">
              <i class="bi bi-github"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="portfolio-info">  
        <h4>Library Management System</h4>
        <div class="project-description">
          <p class="description-preview">A comprehensive library management system built with Laravel, featuring user authentication, book tracking, and automated notifications.</p>
          <div class="description-full">
            <ul>
              <li>User authentication and role-based access control</li>
              <li>Book inventory management with barcode scanning</li>
              <li>Automated email notifications for due dates</li>
              <li>Fine calculation system</li>
              <li>Real-time availability status</li>
            </ul>
          </div>
          <button class="read-more-btn">Read More</button>
        </div>
      </div>
    </div>
  </div>
      <!-- Add more portfolio items here -->
    </div>
  </div>

  <!-- Project Modal -->
  <div id="projectModal" class="modal">
    <div class="modal-content">
      <span class="close-modal">&times;</span>
      <div class="modal-body"></div>
    </div>
  </div>
</section>
@endsection