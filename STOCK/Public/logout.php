<?php
    setcookie("UserLogin", "", time()-3600);
    header("location:../../Public/");
?>