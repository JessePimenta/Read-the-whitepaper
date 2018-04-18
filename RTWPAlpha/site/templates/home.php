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
    <button class="button" data-sort-by="original-order">Original Order</button>
    <button class="button" data-sort-by="name">A-Z</button>
  </div>
  <div class="button-group filter-button-group" data-filter-group="trending">
  <button class="button" data-filter="ing">Trending WP's</button>
  <button class="button" data-filter="scam">Scams</button>
  <button class="button" data-filter="topTwelve">Top 12</button>
  <button class="button" data-filter="*">View All</button>
  <!-- <button data-filter=".small">small</button>
  <button data-filter=".wide">wide</button> -->
</div>


      <div class="wrap wide grid">
        <?php snippet('showcase', ['limit' => 500]) ?>

      </div>

    </section>

  </main>

<?php snippet('footer') ?>
