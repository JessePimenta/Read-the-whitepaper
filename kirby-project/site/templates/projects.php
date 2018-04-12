<?php snippet('header') ?>

  <main class="main" role="main">
    <h1><?= $page->title()->html() ?></h1>
    <?= $page->text()->kirbytext() ?>

  <div class="wrap wide">
    <ul class="projects showcase grid gutter-1" data-page="<?= $page->url() ?>" data-limit="<?= $limit ?>">
      <!-- Loop through the projects -->
        <?php foreach($projects as $project): ?>
          <li class="showcase-item column">
              <a href="<?= $project->url() ?>" class="showcase-link">
                <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
                  <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image" />
                <?php endif ?>
                <div class="showcase-caption">
                  <h3 class="showcase-title"><?= $project->title()->html() ?></h3>
                </div>
              </a>
          </li>
        <?php endforeach ?>
    </ul>
  </div>
    <button class="load-more">Load more</button>

  </main>

<?php snippet('footer') ?>
