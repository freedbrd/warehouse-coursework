<?


/**
*	Получаем все товары
*/
function getAllGoods()
{
	global $link;
	$sql = "SELECT id, title, purchase_price, sell_price, quantity, provider, category, status FROM goods";
	$result = mysqli_query($link, $sql);
	$numrows = mysqli_num_rows($result);
	$req;

	if($numrows != 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$req[]= $row;
		}
	}

	return $req;
}
/**
*	Получаем все товары
*/
function getGood($id)
{
	global $link;
	$sql = "SELECT id, title, purchase_price, sell_price, quantity, provider, category, status FROM goods WHERE id = $id";
	$result = mysqli_query($link, $sql);
	$numrows = mysqli_num_rows($result);
	$req = 'Виникла помилка';

	if($numrows != 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$req= $row;
		}
	}

	return $req;
}


/**
*	Получаем все поставщиков
*/
function getAllProviders()
{
	global $link;
	$sql = "SELECT id, title, address, phone, descr FROM providers";
	$result = mysqli_query($link, $sql);
	$numrows = mysqli_num_rows($result);
	$req;

	if($numrows != 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$req[]= $row;
		}
	}

	return $req;

}

/**
*	Получаем все статусы
*/
function getAllStatuses()
{
	global $link;
	$sql = "SELECT id, title FROM statuses";
	$result = mysqli_query($link, $sql);
	$numrows = mysqli_num_rows($result);
	$req;

	if($numrows != 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$req[]= $row;
		}
	}

	return $req;
}
/**
*	Получаем все категории
*/
function getAllCategories()
{
	global $link;
	$sql = "SELECT id, title FROM categories";
	$result = mysqli_query($link, $sql);
	$numrows = mysqli_num_rows($result);
	$req;

	if($numrows != 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$req[]= $row;
		}
	}

	return $req;
}


/**
*	Получаем конкретный статус
*/
function getStatus($id)
{
	global $link;
	$sql = "SELECT id, title FROM statuses WHERE id = $id";
	$result = mysqli_query($link, $sql);
	$numrows = mysqli_num_rows($result);
	$req = 'Виникла помилка';

	if($numrows != 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$req= $row;
		}
	}

	return $req;
}


/**
*	Получаем конкретного поставщика
*/
function getProvider($id)
{
	global $link;
	$sql = "SELECT id, title, phone, descr, address FROM providers WHERE id = $id";
	$result = mysqli_query($link, $sql);
	$numrows = mysqli_num_rows($result);
	$req = 'Виникла помилка';

	if($numrows != 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$req= $row;
		}
	}

	return $req;
}


/**
*	Получаем конкретную категорию
*/
function getCategory($id)
{
	global $link;
	$sql = "SELECT id, title FROM categories WHERE id = $id";
	$result = mysqli_query($link, $sql);
	$numrows = mysqli_num_rows($result);
	$req = 'Виникла помилка';

	if($numrows != 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$req= $row;
		}
	}

	return $req;
}


/*
*	Получить товары
*/
function getGoodsByQuery($field, $id) {
	global $link;
	$sql = "SELECT id, title, purchase_price, sell_price, quantity, provider, category, status FROM goods WHERE $field = $id";
	$result = mysqli_query($link, $sql);
	$numrows = mysqli_num_rows($result);
	$req;

	if($numrows != 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$req[]= $row;
		}
	}

	return $req;

}