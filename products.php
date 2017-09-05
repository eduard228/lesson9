<?php
// [Название, Цена, Описание, Картинка , Ссылка]
// [0],[1],[2],[3],[4]
$products = [ ['Шапка мужская', 177, 'Крутая шапка', '1.jpg' , 'https://github.com'],
   ['Штаны женские', 555, 'Стильные штаны' , '6.jpg', 'https://github.com'] ,
   ['Мяч волейбольный', 569, 'Китай.', '5.jpg', 'https://github.com'],
   ['Джинсы', 1000, 'Б/У джинсы.', '1.jpg', 'https://github.com'],
   ['Футболка',3434666, 'Cо скелетом.', '3.jpg', 'https://github.com/'],
   ['Футболка', 34666, 'C машиной.', '2.jpg', 'https://github.com'],
   ['Футболка', 22666, 'C девушкой.', '2.jpg', 'https://github.com'],
   ['Футболка', 466, 'C розой.', '2.jpg', 'https://github.com'],
   ['Футболка', 1666, 'C компом.', '2.jpg', 'https://github.com'],
   ['Футболка', 666, 'C часами.', '2.jpg', 'https://github.com'],
   ['Футболка', 666, 'C пандой', '2.jpg', 'https://github.com'],
   ['Футболка', 6966, 'C орлом.', '2.jpg', 'https://github.com'],


];

//Функции, которые возвращают.
function getName($product)
{
    return $product[0];
}

function getPrice($product)
{
    return $product[1];
}

function getDescription($product)
{
    return $product[2];
}
function getImg($product)
{
    return $product[3];
}
function getLink($product)
{
    return $product[4];
}


$products_new = [

    [
        'name' => 'название1',
        'price' => 200,
        'description' => 'Китай',
        'img' => '1.jpg',
        'link' => 'https://github.com',
        'colors' => ['белый', 'красный']
    ],
  [
  'name' => 'название2',
    'price' => 200,
    'description' => 'Китай',
    'img' => '2.jpg',
    'link' => 'https://github.com',
'colors' => ['белый', 'красный']
],
  [
  'name' => 'название3',
    'price' => 200,
    'description' => 'Китай',
    'img' => '3.jpg',
    'link' => 'https://github.com',
'colors' => ['белый', 'красный']
],
[
'name' => 'название4',
    'price' => 200,
    'description' => 'Китай',
    'img' => '5.jpg',
    'link' => 'https://github.com',
'colors' => ['белый', 'красный']
],
[
    'name' => 'название5',
    'price' => 200,
    'description' => 'Китай',
    'img' => '6.jpg',
    'link' => 'https://github.com',
'colors' => ['белый', 'красный']
],
[
'name' => 'название6',
    'price' => 200,
    'description' => 'Китай',
    'img' => '1.jpg',
    'link' => 'https://github.com',
'colors' => ['белый', 'красный']
]



];