<?php
include ("header.php");
include ("sidebar.php");

include ($_SEREVER['DOCUMENT_ROOT'].'/views/'.$controller.'/'.$view.'.php');

include ("footer.php");
?>