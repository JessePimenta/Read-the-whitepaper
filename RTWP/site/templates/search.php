<?php snippet('header') ?>
<h1 id='search-header'>Search for a white paper.</h1>
<form>
  <input type="search" name="q" value="<?php echo esc($query) ?>">
  <input type="submit" value="&#x1F50D;">
</form>
<ul id='results'>
  <?php foreach($results as $result): ?>
  <li>
    <a href="<?php echo $result->url() ?>">
      <?php echo $result->title()->html() ?>
    </a>
  </li>
  <?php endforeach ?>
</ul>

<?php snippet('footer') ?>
