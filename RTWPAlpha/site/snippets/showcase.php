<?php

$projects = page('whitepapers')->children()->visible()->sortBy('sort', 'desc');

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/
if(isset($limit)) $projects = $projects->limit($limit);
?>

<ul class="showcase gutter-1 col-1-2">

  <?php foreach($projects as $project): ?>

    <li class="showcase-item column col-1-6">
        <a href="<?= $project->url() ?>" class="showcase-link">
          <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
            <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image" />
          <?php endif ?>
          <div class="showcase-caption">
            <h3 class="name showcase-title"><?= $project->title()->html() ?></h3>
            <h4 class="tags"><?= $project->tags()->html() ?></h4>
          </div>
        </a>
    </li>

  <?php endforeach ?>
<!-- added for change -->
</ul>
