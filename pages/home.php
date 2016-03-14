<h1>Startseite</h1>
<ul class="collection">
    <?php foreach(getForen() as $forum): ?>
     <li class="collection-item">
         <a href="?page=thread&forum=<?= $forum["idforum"] ?>"><?= $forum['name'] ?></a>
         <p><?= $forum['beschreibung'] ?></p>
     </li>
 <?php endforeach; ?>
</ul>
