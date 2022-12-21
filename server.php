<?php
$_POST = json_decode(file_get_contents('php://input'), true); //на php коде получаем JSON данные, с которыми можно работать
echo var_dump($_POST);