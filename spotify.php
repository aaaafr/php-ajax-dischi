<?php
require __DIR__ . '/templates/head.php';
require __DIR__ . '/templates/vars.php';
require __DIR__ . '/templates/header.php';

?>

<main id="app">

<div class="card">
    <div class="album" v-for="album in musicData">
        <div class="poster">
            <img :src="album.poster" alt="">
        </div>
        <div class="title">
            <h1>
               {{album.title}}
            </h1>
        </div>
        <div class="author">
            <p>{{album.singer}} </p>
        </div>
        <div class="year">
            <p>{{album.year}} </p>
        </div>
    </div>
</div>

</main>

<?php


require __DIR__ . '/templates/footer.php';