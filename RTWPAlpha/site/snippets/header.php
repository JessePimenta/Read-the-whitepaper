<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/css/simplegrid.css') ?>
  <?= css('assets/css/index.css') ?>
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono" rel="stylesheet">

</head>
<body>

  <header class="header wrap wide" role="banner">
    <div class="">

      <div class="branding column">
        <!-- <a href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a> -->
      </div>

      <?php snippet('menu') ?>

    </div>
  </header>
