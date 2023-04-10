<?php
$data = array(
//零值
		'nul' => '零',
		//1-9
		'ten' =>
		array(
				array('','一', '二', '三', '四', '五', '六', '七', '八', '九'),
				array('','一', '二', '三', '四', '五', '六', '七', '八', '九'),
		),
		//10-19
		'a20' =>
		array('十', '十一', '十二', '十三', '十四', '十五', '十六', '十七', '十八', '十九'),
		//20-90
		'tens' =>
		array(2=>'二十', '三十', '四十', '五十', '六十', '七十', '八十', '九十'),
		//100-900
		'hundred' =>
		array('','一百', '二百', '三百', '四百', '五百', '六百', '七百', '八百', '九百'),
		//单位
		'unit' =>
		array( // Units
				array('分', '分', '分',	 1),
				array('元'   ,'元'   ,'元'    ,0),
				array('千', '千', '千'     ,1),
				array('万' ,'万','万' ,0),
				array('亿', '亿', '亿',0),
		)
);

