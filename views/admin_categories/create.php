<?php include ROOT.'/views/layouts/header_admin.php'; ?>



  <main class="col-md-9 ml-sm-auto col-lg-10 px-4" role="main">
    <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
      <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
      </div>
      <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
      </div>
    </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Добавить Категорию</h1>
    </div>

    <?php if (isset($errors) && is_array($errors)): ?>
      <ul>
        <?php foreach ($errors as $error): ?>
          <li><?php echo $error; ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
    
    <form method="POST">
      <div class="form-group">
        <label>Название категории</label>
        <input type="text" class="form-control" name="name">
      </div>
      <div class="form-group">
        <label>Порядковый номер</label>
        <input type="text" class="form-control" name="sort_order">
      </div>
      <div class="form-group">
        <label>Статус</label>
        <select class="form-control" name="status">
          <option value="1" selected="selected">Отображается</option>
          <option value="0">Скрыта</option>
        </select>
      </div>
      <input type="submit" name="submit" class="btn btn-warning w-25 pt-3 pb-3 text-uppercase" value="Создать категорию">
    </form>
    
  </main>

  </div>
</div>


<?php include ROOT.'/views/layouts/footer_admin.php'; ?>