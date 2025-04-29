<?php
session_start();
?>

<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <title>Košík</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
  <h1 class="mb-4 text-center">Váš košík</h1>

  <?php if (!empty($_SESSION['cart'])): ?>
    <table class="table table-bordered table-hover">
      <thead class="table-light">
        <tr>
          <th>Produkt</th>
          <th>Cena</th>
          <th>Množství</th>
          <th>Celkem</th>
          <th>Akce</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $total = 0;
        foreach ($_SESSION['cart'] as $id => $item):
          $item_total = $item['price'] * $item['quantity'];
          $total += $item_total;
        ?>
        <tr>
          <td><?= htmlspecialchars($item['name']) ?></td>
          <td><?= $item['price'] ?> Kč</td>
          <td><?= $item['quantity'] ?></td>
          <td><?= $item_total ?> Kč</td>
          <td>
            <form action="remove-from-cart.php" method="post">
              <input type="hidden" name="product_id" value="<?= $id ?>">
              <button type="submit" class="btn btn-danger btn-sm">Odstranit</button>
            </form>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <div class="text-end">
      <h4>Celková cena: <?= $total ?> Kč</h4>
      <a href="checkout.php" class="btn btn-success mt-3">Objednat</a>
    </div>

  <?php else: ?>
    <div class="alert alert-info text-center">
      Košík je prázdný.
    </div>
  <?php endif; ?>

  <div class="text-center mt-4">
    <a href="index.php" class="btn btn-primary">Zpět na nákup</a>
  </div>
</div>
</body>
</html>