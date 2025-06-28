<?php include('header.php'); ?>

<main>
  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1>Welcome to TasteFit Recipes</h1>
      <p>Explore healthy, delicious recipes inspired by Indian cuisine and fitness goals.</p>
      <a href="#featured" class="cta-btn">Explore Recipes</a>
    </div>
  </section>

  <!-- Carousel -->
  <section class="carousel-section">
    <h2>Discover Categories</h2>
    <div class="carousel-container">
      <div class="carousel">
        <div class="slide">Indian</div>
        <div class="slide">Vegan</div>
        <div class="slide">High-Protein</div>
        <div class="slide">Low-Carb</div>
        <div class="slide">Continental</div>
      </div>
    </div>
  </section>

  <!-- Featured Recipes -->
  <section id="featured" class="featured-recipes">
    <h2>Featured Recipes</h2>
    <div class="recipe-grid">
      <?php for ($i = 1; $i <= 6; $i++) : ?>
        <div class="recipe-card">
          <img src="assets/images/sample<?php echo $i; ?>.jpg" alt="Recipe Image">
          <h3>Recipe Title <?php echo $i; ?></h3>
          <p>Short description for recipe <?php echo $i; ?> goes here.</p>
          <i class="fa-regular fa-bookmark bookmark-icon"></i>
        </div>
      <?php endfor; ?>
    </div>
  </section>
</main>

<?php include('footer.php'); ?>
