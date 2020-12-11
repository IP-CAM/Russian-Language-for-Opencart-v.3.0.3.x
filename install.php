<?php
/*
 * Заготовка, сирий код
 * jd todo Два випадки інсталяції 1-й на ще не встановлений сайт (немає БД), 2-й - коли вже є БД, і можна активувати
 */

$languageData = [
	'name'  =>  "Русский",
	'code'  =>  "ru-ru",
	'locale'    =>  'ru_RU.UTF-8,ru_RU,russian',
	'sort_order'    =>  0,
	'status'    =>  1,
];

$this->load->model('localisation/language');
$language = $this->model_localisation_language->getLanguageByCode('ru-ru');
if (empty($language['name'])) {
	$this->model_localisation_language->addLanguage($languageData);
}

