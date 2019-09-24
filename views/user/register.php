<?php include ROOT.'/views/layouts/header.php'; ?>
  
  <?php if ($result): ?>
    <p>Вы зарегистрированы</p>
  <?php else: ?>
  <?php if (isset($errors) && is_array($errors)) : ?>
    <ul>
      <?php foreach ($errors as $error) : ?>
        <li><?php echo $error; ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <form action="#" method="POST" class="form-signin pt-5 pb-5">
    <h1 class="h3 mb-3 font-weight-normal">Регистрация Администратора</h1>
    <label class="sr-only">Ваш email</label>
    <input type="email" class="form-control mt-4" name="mail" placeholder="Ваш email" required="" value="<?php echo $email; ?>"  required>

    <label class="sr-only">Ваш НикНейм</label>
    <input type="text" class="form-control mt-2" name="Nick" placeholder="Ваш НикНейм" required="" value="<?php echo $nickname; ?>"  required>

    <label class="sr-only">Введите новый пароль</label>
    <input type="password" class="form-control mt-2" name="pass" placeholder="Введите новый пароль" required="" value="<?php echo $password; ?>" required>
    <input class="beauty-btn btn-block mt-4 pt-3 pb-3" type="submit" name="submit" value="Зарегистрироваться">
  </form>
  <?php endif; ?>
<?php include ROOT . '/views/layouts/footer.php'; ?>