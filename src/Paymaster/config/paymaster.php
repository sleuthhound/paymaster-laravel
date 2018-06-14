<?php
declare(strict_types=1);

return [

    // Идентификатор продавца
    // Идентификатор сайта в системе PayMaster. Идентификатор можно увидеть в Личном Кабинете, на странице
    // "Список сайтов", в первой колонке.
    'LMI_MERCHANT_ID' => env('LMI_MERCHANT_ID',''),

    // Валюта платежа
    // Идентификатор валюты платежа. Система PayMaster понимает как текстовый 3-буквенный код валюты (RUB),
    // так и ISO-код (643) (см. http://www.currency-iso.org/en/home/tables/table-a1.html)
    'LMI_CURRENCY' => env('LMI_CURRENCY','RUB'),


    // Режим тестирования
    // Дополнительное поле, определяющее режим тестирования. Действует только в режиме тестирования и может
    // принимать одно из следующих значений:
    // 0 или отсутствует: Для всех тестовых платежей сервис будет имитировать успешное выполнение;
    // 1: Для всех тестовых платежей сервис будет имитировать выполнение с ошибкой (платеж не выполнен);
    // 2: Около 80% запросов на платеж будут выполнены успешно, а 20% - не выполнены.
    'LMI_SIM_MODE' => env('LMI_SIM_MODE',0),

    // URL для вывода формы оплаты
    'LMI_PAYMENT_FORM_URL' => env('LMI_PAYMENT_FORM_URL', ''),

    // Замена Invoice Confirmation URL
    // Если присутствует, то запрос Invoice Confirmation будет отправляться по указанному URL
    // (а не установленному в настройках). Этот параметр игнорируется, если в настройках сайта запрещена замена URL.
    'LMI_INVOICE_CONFIRMATION_URL' => env('LMI_INVOICE_CONFIRMATION_URL',''),

    // Замена Payment Notification URL
    // Если присутствует, то запрос Payment Notification будет отправляться по указанному URL
    // (а не установленному в настройках).
    // Этот параметр игнорируется, если в настройках сайта запрещена замена URL.
    'LMI_PAYMENT_NOTIFICATION_URL' => env('LMI_PAYMENT_NOTIFICATION_URL', ''),

    // Замена Success URL
    // Если присутствует, то при успешном платеже пользователь будет отправлен по указанному URL
    // (а не установленному в настройках).
    //Этот параметр игнорируется, если в настройках сайта запрещена замена URL.
    'LMI_SUCCESS_URL' => env('LMI_SUCCESS_URL', ''),

    // Замена Failure URL
    // Если присутствует, то при отмене платежа пользователь будет отправлен по указанному
    // URL (а не установленному в настройках).
    //Этот параметр игнорируется, если в настройках сайта запрещена замена URL.
    'LMI_FAILURE_URL' => env('LMI_FAILURE_URL', ''),


    // Идентификатор платежного метода
    // Идентификатор платежного метода, выбранный пользователем. Отсутствие означает, что пользователь будет
    // выбирать платежный метод на странице оплаты PayMaster.
    //Платежный метод указан в настройках сайта в квадратных скобках рядом с названием платежной системы
    // (Например: Webmoney [WebMoney]).
    //Рекомендуется поменять параметр LMI_PAYMENT_SYSTEM на LMI_PAYMENT_METHOD.
    //Но LMI_PAYMENT_SYSTEM по-прежнему принимается и обрабатывается системой.
    'LMI_PAYMENT_METHOD' => env('LMI_PAYER_PHONE_NUMBER', ''),


    // Ключ
    // Самое важно из этого всего ключевая фраза, которая испрользуется для формирования обоих хешей
    // (Подписи и самого хеша)
    'KEYPASS' => env('KEYPASS', ''),

    // Берем этот блок и размещаем его в .env файле подставив нужные переменные
    // LMI_MERCHANT_ID=
    // LMI_CURRENCY=RUB
    // LMI_SIM_MODE=0
    // LMI_INVOICE_CONFIRMATION_URL=
    // LMI_PAYMENT_NOTIFICATION_URL=
    // LMI_SUCCESS_URL=
    // LMI_FAILURE_URL=
    // LMI_PAYMENT_METHOD=
    // KEYPASS=
];
