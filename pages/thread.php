<h1>Thread</h1>
<ul class="collection">
    <?php $threads = getThreads(@$_GET['forum']); ?>
    <?php foreach($threads as $thread): ?>
     <li class="collection-item">
         <a href="?page=post&thread=<?= $thread['idthread'] ?>"><?= $thread['titel'] ?></a>
         <p><?= $thread["datum"] ?></p>
     </li>
 <?php endforeach; ?>
</ul>
<?php if(empty($threads)): ?>
    <p>Für dieses Forum sind noch keine Threads vorhanden!</p>
<?php endif; ?>
