<?php

// Инициализация массива для хранения количества сделок по направлениям
$dealCountByCategory = [];

$contactCount = 0;
$dealCount = 0;

// Функция для отправки запроса через CURL
function sendRequest($method, $data = []) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://b24-u8i9wx.bitrix24.ru/rest/1/0oqwm1oftg1fmgf3/' . $method);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Content-Length: ' . strlen(json_encode($data))
    ]);

    $response = curl_exec($ch);
    curl_close($ch);
    
    return json_decode($response, true);
}

function countDeals($id){
    $categoryId = $id;
    $dealCount = 0;
    $start = 0;
    $pageSize = 50;

    do {
        // Получение сделок для текущего направления
        $deals = sendRequest('crm.deal.list', [
            'filter' => ['CATEGORY_ID' => $categoryId],
            'select' => ['ID'],
            'start' => $start
        ]);

        $dealCount += count($deals['result']);
        $start += $pageSize;

    } while (count($deals['result']) == $pageSize);

    return $dealCount;
}

function countStrings($method, $data){
    $stringCount = 0;
    $start = 0;
    $pageSize = 50;

    do {
        $data['start'] = $start;
        $strings = sendRequest($method, $data);
        $stringCount += count($strings['result']);
        $start += $pageSize;

    }while (count($strings['result']) == $pageSize);

    return $stringCount;
}

//1)-
print_r(countStrings('crm.contact.list', [
    'select' => ['ID', 'COMMENTS']
]));
echo '<br>';

print_r(countStrings('crm.contact.list', [
    'filter' => ['!COMMENTS' => ''],
    'select' => ['ID', 'COMMENTS']
]));
echo '<br>';

print_r(countStrings('crm.deal.list', [
    'select' => ['ID', 'CONTACT_ID']
]));
echo '<br>';

print_r(countStrings('crm.deal.list', [
    'filter' => ['CONTACT_ID' => ''],
    'select' => ['ID', 'CONTACT_ID']
]));
echo '<br>';

// Получение списка направлений
$categories = sendRequest('crm.dealcategory.list');

// Обработка каждого направления
foreach ($categories['result'] as $category) {
    $dealCountByCategory[$category['NAME']] = countDeals($category['ID']);
}

$dealCountByCategory['без категории'] = countDeals(0);

// Вывод количества сделок по направлениям
foreach ($dealCountByCategory as $categoryName => $count) {
    echo "Направление: $categoryName, Количество сделок: $count<br>";
}

?>