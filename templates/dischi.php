<div class="card">
   <?php 
   
   foreach($album as $disco) : ?>
    <div class="album">
        <div class="poster">
            <img src="<?=$disco['poster']; ?>" alt="">
        </div>
        <div class="title">
        <h1><?= $disco['title'];?></h1>
        </div>
        <div class="author">
        <p><?=$disco['singer'];?></p>
        </div>
        <div class="year">
        <p><?= $disco['year'];?></p>
        </div>
    </div>
    <?php endforeach; ?>
</div>


