<?php
/**
*
* @package User Payments System [Russian]
* @copyright BB3.Mobi 2015 (c) Anvar Stybaev
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'PAYMENT_SERVICE'		=> 'Платёжный сервис',
	'PAYMENT_METHODS'		=> 'Cпособы оплаты',
	'PAYMENT_EXTERNAL'		=> 'Оплатить через',
	'PAYMENT_INTERNAL'		=> 'Внутренний счёт',
	'PAYMENT_BUTTON'		=> 'Оплатить',
	'PAYMENT_DISABLE'		=> 'Система отключена администратором',
	'PAYMENT_WEBMONEY'		=> 'Webmoney',
	'PAYMENT_YANDEX'		=> 'Яндекс',
	'PAYMENT_YANDEX_PURSE'	=> 'Яндекс Деньги',
	'PAYMENT_BANK_CARD'		=> 'Банковская Карта',
	'PAYMENT_INTERKASSA'	=> 'Interkassa',
	'PAYMENT_PURSE_ERROR'	=> 'Не верный кошелёк получателя',
	'PAYMENT_BODY'			=> 'Уже произвели оплату или обнаружили ошибку?',
	'PAYMENT_BODY_EXPLAIN'	=> 'Сообщение будет отправлено в виде простого текста, не включайте в него HTML или BBCode.<br />Пожалуйста укажите способ произведённой оплаты, кошелёк и тд., для того чтобы мы могли идентифицировать платёж.',
	'PAYMENTS_USERS'		=> 'Платежи пользователей',
	'PAYMENTS_USERS_TO_UCP'	=> '%sПерейти к спику счетов%s',
	'BUTTON_TO_PAYMENT'		=> 'Перейти к оплате',
	'INVOICE_PAYMENT'		=> 'Оплата выставленного счёта',
	'INVOICE_SUM'			=> 'К оплате',
	'INVOICE_SUM_ERROR'		=> 'Не верная сумма',
	'INVOICE_SUM_ERROR_MAX'	=> 'Размер суммы не должен превышать %s',
	'INVOICE_SUM_ERROR_MIN'	=> 'Минимальная сумма %s',
	'INVOICE_ID'			=> 'Счёт № %d',
	'INVOICE_PAID'			=> 'Счёт успешно оплачен',
	'INVOICE_PAID_SUM'		=> 'Счёт № %d успешно оплачен',
	'INVOICE_ERROR'			=> 'Не выбран счёт или он уже оплачен',
	'INVOICE_ERROR_SUM'		=> 'Счёт № %d не был оплачен',
	'EXPENSE_GENERATE'		=> 'Сформировать счёт',
	'EXPENSE_SUM'			=> 'Сумма',
	'EXPENSE_COMMENT'		=> 'Комментарий',
	'EXPENSE_COMMENT_NO'	=> 'Комментарий не указан',
	'EXPENSE_TO_PAY'		=> 'Счёт успешно выписан, %sПерейти к оплате%s',
	'SUM_TO_NULL'			=> 'Сумма должна быть положительной и отличаться от 0',
	'USER_MONEY_ERROR'		=> 'Не достаточно средств на вашем личном счёте',
	'USER_MONEY_EXPLAIN'	=> 'Суммы на вышем счёте хватает только на %d%s',
	'SUM_ACTIVATE'			=> 'Стоимость активации',
	'SUM_ACTIVATE_EXPLAIN'	=> 'После регистрации Вам будет выставлен счёт для оплаты на указанную сумму для активации учётной записи.',
	'STICKY_FOR_TOPICS'		=> 'Закрепление вашей темы',
	'STICKY_FOR_EXPLAIN'	=> 'С вашего счёта будет списано по %d%s за каждые сутки закрепления темы.',
	'STICKY_FOR_YES'		=> array(
		0	=> 'Добавлено закрпление темы на 0 дней',
		1	=> 'Добавлено закрпление темы на %d день',
		2	=> 'Добавлено закрпление темы на %d дня',
		3	=> 'Добавлено закрпление темы на %d дней',
	),
	'REG_USER_ACTIVATION'	=> 'Активация учётной записи пользователя ',

	'LOG_INVOICE_PAID_NEW'	=> '<strong>Начат процесс оплаты</strong> <em>счёт %d</em> на сумму %s отмечен как оплачен<br />',
	'LOG_INVOICE_PAID_USER'	=> '<strong>Пользователь завершил оплату</strong> <em>счёт %d</em> на сумму %s<br />',
	'LOG_INVOICE_ERROR'		=> '<strong>Возникла ошибка при оплате</strong> <em>счёт %d</em> на сумму %s не был оплачен!<br />',
	'LOG_INVOICE_ERROR_BD'	=> '<strong>Не предвиденная ошибка оплаты</strong> <em>счёт %d оплачен</em>, но тип %s не сработал. Нет соответствующей записи в базе. Возможно стоит пополнить счёт пользователю на указанную сумму или вернуть средства.<br />',
	'LOG_USER_TOPIC_STICKY'	=> '<strong>Закрепление темы</strong> id <em>%d</em> на сумму <em>%s</em>',
	'LOG_USER_GRADIENT'		=> '<strong>Установлен градиент имени пользователя</strong> цвета: <em>%1$s</em> на сумму <em>%2$s</em>',

	'BUDGET_TOPIC'			=> 'Бюджет темы',
	'BUDGET_ADD'			=> 'Увеличить бюджет темы',
	'BUDGET_COMMENT'		=> 'Увеличение бюджета темы id %d',
	'BUDGET_USERS'			=> 'Пользователь',
	'BUDGET_DATA'			=> 'Дата оплаты',
	'BUDGET_COMMENTS'		=> 'Комментарий',
	'BUDGET_TOPIC_POST'		=> 'Перевод пользователю',
	'BUDGET_ADD_POST'		=> 'Оплатить сообщение',
	'BUDGET_COMMENT_POST'	=> 'Оплата пользователю за сообщение id %d',

	'DONATE_USERS'			=> 'Поддержали наш проект',
	'DONATE_ADD'			=> 'Поддержать проект',
	'DONATE_SUBJECT'		=> 'Поддержи проект, скажи спасибо!',
	'DONATE_COMMENT'		=> 'Спасибо вашему форуму за поддержку!',

	'ADS_ADD'			=> 'Заказать рекламу',
	'ADS_ADD_EXPLAIN'	=> 'Здесь вы сможете купить рекламу на данном форуме',
	'ADS_ADD_DISABLED'	=> 'В настоящий момент рекламная сеть отключена!',
	'ADS_ADD_CONFIRM'	=> '<b>Название и ссылка:</b> %3s<br /><b>Cтоимость:</b> %2s до %1s<p>Сформировать счёт для оплаты?</p>',
	'ADS_ADD_YES'		=> 'Оплата рекламного места для %2s до %1s',
	'ADS_ADD_ENABLE'	=> 'Место свободно',
	'ADS_OPTION'		=> 'Область размещения рекламы',
	'ADS_OPTION_ERROR'	=> 'Выберите область со свободными местами',
	'ADS_URL_EXPLAIN'	=> 'URL адрес сайта необходимо указывать полностью, начиная с протокола http:// или https://',
	'ADS_URL_ERROR'		=> 'Не верный формат URL',
	'ADS_NAME'			=> 'Название объявления',
	'ADS_NAME_EXPLAIN'	=> 'Название объявления должно быть от %d до %d символов',
	'ADS_NAME_ERROR'	=> 'Слишком короткое название',
	'ADS_NAME_ERROR2'	=> 'Слишком длинное название',
	'ADS_TEXT'			=> 'Описание объявления',
	'ADS_TEXT_EXPLAIN'	=> 'Краткое описание вашего объявления, текст от %d до %d символов. html и bbcode не поддерживаются!',
	'ADS_TEXT_ERROR'	=> 'Слишком короткое описание',
	'ADS_TEXT_ERROR2'	=> 'Слишком длинное описание',
	'ADS_DAYS_SUM'		=> 'Стоимость за 1 день',
	'ADS_DAYS_EXPLAIN'	=> 'Количество дней для заказа от %d до %d',
	'ADS_DAYS_ERROR'	=> 'Не верное количество дней для заказа',
	'ADS_LIMIT'			=> 'Всего мест',
	'ADS_LIMIT_YES'		=> 'Свободно мест',
	'ADS_LIMIT_ERROR'	=> 'В данный момент все места свободные заняты',
	'ADS_ADD_RULES'		=> 'Соглашение',
	'ADS_ADD_RULES2'	=> '1. Запрещается реклама сайтов порнографического характера, лохотронов и нарушающих законы стран ЕАС<br />
	2. Запрещается добавлять ссылки на прямую закачку файлов, на страницы содержащие вредоносное ПО.<br />
	3. В названии и описании сайта запрещена не нормативная лексика, беспорядочный и не читаемый набор символов.<br />
	Такие сайты будут заблокированы администратором, а оплаченые средства не будут возвращены!',

	'ADS_TOP_ALL'					=> 'Верх всех страниц',
	'ADS_TOP_ALL_EXPLAIN'			=> 'Реклама будет отображаться cверху всех страниц',
	'ADS_BOTTOM_ALL'				=> 'Низ всех страниц',
	'ADS_BOTTOM_ALL_EXPLAIN'		=> 'Реклама будет отображаться cнизу всех страниц',
	'ADS_TOP_INDEX'					=> 'Верх главной форума',
	'ADS_TOP_INDEX_EXPLAIN'			=> 'Реклама будет отображаться cверху и только на главной странице',
	'ADS_BOTTOM_INDEX'				=> 'Низ на главной форума',
	'ADS_BOTTOM_INDEX_EXPLAIN'		=> 'Реклама будет отображаться снизу только на главной странице',
	'ADS_TOP_NO_INDEX'				=> 'Верх всех страниц кроме главной',
	'ADS_TOP_NO_INDEX_EXPLAIN'		=> 'Реклама будет отображаться сверху на всех страницах кроме главной',
	'ADS_BOTTOM_NO_INDEX'			=> 'Низ всех страниц кроме главной',
	'ADS_BOTTOM_NO_INDEX_EXPLAIN'	=> 'Реклама будет отображаться снизу на всех страницах кроме главной',

	'ADS_SITES'			=> 'Рекламный список',
	'ADS_SITES_EXPLAIN'	=> 'Здесь собраны все рекламные материалы, активные и завершённые',
	'ADS_SITES_NULL'	=> 'Ещё пока небыло заказов, либо для вас ограничен просмотр',
	'ADS_TIME'			=> 'Время завершения',
	'ADS_DELTE'			=> 'Вы действительно хотите удалить <strong>%2s</strong> опубликованого до <strong>%1s</strong>',
	'ADS_DELTED'		=> 'Объявление успешно удалено из базы данных',
	'ADS_DISALLOW'		=> 'Запретить показ',
	'ADS_DISABLE'		=> 'Вы действительно хотите отключить <strong>%2s</strong> опубликованого до <strong>%1s</strong>',
	'ADS_ERROR'			=> 'Обяъвление не найдено в базе данных!',

	'POST_SHOP_PRICE'				=> 'Стоимость',
	'POST_SHOP_TO_PAYMENT'			=> 'Купить за',
	'POST_SHOP_COMMENT'				=> 'Покупка скрытых возможностей сообщения(скачивание файлов и просмотр информации hide)',
	'POST_SHOP_DISABLE'				=> 'Содержимое не доступно для скачивания и просмотра',
	'POST_SHOP_ENABLE_ATT'			=> 'Вы можете скачивать это вложение',
	'POST_SHOP_DISCOUNT'			=> 'Скидка',
	'POST_SHOP_DISCOUNT_EXPLAIN'	=> 'Если вы укажете имя пользователя, то ему будет предоставлена скидка.<br />Если указать адрес email, то будет отправлено письмо содержащее код дискаунт, который можно будет ввести после авторизации.',
	'POST_SHOP_DISCOUNT_SETTINGS'	=> 'Управление скидками',
	'POST_SHOP_DISCOUNT_CODE'		=> 'Код дискаунт',
	'POST_SHOP_DISCOUNT_CODE_ERROR'	=> 'Дисконтный код не найден в базе данных',
	'POST_SHOP_DISCOUNT_ACTIVATE'	=> 'Дискаунт активирован, ваша скидка %d',
	'POST_SHOP_DISCOUNT_TO_EMAIL'	=> 'Дискаунт отправлен на указанный адрес email',
	'POST_SHOP_DISCOUNT_TO_USER'	=> 'Дискаунт отправлен пользователю на адрес email',
	'POST_SHOP_DISCOUNT_USER_BD'	=> 'Данный дискаунт уже есть в базе',
	'POST_SHOP_DISCOUNT_USER_ERROR'	=> 'Необходимо указать имя пользователя или email получателя скидочного кода, но только не свои данные.',
));
