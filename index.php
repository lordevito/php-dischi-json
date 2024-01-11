<?php 
//Sezione Head
include __DIR__ . '/assets/head.php';
?>
<div id="app">
    <h1>{{title}}</h1>
    <ul>
        <li v-for="(disc, index) in discs" :key="disc + index">
            {{disc.title}}
            <ul>
                <li>{{disc.author}}</li>
                <li>{{disc.year}}</li>
                <li>{{disc.genre}}</li>
            </ul>
        </li>
    </ul>
</div>
<?php
#FOOTER
include __DIR__ . '/assets/footer.php'
?> 