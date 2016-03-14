<h1>Posts</h1>
<ul class="collection">
    <?php $posts = getPosts(@$_GET['thread']); ?>
    <?php foreach($posts as $post): ?>
     <li class="collection-item">
         <p><?= $post["inhalt"] ?></p>
     </li>
 <?php endforeach; ?>
</ul>
<?php if(empty($posts)): ?>
    <p>In diesem Thread gibt es keine posts!</p>
<?php endif;?>



<form class="" action="" method="post">
    <textarea name="post">
    </textarea>
    <input type="submit" name="submit_post">
</form>
