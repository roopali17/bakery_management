<?php
// session_start();
if(isset($_SESSION['message']))
{
    ?>
    <div class="alert" role="alert">
       <center> <strong>Hey!</strong><?=$_SESSION['message']; ?></center>
    </div>
    <?php
    unset($_SESSION['message']);
}
?>