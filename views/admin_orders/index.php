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
      <h1 class="h2">Заказы</h1>
    </div>
    <table class="table table_orders">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#id</th>
          <th scope="col">Имя</th>
          <th scope="col">Телефон</th>
          <th scope="col">Дата</th>
          <th scope="col">Статус</th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>

        <?php foreach ($ordersList as $order): ?>
        <tr>
          <td scope="row"><?php echo $order['id']; ?></td>
          <td><?php echo $order['user_name']; ?></td>
          <td>
            <a href="tel:<?php echo $order['user_phone']; ?>">
              <?php echo $order['user_phone']; ?>
            </a>
          </td>
          <td><?php echo $order['date']; ?></td>
          <td><?php echo Order::getStatusText($order['status']); ?></td>
          <td>
            <a href="orders/view/<?php echo $order['id']; ?>">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M503.698,231.895c-28.735-36.843-65.956-67.318-107.637-88.128c-42.548-21.243-88.321-32.265-136.104-32.843
                        c-1.316-0.036-6.6-0.036-7.916,0c-47.782,0.579-93.556,11.6-136.104,32.843c-41.681,20.81-78.9,51.284-107.636,88.128
                        c-11.07,14.193-11.07,34.018,0,48.211c28.735,36.843,65.955,67.318,107.636,88.128c42.548,21.243,88.321,32.265,136.104,32.843
                        c1.316,0.036,6.6,0.036,7.916,0c47.782-0.579,93.556-11.6,136.104-32.843c41.681-20.81,78.901-51.284,107.637-88.128
                        C514.768,265.911,514.768,246.088,503.698,231.895z M125.242,349.599c-38.92-19.432-73.678-47.892-100.517-82.303
                        c-5.187-6.651-5.187-15.94,0-22.591c26.838-34.411,61.596-62.871,100.517-82.303c11.054-5.518,22.342-10.29,33.839-14.33
                        c-29.578,26.588-48.213,65.12-48.213,107.928c0,42.81,18.636,81.345,48.217,107.932
                        C147.588,359.892,136.297,355.118,125.242,349.599z M256,380.303c-68.542,0-124.304-55.762-124.304-124.304
                        S187.458,131.696,256,131.696S380.304,187.458,380.304,256S324.542,380.303,256,380.303z M487.275,267.295
                        c-26.838,34.411-61.596,62.871-100.517,82.303c-11.041,5.512-22.322,10.263-33.805,14.299
                        c29.558-26.587,48.179-65.107,48.179-107.898c0-42.814-18.64-81.351-48.223-107.939c11.5,4.041,22.793,8.819,33.85,14.34
                        c38.92,19.432,73.678,47.892,100.517,82.303C492.462,251.355,492.462,260.644,487.275,267.295z"/>
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M256,202.804c-29.332,0-53.195,23.863-53.195,53.195s23.863,53.195,53.195,53.195s53.195-23.863,53.195-53.195
                        C309.196,226.667,285.333,202.804,256,202.804z M256,288.367c-17.847,0-32.368-14.519-32.368-32.368
                        c0-17.848,14.519-32.367,32.368-32.367c17.847,0,32.367,14.519,32.367,32.367C288.368,273.848,273.847,288.367,256,288.367z"/>
                    </g>
                  </g>
              </svg>
            </a>
          </td>
          <td>
            <a href="orders/update/<?php echo $order['id']; ?>">
              <svg viewBox="0 -1 401.52289 401"  xmlns="http://www.w3.org/2000/svg">
                <path d="m370.589844 250.972656c-5.523438 0-10 4.476563-10 10v88.789063c-.019532 16.5625-13.4375 29.984375-30 30h-280.589844c-16.5625-.015625-29.980469-13.4375-30-30v-260.589844c.019531-16.558594 13.4375-29.980469 30-30h88.789062c5.523438 0 10-4.476563 10-10 0-5.519531-4.476562-10-10-10h-88.789062c-27.601562.03125-49.96875 22.398437-50 50v260.59375c.03125 27.601563 22.398438 49.96875 50 50h280.589844c27.601562-.03125 49.96875-22.398437 50-50v-88.792969c0-5.523437-4.476563-10-10-10zm0 0"/>
                <path d="m376.628906 13.441406c-17.574218-17.574218-46.066406-17.574218-63.640625 0l-178.40625 178.40625c-1.222656 1.222656-2.105469 2.738282-2.566406 4.402344l-23.460937 84.699219c-.964844 3.472656.015624 7.191406 2.5625 9.742187 2.550781 2.546875 6.269531 3.527344 9.742187 2.566406l84.699219-23.464843c1.664062-.460938 3.179687-1.34375 4.402344-2.566407l178.402343-178.410156c17.546875-17.585937 17.546875-46.054687 0-63.640625zm-220.257812 184.90625 146.011718-146.015625 47.089844 47.089844-146.015625 146.015625zm-9.40625 18.875 37.621094 37.625-52.039063 14.417969zm227.257812-142.546875-10.605468 10.605469-47.09375-47.09375 10.609374-10.605469c9.761719-9.761719 25.589844-9.761719 35.351563 0l11.738281 11.734375c9.746094 9.773438 9.746094 25.589844 0 35.359375zm0 0"/>
              </svg>
            </a>
          </td>
          <td>
            <a href="orders/delete/<?php echo $order['id']; ?>">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 47.971 47.971" style="enable-background:new 0 0 47.971 47.971;" xml:space="preserve">
                <g>
                  <path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88
                    c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242
                    C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879
                    s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>
                </g>
              </svg>
            </a>
          </td>
        </tr>
        <?php endforeach; ?>
        

       

      </tbody>
    </table>

    
  </main>

  </div>
</div>


<?php include ROOT.'/views/layouts/footer_admin.php'; ?>