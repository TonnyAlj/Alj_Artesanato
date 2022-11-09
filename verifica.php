<?php
if ((!isset($_SESSION["alj_artesanatos_user_nome"])) || (!isset($_SESSION["alj_artesanato_user_email"]))) {
	Header("Location: ./?pg=login.php");
	echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"0; URL=index.php?pg=login.php\">";
	exit;
}