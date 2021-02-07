<footer class="main-footer">
    <?php
    $copyYear = 2021;
    $currentYear = date('Y');
    ?>
    <strong>Copyright @ <?php echo $copyYear.(($copyYear != $currentYear)  ? '-'.$currentYear: '');?> <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>