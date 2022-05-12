<?php

$aSide = $_GET['aSide'];
$bSide = $_GET['bSide'];
$cSide = $_GET['cSide'];
$dSide = $_GET['dSide'];

$terület = ($aSide + $cSide / 4 * ($aSide - $cSide)) * 
sqrt(($aSide + $bSide - $cSide + $dSide) * 
($aSide - $bSide - $cSide + $dSide) * 
($aSide + $bSide - $cSide - $dSide) * 
(-$aSide + $bSide + $cSide + $dSide));
echo $terület;