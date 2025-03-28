
<div class="titolosezione">
<h2  class="didattica b">↓ SOS Blog</h2>
<h2  class="didattica b"><a href="<?php echo l::get('lingua') ?>blog/search">&#9998; <?php echo l::get('cercacontenuto') ?></a></h2>
</div>



<section class="content blog">
  
  <?php
  $articles = $page->children()->visible()->sortBy('date', 'desc')->paginate(6);
  ?>

<div id="blog" class="grid projects">
  <div class="grid-sizer"></div>
  <?php foreach($articles as $article): ?>
  <div class="grid-item project">
    <a href="<?php echo $article->url() ?>">

      <?php $image = $article->image($article->cover()); ?>

      <img src="<?php echo thumb($image, array('width' => 600, 'height' => 400, 'crop' => true))->url(); ?>">
      <h2 id="blog" class="titolo"><?php echo $article->title()->excerpt(50) ?></h2>
      <div class="meta">
      <div id="blog" class="date">
      <h5 id="blog" class="deadline"><strong><?php echo strftime('%d/%m/%Y', $article->date()) ?></strong></h5>
      </div>

      <h5 id="blog" class="author"><?php echo l::get('acuradi') ?> <strong><?php echo $article->author() ?></strong></h5>
      </div>
      <h2 id="blog" class="category"><?php echo $article->text()->excerpt(300) ?></h2>
      <?php $tags = $article->tags()->split(); ?>
      
      <div id="blog" class="tags">
      <?php foreach($tags as $tag): ?>
      <h3 id="blog" class="tags"><?php echo $tag ?></h3>
      <?php endforeach ?>
      </div>
   </a>
  </div>
  <?php endforeach ?>
</div>


<div id="blog" class="navbar">

  <?php if($articles->pagination()->hasPages()): ?>

    <?php if($articles->pagination()->hasNextPage()): ?>
    <a class="next" href="<?php echo $articles->pagination()->nextPageURL() ?>"><h2 class="navigator"> <?php echo l::get('altripost') ?> →</h2></a>
  <?php else: ?>
    <a class="next spento"><h2 class="navigator"> <?php echo l::get('altripost') ?> →</h2></a>    
    <?php endif ?>

    <?php if($articles->pagination()->hasPrevPage()): ?>
    <a class="prev" href="<?php echo $articles->pagination()->prevPageURL() ?>"><h2 class="navigator">← <?php echo l::get('postprecedenti') ?></h2></a>
  <?php else: ?>
    <a class="prev spento"><h2 class="navigator">← <?php echo l::get('postprecedenti') ?></h2></a>
    <?php endif ?>

  <?php endif ?>

</div>
</section>

