<h1>Posts</h1>

    <?php $posts = getPosts(@$_GET['thread']); ?>
    <?php foreach($posts as $post): ?>
     <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">AUTOR</span>
          <p><?= $post["inhalt"] ?></p>
        </div>
      </div>
 <?php endforeach; ?>
<?php if(empty($posts)): ?>
    <p>In diesem Thread gibt es keine posts!</p>
<?php endif;?>


<form class="" action="" method="post">

</form>
