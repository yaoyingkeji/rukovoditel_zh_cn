<?php

define('TEXT_MODULE_2CHECKOUT_TITLE','2Checkout');
define('TEXT_MODULE_2CHECKOUT_SID','您的 2Checkout 帐户编号');
define('TEXT_MODULE_2CHECKOUT_SID_INFO','输入真实的帐户编号或<a href="https://sandbox.2checkout.com/sandbox" target="_blank">创建沙盒帐户</a><br>在 2checkout 帐户设置中设置头部重定向（您的 URL）<br>设置批准 URL：' . url_for_file('api/ipn.php?module_id=') . '%s' . '<br>这是您的客户在成功购买后被发送到的网址。');
define('TEXT_MODULE_2CHECKOUT_SECRET_WORD','秘密词');
define('TEXT_MODULE_2CHECKOUT_SECRET_WORD_INFO','2CheckOut 的 MD5 哈希工具的秘密词');
