<li class="project showcase-item column">
  <a href="<?= $project->url() ?>" class="showcase-link">
    <!-- We want to get the first image of each project. We first check if it exists! -->
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()):$thumb = $image->crop(600, 600);?>
    <img src="<?= $thumb->url() ?>" alt="<?= $image->alt_text()->html() ?>" class='showcase-image' />
    <?php endif ?>
    
    <div class="showcase-caption">
      <h2 class="showcase-title"><?= $project->title()->html() ?></h2>
    </div>
  </a>
</li>
