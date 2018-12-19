<?


$id = $_GET['id'];
$page = $_GET['page'];


switch($page){
	case 'goods': 
		include 'pages/goods-delete.inc.php'; 
		break;
	case 'providers':
		include 'pages/providers-delete.inc.php'; 
		break;
	default: include 'pages/index.inc.php';
}	