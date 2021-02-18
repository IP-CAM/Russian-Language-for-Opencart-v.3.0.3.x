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
$currency_data = [
	'title' =>  'Рубль',
	'code'  =>  'RUB',
	'value' =>  1,
	'symbol_left'   =>  '',
	'symbol_right'  =>  'руб',
	'decimal_place' =>  2,
	'status'    =>  0,
];

$this->load->model('localisation/language');
$language = $this->model_localisation_language->getLanguageByCode('ru-ru');
if (empty($language['name'])) {
	$this->model_localisation_language->addLanguage($languageData);
}
$this->load->model('localisation/currency');
$currency = $this->model_localisation_currency->getCurrencyByCode($currency_data['code']);
if (empty($currency['title'])) {
	$this->model_localisation_currency->addCurrency($currency_data);
}
// jd todo додати автоматичне оновлення валют після оновлення composera

