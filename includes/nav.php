<nav class="navbar navbar-expand-lg navbar-light bg-light px-0">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand m-0" href="/">East Lanka Polysack</a>

  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo ($currentPage == 'products.php') ? 'active' : ''; ?>" href="#">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>