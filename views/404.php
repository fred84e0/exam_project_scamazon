<?php 
    $_title = 'Not found';
    require_once(__DIR__.'/../components/header.php');
?>
<div id="notFound">
    <?php 
           require_once(__DIR__.'/../components/nav.php');   
    ?>
    <main>
        <h1>4<i class="far fa-sad-tear"></i>4</h1>
        <h2><?= $text['23'][$lang] ?></h2>
    </main>
</div>
<?php 
    require_once(__DIR__.'/../components/footer.php');
?>