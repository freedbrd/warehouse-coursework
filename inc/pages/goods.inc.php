<?php 

$goods = getAllGoods();

?>
<div class="page-title">
  <div class="title_left">
    <h3>
          Товари на складі
      </h3>
  </div>
</div>
<div class="clearfix"></div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_content">
        <?php if (is_array($goods)): ?>
          <table id="datatable-goods" class="table goods-table table-striped table-bordered">
            <thead>
              <tr>
                <th>Назва</th>
                <th>Ціна закупки</th>
                <th>Ціна продажу</th>
                <th>Статус</th>
                <th>Кількість</th>
                <th>Постачальник</th>
                <th>Категорія</th>
                <th>Дії</th>
              </tr>
            </thead>
            <tbody>
              <? foreach($goods as $key => $good): ?>

              <?
                $currentStatus = getStatus($good['status']);
                $currentProvider = getProvider($good['provider']);
                $currentCategory = getCategory($good['category']);
              ?>
              <tr>
                <td><?=$good['title']?></td>
                <td><?=$good['purchase_price']?></td>
                <td><?=$good['sell_price']?></td>
                <td><?=$currentStatus['title']?></td>
                <td><?=$good['quantity']?></td>
                <td><?=$currentProvider['title']?></td>
                <td><?=$currentCategory['title']?></td>
                <td>
                  <a href="//<?=$_SERVER['HTTP_HOST']?>/delete.php?id=<?=$good['id']?>&page=<?=$id?>">Видалити</a>
                  <a href="//<?=$_SERVER['HTTP_HOST']?>/edit.php?id=<?=$good['id']?>&page=<?=$id?>">Редагувати</a>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        <?php endif ?>
          
      </div>
    </div>
  </div>
</div>