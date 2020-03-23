<?php
$is_auth = rand(0, 1);
$user_name = 'Буиклы Олег'; // укажите здесь ваше имя



//таймер
date_default_timezone_set("Europe/Moscow");
$ts = time();
$secsInDay = 86400;
$tsNight = strtotime('tomorrow');
$secsToNight = $tsNight - $ts;

$hours = floor($secsToNight / 3600);
$minutes = floor(($secsToNight % 3600) / 60);
$timer = $hours . " : " . $minutes;



$category = [
    "boards" => "Доски и лыжи",
    "attachment" => "Крепления",
    "boots" => "Ботинки",
    "clothing" => "Одежда",
    "tools" => "Инструменты",
    "other" => "Разное"
];

$lots = [
    ["name" => "2014 Rossignol District Snowboard", "category" => "Доски и лыжи", "price" => 10999, "image" => "img/lot-1.jpg"],
    ["name" => "DC Ply Mens 2016/2017 Snowboard", "category" => "Доски и лыжи", "price" => 159999, "image" => "img/lot-2.jpg"],
    ["name" => "Крепления Union Contact Pro 2015 года размер L/XL", "category" => "Крепления", "price" => 8000, "image" => "img/lot-3.jpg"],
    ["name" => "Ботинки для сноуборда DC Mutiny Charocal", "category" => "Ботинки", "price" => 10999, "image" => "img/lot-4.jpg"],
    ["name" => "Куртка для сноуборда DC Mutiny Charocal", "category" => "Одежда","price" => 7500,"image" => "img/lot-5.jpg"],
    ["name" => "Маска Oakley Canopy", "category" => "Разное", "price" => 5400, "image" => "img/lot-6.jpg"]
];

function cost($input) {
    $input = ceil($input);
    $format_cost = number_format($input, 0, '.',' ');
    return $format_cost .' ₽';
};

function include_template($name, $data){
    $name = 'templates/' . $name;
    $result = '';
    
    if (!file_exists($name)){
        return $result;
    }
    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}
?>
