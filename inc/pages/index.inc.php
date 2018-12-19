<?php 

	$goods = getAllGoods();
	$repairs = getGoodsByQuery('status', 1);
	$shipment = getGoodsByQuery('status', 2);
	$providers = getAllProviders();
?>
<div class="row about top_tiles" style="margin: 10px 0;">
    <div class="col-md-12 col-sm-12 col-xs-12">
    	<div class="x-panel">
    		<h3>Вітаю!</h3>
    		<p>
    			Це мій курсовий проект на тему «Склад». <br> Інформацію, про те, як користуватись сайтом знаходиться в розділі 4.4 Опис інтерфейсу програми або в файлі README.md
    		</p>
    		<h4>
    			Невелика статистика по складу:
    		</h4>
    		<div class="row top_tiles stat">
	            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
	              <div class="tile-stats">
	                <div class="icon"><i class="fa fa-book"></i>
	                </div>
	                <div class="count"><?=count($goods)?></div>

	                <h3>Усього позицій на складі</h3>
	              </div>
	            </div>
	            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
	              <div class="tile-stats">
	                <div class="icon"><i class="fa fa-truck"></i>
	                </div>
	                <div class="count"><?=count($providers)?></div>

	                <h3>Постачальників</h3>
	              </div>
	            </div>
	            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
	              <div class="tile-stats">
	                <div class="icon"><i class="fa fa-wrench"></i>
	                </div>
	                <div class="count"><?=count($repairs)?></div>

	                <h3>Товарів в ремонті</h3>
	              </div>
	            </div>
	            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
	              <div class="tile-stats">
	                <div class="icon"><i class="fa fa-upload"></i>
	                </div>
	                <div class="count"><?=count($shipment)?></div>

	                <h3>Товарів на відгрузку</h3>
	              </div>
	            </div>
	          </div>
    	</div>
    </div>
</div>