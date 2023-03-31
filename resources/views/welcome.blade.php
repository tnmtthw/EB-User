@extends('layout')
<nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
<body>
    <div class="p-3 mb-2 bg-primary text-white">.bg-primary</div>
    <div class="p-3 mb-2 bg-primary-subtle text-emphasis-primary">.bg-primary-subtle</div>
    <div class="p-3 mb-2 bg-secondary text-white">.bg-secondary</div>
    <div class="p-3 mb-2 bg-secondary-subtle text-emphasis-secondary">.bg-secondary-subtle</div>
    <div class="p-3 mb-2 bg-success text-white">.bg-success</div>
    <div class="p-3 mb-2 bg-success-subtle text-emphasis-success">.bg-success-subtle</div>
    <div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
    <div class="p-3 mb-2 bg-danger-subtle text-emphasis-danger">.bg-danger-subtle</div>
    <div class="p-3 mb-2 bg-warning text-dark">.bg-warning</div>
    <div class="p-3 mb-2 bg-warning-subtle text-emphasis-warning">.bg-warning-subtle</div>
    <div class="p-3 mb-2 bg-info text-dark">.bg-info</div>
    <div class="p-3 mb-2 bg-info-subtle text-emphasis-info">.bg-info-subtle</div>
    <div class="p-3 mb-2 bg-light text-dark">.bg-light</div>
    <div class="p-3 mb-2 bg-light-subtle text-emphasis-light">.bg-light-subtle</div>
    <div class="p-3 mb-2 bg-dark text-white">.bg-dark</div>
    <div class="p-3 mb-2 bg-dark-subtle text-emphasis-dark">.bg-dark-subtle</div>
    <p class="p-3 mb-2 bg-body-secondary">.bg-body-secondary</p>
    <p class="p-3 mb-2 bg-body-tertiary">.bg-body-tertiary</p>
    <div class="p-3 mb-2 bg-body text-body">.bg-body</div>
    <div class="p-3 mb-2 bg-black text-white">.bg-black</div>
    <div class="p-3 mb-2 bg-white text-dark">.bg-white</div>
    <div class="p-3 mb-2 bg-transparent text-body">.bg-transparent</div>
</body>
  