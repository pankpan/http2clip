<?php
$temp=uniqid().".txt";
$request=file_get_contents("php://input");
file_put_contents($temp, $request);
exec("/mnt/c/Windows/system32/clip.exe < $temp");
unlink($temp);
echo strlen($request)." bytes sent\n";
?>