<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
<style>.u-header {
  background-image: none;
}
.u-header .u-sheet-1 {
  min-height: 85px;
}
.u-header .u-image-1 {
  width: 58px;
  height: 70px;
  margin: 7px auto 0 0;
}
.u-header .u-logo-image-1 {
  width: 100%;
  height: 100%;
}
.u-header .u-search-1 {
  width: 200px;
  min-height: 38px;
  margin: -59px 0 0 auto;
}
.u-header .u-menu-1 {
  font-family: size-14;
  margin: -36px auto 21px 268px;
}
.u-header .u-nav-1 {
  font-size: 1rem;
}
.u-block-bb27-37 {
  font-size: 1rem;
}
.u-header .u-nav-2 {
  font-size: 1rem;
}
.u-block-bb27-38 {
  font-size: 1rem;
}
@media (max-width: 1199px) {
  .u-header .u-image-1 {
    width: 58px;
    margin-left: 100px;
  }
  .u-header .u-search-1 {
    height: auto;
    margin-right: 100px;
  }
  .u-header .u-menu-1 {
    width: auto;
    margin-top: -36px;
    margin-right: 261px;
    margin-left: auto;
  }
}
@media (max-width: 991px) {
  .u-header .u-image-1 {
    margin-left: 210px;
  }
  .u-header .u-search-1 {
    margin-right: 268px;
  }
  .u-header .u-menu-1 {
    margin-right: 214px;
  }
}
@media (max-width: 767px) {
  .u-header .u-image-1 {
    margin-left: 300px;
  }
  .u-header .u-search-1 {
    margin-right: 358px;
  }
  .u-header .u-menu-1 {
    margin-right: 175px;
  }
}
@media (max-width: 575px) {
  .u-header .u-image-1 {
    margin-left: 537px;
  }
  .u-header .u-search-1 {
    margin-right: auto;
    margin-left: 470px;
  }
  .u-header .u-menu-1 {
    margin-right: 71px;
  }
}</style>
