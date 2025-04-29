<?php
session_start();

if (isset($_POST['product_id'])) {
    $product_id = (int) $_POST['product_id'];

    // Если товар существует в корзине — удаляем
    if (isset($_SESSION['cart'][$product_id])) {
        unset($_SESSION['cart'][$product_id]);
    }
}

// После удаления возвращаемся обратно в корзину
header('Location: cart.php');
exit;
?>