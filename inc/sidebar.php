<div class="col-md-3 left_col">
  <div class="left_col scroll-view">

    <div class="navbar nav_title" style="border: 0;">
      <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Склад "Глобус"</span></a>
    </div>
    <div class="clearfix"></div>


    <!-- menu prile quick info -->
    <div class="profile">
      <div class="profile_pic">
        <img src="../assets/images/img.jpg" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Вітаємо,</span>
        <h2>Вадим</h2>
      </div>
    </div>
    <!-- /menu prile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

      <div class="menu_section">
        <ul class="nav side-menu">
          <li><a href='./'><i class="fa fa-home"></i> Головна</a></li>
          <li><a><i class="fa fa-edit"></i> Товари <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none">
              <li><a href="//<?=$_SERVER['HTTP_HOST']?>?id=goods">Переглянути товари</a>
              </li>
              <li><a href="//<?=$_SERVER['HTTP_HOST']?>?id=add_good">Додати товар</a>
              </li>
            </ul>
          </li>
          <li><a><i class="fa fa-desktop"></i> Постачальники <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none">
              <li><a href="//<?=$_SERVER['HTTP_HOST']?>?id=providers">Переглянути постачальників</a>
              </li>
              <li><a href="//<?=$_SERVER['HTTP_HOST']?>?id=add_providers">Додати постачальника</a>
              </li>
            </ul>
          </li>
          <li><a><i class="fa fa-table"></i> Категорії товарів <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none">
              <li><a href="//<?=$_SERVER['HTTP_HOST']?>?id=category">Усі категорії</a>
              </li>
              <li><a href="//<?=$_SERVER['HTTP_HOST']?>?id=add_category">Додати категорію</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>

<!-- top navigation -->
<div class="top_nav">

  <div class="nav_menu">
    <nav class="" role="navigation">
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="../assets/images/img.jpg" alt="">Вадим
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
            <li><a href="javascript:;">  Профиль</a>
            </li>
            <li>
              <a href="javascript:;">
                <span>Налаштування</span>
              </a>
            </li>
            <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Вийти</a>
            </li>
          </ul>
        </li>

      </ul>
    </nav>
  </div>

</div>
<!-- /top navigation -->