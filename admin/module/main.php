<div class="clear"></div>
<div class="main">
    <?php
    if(isset($_GET['action'])){
        $tam = $_GET['action'];
    }else {
        $tam = ' ';
    }
    if($tam == 'quanlyxe'){
        include("module/quanlyxe/them.php");
        include("module/quanlyxe/lietke.php");
    }else {
        include("module/dashboard.php");
    }
    ?>
</div>