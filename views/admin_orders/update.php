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
      <h1 class="h2">Редактировать Заказ - <?php echo $id; ?></h1>
    </div>

    
    
    
    
    
    <form method="POST">
      <div class="form-group">
        <label>Имя клиента</label>
        <input type="text" class="form-control" name="user_name" value="<?php echo $order['user_name'] ?>">
      </div>

      <div class="form-group">
        <label>Номер</label>
        <input type="text" class="form-control" name="user_phone" value="<?php echo $order['user_phone'] ?>">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="user_email" value="<?php echo $order['user_email'] ?>">
      </div>
      <div class="form-group">
        <label>Комментарий</label>
        <textarea class="form-control" name="description" rows="3" value="<?php echo $order['user_messege'] ?>"></textarea>
      </div>
      <div class="form-group">
        <label>Город</label>
        <input type="text" class="form-control" name="user_city" value="<?php echo $order['user_city'] ?>">
      </div>
      <div class="form-group">
        <label>Отделение почты</label>
        <input type="text" class="form-control" name="user_office" value="<?php echo $order['user_office'] ?>">
      </div>
      <div class="form-group">
        <label>Дата заказа</label>
        <input type="text" class="form-control" name="date" value="<?php echo $order['date'] ?>">
      </div>
      <div class="form-group">
        <label>Статус заказа</label>
        <select class="form-control" name="status" value="<?php echo $order['status'] ?>">
          <option value="1" <?php if ($order['status'] == 1) echo ' selected="selected"'; ?>>Новый заказ</option>
          <option value="2" <?php if ($order['status'] == 2) echo ' selected="selected"'; ?>>На рассмотрении</option>
          <option value="3" <?php if ($order['status'] == 3) echo ' selected="selected"'; ?>>Оплачено</option>
        </select>
      </div>      
      
      <input type="submit" name="submit" class="btn btn-warning w-100 pt-3 pb-3 text-uppercase" value="Сохранить">
    </form>
    

    
  </main>

  </div>
</div>


<?php include ROOT.'/views/layouts/footer_admin.php'; ?>