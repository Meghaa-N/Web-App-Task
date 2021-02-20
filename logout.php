
<?php
session_start();
session_cache_expire();
session_destroy();
echo '<script>';
   echo "window.location.href = 'index.php';</script>";
  ?>