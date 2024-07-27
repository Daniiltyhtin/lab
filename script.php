<?php
// URL вашего вебхука
$webhookUrl = 'https://b24-u8i9wx.bitrix24.ru/rest/1/0oqwm1oftg1fmgf3/';

// Функция для отправки запроса через CURL
function sendRequest($url, $method, $data = []) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url . $method);
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

// ID смарт-процесса (dynamic entity ID)
$entityTypeId = 1038;

// Начальные параметры
$start = 0;
$pageSize = 50;
$items = [];

do {
    // Данные запроса
    $data = [
        'entityTypeId' => $entityTypeId,
        'start' => $start
    ];

    // Отправка запроса
    $result = sendRequest($webhookUrl, 'crm.item.list', $data);
    
    // Обработка ответа
    if (isset($result['result']['items'])) {
        $items = array_merge($items, $result['result']['items']);
        $start += $pageSize;
    } else {
        echo "Ошибка при получении элементов смарт-процесса: " . json_encode($result);
        break;
    }
} while (count($result['result']['items']) == $pageSize);

// Вывод элементов
foreach ($items as $item) {
    print_r($item);
    echo "<br>";
}
?>
