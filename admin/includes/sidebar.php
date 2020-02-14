<style>
  .app-menu__label {
    font-size: 20px;
  }
</style>
<?php $_GET['active'] != '' ? $active = $_GET['active'] : $active = ``; ?>
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">

  <ul class="app-menu">


    <li>
      <a class="app-menu__item <?php echo $active == 'articles' ? 'active' : '' ?>" href="articles.php?active=articles">
        <i class="app-menu__icon fa fa-star"></i>
        <span class="app-menu__label">จัดการบทความ</span>
      </a>
    </li>

    <li>
      <a class="app-menu__item <?php echo $active == 'activities' ? 'active' : '' ?>" href="activities.php?active=activities">
        <i class="app-menu__icon fa fa-calendar"></i>
        <span class="app-menu__label">จัดการกิจกรรม</span>
      </a>
    </li>


    <?php if ($status_login == "admin") { ?>

      <li>
        <a class="app-menu__item <?php echo $active == 'member' ? 'active' : '' ?>" href="member.php?active=member">
          <i class="app-menu__icon fa fa-user"></i>
          <span class="app-menu__label">จัดการสมาชิก</span>
        </a>
      </li>
    <?php } ?>

    <li>
      <a class="app-menu__item <?php echo $active == 'carousel' ? 'active' : '' ?>" href="carousel.php?active=carousel">
        <i class="app-menu__icon fa fa-image"></i>
        <span class="app-menu__label">จัดการรูปภาพ</span>
      </a>
    </li>

    <?php if ($status_login == "admin") { ?>

      <li>
        <a class="app-menu__item <?php echo $active == 'setting' ? 'active' : '' ?>" href="setting.php?active=setting">
          <i class="app-menu__icon fa fa-cog"></i>
          <span class="app-menu__label">ตั้งค่า</span>
        </a>
      </li>

    <?php } ?>


  </ul>
</aside>