<?php

define('TEXT_MODULE_YANDEXWALLET_TITLE','ЮMoney'); //Yandex钱包
define('TEXT_MODULE_YANDEXWALLET_ID','钱包号'); //钱包号
define('TEXT_MODULE_YANDEXWALLET_INFO','如果您想即时了解资金流入并立即识别每笔转账，请启用<a href="https://yoomoney.ru/transfer/myservices/http-notification" target="_blank">HTTP通知</a><br>通知URL：'.url_for_file('api/ipn.php?module_id=') . '%s'); //如果您想即时了解资金流入并立即识别每笔转账，请启用HTTP通知
define('TEXT_MODULE_YANDEXWALLET_PAYMENT_TYPE_WALLET','ЮMoney');//Yandex钱包
define('TEXT_MODULE_YANDEXWALLET_PAYMENT_TYPE_CC','银行卡');//银行卡
define('TEXT_MODULE_YANDEXWALLET_PAYMENT_COMPLATED','已入账'); //已入账
