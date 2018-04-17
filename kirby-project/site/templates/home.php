<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <!-- <h1><?= $page->title()->html() ?></h1> -->

      <div class="intro text">
         <?= $page->intro()->kirbytext() ?>
      </div>
      <hr />
    </header>

    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>

    <section class="projects-section">
  <div class="button-group sort-by-button-group">
    <button data-sort-by="original-order">Original Order</button>
    <button data-sort-by="name">A-Z</button>
    <!-- <button data-sort-by="trending">Trending</button> -->
  </div>
  <div class="button-group filter-button-group" data-filter-group="trending">
  <button data-filter="trending">Trending</button>
  <button class="button" data-filter="*">Show All</button>
  <!-- <button data-filter=".small">small</button>
  <button data-filter=".wide">wide</button> -->
</div>


      <div class="wrap wide grid">
        <!-- <h2>Latest Whitepapers</h2> -->
        <?php snippet('showcase', ['limit' => 100]) ?>

        <p class="projects-section-more"><a href="<?= page('projects')->url() ?>" class="btn">View All Whitepapers</a></p>
      </div>

    </section>

  </main>

<?php snippet('footer') ?>
