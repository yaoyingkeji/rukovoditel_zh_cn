<?php

define('TEXT_MODULE_PAYANYWAY_TITLE','PayAnyWay');
define('TEXT_MODULE_PAYANYWAY_ID','标识');
define('TEXT_MODULE_PAYANYWAY_ID_INFO','MONETA.RU系统中商户的标识符<br>通知URL (Pay URL): ' . url_for_file('api/ipn.php?module_id=') . '%s');
define('TEXT_MODULE_PAYANYWAY_CODE_ID','数据完整性检验码');
define('TEXT_MODULE_PAYANYWAY_CODE_ID_INFO','商户在配置帐户时设置的代码.');
define('TEXT_MODULE_PAYANYWAY_PAYMENT_COMPLATED','已收到款项');