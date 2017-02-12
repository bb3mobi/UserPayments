<?php
/**
*
* @package User Payments System [Russian]
* @copyright BB3.Mobi 2015 (c) Anvar (http://bb3.mobi)
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
	'UCP_PAYMENTS'				=> 'Финансы',
	'UCP_PAYMENTS_TITLE'		=> 'Мои платежи',
	'UCP_PAYMENTS_EXPLAIN'		=> 'Здесь расположен ваш финансовый блок, личные средства внутренней валюты, оплаченные и не оплаченные счета.',
	'UCP_MY_PERSONAL'			=> 'Мой личный счёт',
	'UCP_MY_MONEY'				=> 'На моём счету',
	'UCP_MY_TRANSFER'			=> 'Пополнить счёт',
	'UCP_MY_COMMENT'			=> 'Пополнение своего личного счёта',
	'UCP_MY_INVOICES'			=> 'Мои счета',
	'UCP_TRANSFER'				=> 'Перевод средств',
	'UCP_TRANSFER_CONFIRM'		=> 'Вы действительно хотите перевести %d%s пользователю %s?',
	'UCP_TRANSFER_OKEY'			=> 'Перевод %d%s пользователю %s был успешно осушествлён',
	'UCP_TRANSFER_ERROR_MY'		=> 'Перевод смому себе не возможен',
	'UCP_TRANSFER_TO_USER'		=> 'Перевод пользователю',
	'UCP_INVOICE'				=> 'Выставленные счета',
	'UCP_INVOICE_TITLE'			=> 'Мои платежи, архив',
	'UCP_INVOICE_EXPLAIN'		=> 'Счета которые были сформированы для оплаты. Вы можете оплатить или удалить выставленные счета.',
	'UCP_INVOICE_DELETE'		=> 'Удалить счёт',
	'UCP_INVOICE_DELETE_OK'		=> 'Счёт был успешно удалён',
	'UCP_INVOICE_DELETE_NO'		=> 'Не возможно удалить счёт, возможно он уже оплачен и находится в архиве',
	'UCP_INVOICE_ERROR'			=> 'У вас нет счетов выставленных для оплаты',
	'UCP_INVOICE_PAID'			=> 'Счёт был оплачен',
	'UCP_RETENTION_TITLE'		=> 'Мои переводы',
	'UCP_RETENTION_EXPLAIN'		=> 'Здесь расположены заявки на вывод средств, а также история внутренних и внешних переводов',
	'UCP_RETENTION_HISTORY'		=> 'Расходные операции',
	'UCP_RETENTION_PAID'		=> 'Операция завершена',
	'UCP_RETENTION_WAITING'		=> 'Ожидание действий',
	'UCP_RETENTION_WITHDRAWAL'	=> 'Вывод из системы',
	'UCP_RETENTION_W_CONFIRM'	=> 'Подтвердить получение средств?',
	'UCP_RETENTION_ERROR'		=> 'Ошибка, нет соответствующей записи в базе данных',
	'UCP_RETENTION_GENERATE'	=> 'Сформировать заявку',
	'UCP_RETENTION_CONFIRM'		=> 'Вы действительно хотите создать заявку на вывод %d%s?',
	'UCP_RETENTION_OKEY'		=> 'Заявка успешно создана<br /><br />%sПерейти к моим заявкам%s',
	'UCP_RETENTION_ERROR_MAX'	=> 'Ваш бюджет составляет %s, вы не можете запрашивать к выводу больше указанной суммы',

	'UCP_MINISHOP'				=> 'Мини маркет',
	'UCP_MINISHOP_TITLE'		=> 'Список продуктов',
	'UCP_MINISHOP_EXPLAIN'		=> 'Здесь вы можете приобрести различные возможнсоти, эксклюзивные предложения форума',
	'UCP_MINISHOP_PRICE'		=> 'Цена',
	'UCP_STICKY_TOPIC_ID'		=> 'Укажите id темы которую необходимо закрепить',
	'UCP_STICKY_MINIMUM_DAYS'	=> 'Минимальное время прикрепления темы 1 день',
	'UCP_STICKY_AUTH_FREE'		=> 'Прикрепление данной темы для вас бесплатное!',
	'UCP_USER_GRADIENT'			=> 'Градиентное имя пользователя',
	'UCP_USER_GRADIENT_EXPLAIN'	=> 'Каждая буква будет с плавным переходом цветовых оттенков, если выбраны различные цвета.',
	'UCP_USER_GRADIENT_PLACE'	=> 'Монтировать цвет',
	'UCP_USER_GRADIENT_COLOURS'	=> 'Введите html код цвета',
	'UCP_USER_GRADIENT_PASTE'	=> 'Скопируйте код цвета в первое поле самостоятельно',
	'UCP_USER_GRADIENT_YES'		=> 'Градиент успешно установлен',
	'UCP_USER_USERNAME'			=> 'Изменение имени пользователя',
	'UCP_USER_USERNAME_EXPLAIN'	=> 'Данная сумма будет списана с личного счёта при изменении имени пользователя.',
	'UCP_USER_USERNAME'			=> 'Изменение имени пользователя',
));
