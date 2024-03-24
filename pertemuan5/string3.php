<?php
$pesan = "saya anak malang";
$pesanPerkata = explode(" ", $pesan);
$pesanPerkata = array_map(fn($pesan) => strrev($pesan), $pesanPerkata);
$pesan = implode(" ", $pesanPerkata);
echo $pesan . "<br>";
?>