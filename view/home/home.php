<style>
    .nk-bg-imp-vd{
        background: linear-gradient(to right,#286baf,#46b0fc);
    }
</style>

<?php require "../layout/layout_home.php" ?>

<?php require "../info/popup.php" ?>


<?php
    
    if(isset($_SESSION['flag']))
    {
        echo '<script>
                alert("Đã gửi email thành công!");
              </script>';
        session_destroy();
    }
?>
<?php require "../info/dadat.php" ?>

<?php require "../info/banner.php" ?>

<?php require "../info/rangsu.php" ?>
<?php require "../info/nucuoi.php" ?>

<?php require "../info/implant.php" ?>
<?php require "../info/nucuoi_imp.php" ?>

<div class="col-12 nk-bg-imp-vd">
    <?php require "../info/video.php" ?>
</div>
<?php require "../info/vechungtoi.php" ?>

<?php require "../info/cotloi.php" ?>

<?php require "../info/taisao.php" ?>

<?php require "../info/doingu.php" ?>

<?php require "../info/kinhnghiem.php" ?>

<?php require "../info/dathen.php" ?>

<?php require "../info/bayve.php" ?>


<?php require "../info/hotro.php" ?>

<?php require "../footer/footer.php" ?>


