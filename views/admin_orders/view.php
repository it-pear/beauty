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
      <h1 class="h2">Просмотр заказ - <?php echo $id; ?></h1>
    </div>
    <h5 class="mb-4">Информация о заказе</h5>
    <table class="table table_orders">
      <tbody>
        <tr>
          <td>Номера заказа</td>
          <td><?php echo $order['id']; ?></td>
        </tr>
        <tr>
          <td>Имя клиента</td>
          <td><?php echo $order['user_name']; ?></td>
        </tr>
        <tr>
          <td>Телефон клиента</td>
          <td>
            <a href="tel:<?php echo $order['user_phone']; ?>">
              <?php echo $order['user_phone']; ?>
            </a>
          </td>
        </tr>
        <tr>
          <td>Email клиента</td>
          <td><?php echo $order['user_email']; ?></td>
        </tr>
        <tr>
          <td>Комментарий клиента</td>
          <td><?php echo $order['user_messege']; ?></td>
        </tr>
        <tr>
          <td>Город доставки</td>
          <td><?php echo $order['user_city']; ?></td>
        </tr>
        <tr>
          <td>Информация по почте</td>
          <td><?php echo $order['user_office']; ?></td>
        </tr>
        <tr>
          <td>Дата заказа</td>
          <td><?php echo $order['date']; ?></td>
        </tr>
        <tr>
          <td><b>Статус заказа</b></td>
          <td><b><?php echo Order::getStatusText($order['status']); ?></b></td>
        </tr>
      </tbody>
    </table>

    <h5 class="mb-4">Купленные продукты</h5>
    <table class="table table_products">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#id</th>
          <th scope="col">Название товара</th>
          <th scope="col">Цена</th>
          <th scope="col">Количество</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($products as $product): ?>
        <tr>
          <td scope="row" title="Номер товара"><?php echo $product['id']; ?></td>
          <td title="Название"><?php echo $product['name']; ?></td>
          <td title="Цена"><?php echo $product['price']; ?> грн.</td>
          <td title="Количество"><?php echo $productQuantity[$product['id']]; ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    
  </main>

  </div>
</div>


<?php include ROOT.'/views/layouts/footer_admin.php'; ?>