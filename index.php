<?php

include 'views/header.php';

include 'php/database.php';
$db = new database();

$page = @$_GET['page'];// ? strval($_REQUEST['page']) : 'tes';

//echo $page = @$_GET['halaman'];
if(isset($page)){
	//$isi =  file_exists('views/'.$page.'php') ? $page : 'index.php';
	$isi = file_exists('views/'.$page.'.php');
	if( $isi ){
		include 'views/'.$page.'.php';
	}else{

	}

	//echo 'views/'.$page.'.php';
}


include 'views/footer.php';