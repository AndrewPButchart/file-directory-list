<?php
$FileRoot=dirname(__FILE__);
$arrFileRoot = explode("/",$FileRoot);
$title = $arrFileRoot[count($arrFileRoot)-2] . " - " . str_replace("_","",$arrFileRoot[count($arrFileRoot)-1]);
include '../../../common/FileList.inc';
?>  