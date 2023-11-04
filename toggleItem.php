<?php
include('fct/item.php');
include('fct/request.php');
include('config/app.php');

$items = getItems();
$id = get('item');

$items[$id]['checked'] = !$items[$id]['checked'];

saveItems($items);

header('Location:index.php');