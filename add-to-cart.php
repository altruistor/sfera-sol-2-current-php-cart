<?php
session_start();
include 'products.php';

// Проверяем, отправили ли товар
if (isset($_POST['product_id'])) {
    $product_id = (int) $_POST['product_id'];

    // Проверяем, существует ли товар в списке товаров
    if (isset($products[$product_id])) {
        // Если корзина ещё не существует — создаем её
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        // Если товар уже есть в корзине, увеличиваем количество
        if (isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id]['quantity']++;
        } else {
            // Иначе добавляем новый товар с количеством 1
            $_SESSION['cart'][$product_id] = [
                'name' => $products[$product_id]['name'],
                'price' => $products[$product_id]['price'],
                'image' => $products[$product_id]['image'],
                'quantity' => 1
            ];
        }
    }
}

// После добавления товара — перенаправляем назад
header('Location: index.php');
exit;
?>