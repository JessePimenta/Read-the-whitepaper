<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <!-- <?= $page->year() ?> -->
      </div>
      <hr />
    </header>

    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
	      <?php if($document = $page->document()): ?>
      <a id='download-pdf' href="<?php echo $document->url() ?>" download>Read White Paper</a>
      <?php endif ?>

      <?php
      // Images for the "project" template are sortable. You
      // can change the display by clicking the 'edit' button
      // above the files list in the sidebar.
      foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
      <?php endforeach ?>

    </div>

    <?php snippet('prevnext') ?>

  </main>

<?php snippet('footer') ?>
