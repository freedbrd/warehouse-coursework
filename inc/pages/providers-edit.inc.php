<?php 

  $provider = getProvider($id)

?>

<div class="row">
  <div class="col-md-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Редагувати постачальника</h2>
        <div class="clearfix"></div>

      </div>
      <div class="x_content">
        <form class="form-add" id="edit-provider" method="POST">
          <input type="hidden" name="id" value="<?=$provider['id']?>">
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Назва компанії</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input value="<?=$provider['title']?>" name="prov-title" type="text" class="form-control" placeholder="Назва компанії">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Адреса компанії</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input value="<?=$provider['address']?>" name="address" type="text" class="form-control" placeholder="Адреса компанії">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Телефон компанії</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input value="<?=$provider['phone']?>" name="phone" type="text" class="form-control" placeholder="Телефон компанії">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Опис компанії</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <textarea class="form-control" name="about-company" placeholder="Опис компанії"><?=$provider['descr']?></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <button type="submit" class="btn btn-lg btn-primary">Редагувати компанію</button>
              </div>
            </div>
        </form>
      </div>
    </div>
    
  </div>
</div>