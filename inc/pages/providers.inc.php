<?php 

  $providers = getAllProviders();


?>

<div class="page-title">
  <div class="title_left">
    <h3>
          Постачальники
      </h3>
  </div>
</div>
<div class="clearfix"></div>
<div class="row">
  <?php if (is_array($providers)): ?>
    <?php 
      $count1 = 1; 
      $count2 = 2; 
    ?>
    <?php foreach ($providers as $key => $provider): ?>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><?=$provider['title']?></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="//<?=$_SERVER['HTTP_HOST']?>/edit.php?id=<?=$provider['id']?>&page=<?=$id?>">Редагувати</a>
                  </li>
                  <li><a href="//<?=$_SERVER['HTTP_HOST']?>/delete.php?id=<?=$provider['id']?>&page=<?=$id?>">Видалити</a>
                  </li>
                </ul>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
              <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tab_content<?=++$count1?>" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Опис</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content<?=++$count2?>" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Адреса</a>
                </li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="tab_content<?=$count1?>" aria-labelledby="home-tab">
                  <?=$provider['descr']?> <br>
                  Телефон: <?=$provider['phone']?>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_content<?=$count2?>" aria-labelledby="profile-tab">
                  <?=$provider['address']?>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <?php 
        ++$count1; 
        ++$count2; 
      ?>
    <?php endforeach ?>
      
  <?php endif ?>
    
</div>