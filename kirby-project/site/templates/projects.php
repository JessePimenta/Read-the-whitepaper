<?php snippet('header') ?>

  <main class="main" role="main">
    <h1><?= $page->title()->html() ?></h1>
    <?= $page->text()->kirbytext() ?>
    <div class="button-group sort-by-button-group">
  <!-- <button data-sort-by="original-order">original order</button> -->
  <button data-sort-by="name">Name</button>
  <button data-sort-by="symbol">Trending</button>
  <!-- <button data-sort-by="number">number</button>
  <button data-sort-by="weight">weight</button>
  <button data-sort-by="category">category</button> -->
</div>

  <div class="wrap wide">
    <ul class="showcase grid gutter-1">
      <!-- Loop through the projects -->
        <?php foreach($projects as $project): ?>
          <li class="showcase-item column">
              <a href="<?= $project->url() ?>" class="showcase-link">
                <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
                  <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image" />
                <?php endif ?>
                <div class="showcase-caption">
                  <h2 class="showcase-title name"><?= $project->title()->html() ?></h2>
                  <h4 class="tags"><?= $project->tags()->html() ?></h4>
                </div>
              </a>
          </li>
        <?php endforeach ?>
    </ul>
  </div>
  </main>

<?php snippet('footer') ?>
