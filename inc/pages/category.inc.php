<?php 

  $categories = getAllCategories();


?>


<div class="page-title">
  <div class="title_left">
    <h3>
          Усі категорії
      </h3>
  </div>
</div>
<div class="clearfix"></div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Перелік категорій</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <?php $count = 1; ?>
        <?php if (is_array($categories)): ?>
          <?php foreach ($categories as $key => $category): ?>
           
            <?php 
              $goods = getGoodsByQuery("category", $category['id']);
            ?>
            <!-- start accordion -->
            <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel">
                <a class="panel-heading collapsed" role="tab" id="heading<?=$count?>" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$count?>" aria-expanded="false" aria-controls="collapse">
                  <h4 class="panel-title"><?=$category['title']?></h4>
                </a>
                <div id="collapse<?=$count?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?=$count?>" aria-expanded="false" style="height: 0px;">
                  <div class="panel-body">
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
                          </tr>
                        <?php endforeach; ?>
                        </tbody>
                      </table>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
            <?php $count++; ?>
            <!-- end of accordion -->
          <?php endforeach; ?>
        <?php endif ?>

        


      </div>
    </div>
  </div>
</div>