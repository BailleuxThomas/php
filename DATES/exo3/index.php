<?php
echo date('l jS \of F Y');
echo "<br><br>";
setlocale(LC_ALL, 'fr_FR.utf8');
echo strftime('%A %e %B %Y');
?>