<?php

$command = escapeshellcmd('\xampp\htdocs\COMP370Project\scalper.py');
$output = shell_exec($command);
echo $output;


?>