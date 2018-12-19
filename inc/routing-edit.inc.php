<?


$id = $_GET['id'];
$page = $_GET['page'];


switch($page){
	case 'goods': 
		include 'pages/goods-edit.inc.php'; 
		break;
	case 'providers':
		include 'pages/providers-edit.inc.php'; 
		break;
	default: include 'pages/index.inc.php';
}	