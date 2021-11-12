<?php
include_once "includes/function.php";


$id =0;
if (isset($GET['id']) && !empty($_GET['id'])) {
	$id = $_GET['id'];}
$posts = get_posts($_GET['id']);

include_once "includes/header.php";
include_once "includes/posts.php";
include_once "includes/footer.php"; 


