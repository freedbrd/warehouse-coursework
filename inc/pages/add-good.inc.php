<?php 

  $statuses = getAllStatuses();
  $providers = getAllProviders();
  $categories = getAllCategories();

?>

<div class="row">
  <div class="col-md-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Додати товар</h2>
        <div class="clearfix"></div>

      </div>
      <div class="x_content">
        <form id="add-good" class="form-add" method="POST">
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Назва товару</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input name="good-title" type="text" class="form-control" placeholder="Назва товару">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Ціна закупки</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input name="start-price" type="text" class="form-control" placeholder="Ціна закупки">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Ціна продажу</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input name="sell-price" type="text" class="form-control" placeholder="Ціна продажу">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Кількість</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input name="quantity" type="text" class="form-control" placeholder="Кількість">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Статус</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <?php if (is_array($statuses)): ?>
                  <select name="status" class="select_status form-control" tabindex="-1">
                    <?php foreach ($statuses as $key => $status): ?>     
                        <option value="<?=$status['id']?>"><?=$status['title']?></option>
                    <?php endforeach ?>
                  </select>
                <?php endif ?>
                    
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Постачальник</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <?php if (is_array($providers)): ?>
                  <select name="provider" class="select_status form-control" tabindex="-1">
                    <?php foreach ($providers as $key => $provider): ?>     
                        <option value="<?=$provider['id']?>"><?=$provider['title']?></option>
                    <?php endforeach ?>
                  </select>
                <?php endif ?>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Категорія</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                 <?php if (is_array($categories)): ?>
                  <select name="category" class="select_status form-control" tabindex="-1">
                    <?php foreach ($categories as $key => $category): ?>     
                        <option value="<?=$category['id']?>"><?=$category['title']?></option>
                    <?php endforeach ?>
                  </select>
                <?php endif ?>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <button type="submit" class="btn btn-lg btn-primary">Додати товар</button>
              </div>
            </div>
        </form>
      </div>
    </div>
    
  </div>
</div>