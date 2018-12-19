<?
switch($id){
	case 'goods': include 'pages/goods.inc.php'; break;
	case 'add_good': include 'pages/add-good.inc.php'; break;
	case 'providers': include 'pages/providers.inc.php'; break;
	case 'add_providers': include 'pages/add_providers.inc.php'; break;
	case 'category': include 'pages/category.inc.php'; break;
	case 'add_category': include 'pages/add-category.inc.php'; break;
	default: include 'pages/index.inc.php';
}	