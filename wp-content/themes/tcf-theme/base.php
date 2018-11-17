<?php
$jsonpost = 0;
if(isset($_POST['posty']) && $_POST['posty'] == 1){
	$jsonpost = 1;
}

ob_start();
include tcf_template_path();
$article = ob_get_clean();

if($jsonpost == 1){
	$return['article'] = $article;
	$return['title'] = get_the_title();
	echo json_encode($return);
}else{
   get_template_part('wrapper');
}
