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
	'ACP_PAYMENTS'						=> 'User Payments System',
	'ACP_PAYMENTS_EXPLAIN'				=> 'Система монетизации',
	'ACP_PAYMENTS_TITLE'				=> 'Финансовый блок',
	'ACP_PAYMENTS_SETTINGS'				=> 'Настройки системы',
	'ACP_PAYMENTS_ENABLE'				=> 'Включить систему',
	'ACP_PAYMENTS_CURRENCY'				=> 'Название внутренней валюты',
	'ACP_PAYMENTS_CURRENCY_EXPLAIN'		=> 'Введите сокращённое название валюты или текст ($, руб.)',
	'ACP_PAYMENTS_COMMISSION'			=> 'Комиссия к оплате',
	'ACP_PAYMENTS_COMMISSION_EXPLAIN'	=> 'Сумма оплаты будет высчитана исходя из этой комиссии',
	'ACP_PAYMENTS_MAXIMUM'				=> 'Максимальная сумма платежей',
	'ACP_PAYMENTS_MAXIMUM_EXPLAIN'		=> 'Возможность выставить счёт и зачисление с внешних кошельков не должно превышать указанную здесь сумму. 0 запретит любое движение счетов.',
	'ACP_PAYMENTS_MINIMUM'				=> 'Минимальная сумма для вывода',
	'ACP_PAYMENTS_MINIMUM_EXPLAIN'		=> 'Минимальная сумма которую пользователь может зпросить к выводу на внешний кошелёк. 0 отключает возможность вывода.',
	'ACP_PAYMENTS_SHOP_FORUM'			=> 'Форумы для продажи файлов',
	'ACP_PAYMENTS_MINISHOP'				=> 'Минимаркет форума',
	'ACP_PAYMENTS_GRADIENT'				=> 'Градиент имени пользователя',
	'ACP_PAYMENTS_GRADIENT_EXPLAIN'		=> 'Даёт возможность пользователям установить градиент ника за указанную здесь сумму. 0 отключает возможность заказа градиента.',
	'ACP_PAYMENTS_USERNAME'				=> 'Смена имени пользователя',
	'ACP_PAYMENTS_USERNAME_EXPLAIN'		=> 'Пользователи смогут сменить имя пользователя за указанную здесь сумму. 0 отключает возможность смены имени пользователя если не установлены соответствующие права доступа.',
	'ACP_PAYMENTS_TOPIC_STICKY'			=> 'Прикрепление тем',
	'ACP_PAYMENTS_TOPIC_STICKY_EXPLAIN'	=> 'Пользователи смогут закрепить темы, укажите сумму закрепления темы на сутки. 0 отключит возможность закреплять темы если не установлены соответствующие права доступа',
	'ACP_PAYMENTS_REGISTRATION'			=> 'Регистрация пользователей',
	'ACP_PAYMENTS_REGISTRATION_EXPLAIN'	=> 'Пользователь должен будет оплатить счёт на указанную сумму для активации учётной записи.<br />Работает только если настроена активация учётных записей "Администратором"',
	'ACP_PAYMENTS_PERSONAL'				=> 'Личный счёт пользователей',
	'ACP_PAYMENTS_DONATE'				=> 'Поддержи проект, скажи спасибо',
	'ACP_PAYMENTS_DONATE_ENABLE'		=> 'Включить блок поддержки',
	'ACP_PAYMENTS_DONATE_EXPLAIN'		=> 'Вы можете включить возможность поддержать материально проект пользователями.',
	'ACP_PAYMENTS_DONATE_TEXT'			=> 'Описание, призыв к оплате',
	'ACP_PAYMENTS_DONATE_TEXT_EXPLAIN'	=> 'Используйте bbcode для форматирования',
	'PAYMENTS_DONATE_ENABLE'	=> array(
		0	=> 'Отключён',
		1	=> 'Включён',
		2	=> 'Без списка',
	),
	'ACP_PAYMENTS_WEBMONEY'					=> 'Подключение webmoney',
	'ACP_PAYMENTS_WEBMONEY_EXPLAIN'			=> 'Здесь вы можете подключить систему webmoney для оплаты всех выставленных счетов',
	'ACP_PAYMENTS_WEBMONEY_ENABLE'			=> 'Включить платежи webmoney',
	'ACP_PAYMENTS_WEBMONEY_PURSE'			=> 'Ваш кошелёк для зачислений',
	'ACP_PAYMENTS_WEBMONEY_PURSE_EXPLAIN'	=> 'Кошелёк должен начинасться с буквенного обозначения, напимер R1234567890123',
	'ACP_PAYMENTS_WEBMONEY_WMID'			=> 'Ваш идентификатор webmoney, WMID',
	'ACP_PAYMENTS_WEBMONEY_SECRET_KEY'		=> 'Ваш секретный ключ',
	'ACP_PAYMENTS_WEBMONEY_RESULT_URL'		=> 'Result URL',
	'ACP_PAYMENTS_WEBMONEY_RESULT_EXPLAIN'	=> 'Эту ссылку нужно указать в настройках webmoney<br />Рекомендую предварительно изменить её путь в файле <strong>UserPayments/config/routing.yml</strong> в целях безопасности и ни кому не сообщать о ней.',
	'ACP_PAYMENTS_WEBMONEY_SUCCESS_URL'		=> 'Succes URL',
	'ACP_PAYMENTS_WEBMONEY_SUCCESS_EXPLAIN'	=> 'Страница на которую пользователь попадёт после успешной оплаты. Эту ссылку нужно указать в настройках webmoney',
	'ACP_PAYMENTS_WEBMONEY_FAIL_URL'		=> 'Fail URL',
	'ACP_PAYMENTS_WEBMONEY_FAIL_EXPLAIN'	=> 'Страница на которую пользователь попадёт при возникновении ошибки. Эту ссылку нужно указать в настройках webmoney',

	'ACP_PAYMENTS_YANDEX'					=> 'Подключение Яндекс',
	'ACP_PAYMENTS_YANDEX_EXPLAIN'			=> 'Здесь вы можете подключить систему Яндекс Деньги для оплаты всех выставленных счетов',
	'ACP_PAYMENTS_YANDEX_ENABLE'			=> 'Включить платежи Яндекс',
	'ACP_PAYMENTS_YANDEX_PURSE'				=> 'Ваш кошелёк для зачислений',
	'ACP_PAYMENTS_YANDEX_PURSE_EXPLAIN'		=> 'Укажите Ваш номер кошелька Яндекс денег',
	'ACP_PAYMENTS_YANDEX_SECRET_KEY'		=> 'Ваш секретный ключ',
	'ACP_PAYMENTS_YANDEX_RESULT_URL'		=> 'Result URL',
	'ACP_PAYMENTS_YANDEX_RESULT_EXPLAIN'	=> 'Эту ссылку нужно указать в настройках <a href="https://money.yandex.ru/myservices/online.xml">yandex</a>',

	'ACP_PAYMENTS_INTERKASSA'				=> 'Подключение interkassa',
	'ACP_PAYMENTS_INTERKASSA_EXPLAIN'		=> 'Здесь вы можете подключить систему interkassa для оплаты всех выставленных счетов',
	'ACP_PAYMENTS_INTERKASSA_ENABLE'		=> 'Включить платежи interkassa',
	'ACP_PAYMENTS_INTERKASSA_ID'			=> 'Ваш идентификатор',
	'ACP_PAYMENTS_INTERKASSA_ID_EXPLAIN'	=> 'Введите ваш id магазина в системе interkassa',
	'ACP_PAYMENTS_INTERKASSA_SECRET_KEY'	=> 'Ваш секретный ключ',
	'ACP_PAYMENTS_INTERKASSA_RESULT_URL'	=> 'Result URL',
	'ACP_PAYMENTS_INTERKASSA_RESULT_EXPLAIN'	=> 'Эту ссылку нужно указать в настройках interkassa<br />Возможно предварительно изменить её путь в файле <strong>UserPayments/config/routing.yml</strong> и в целях безопасности ни кому не сообщать о ней.',
	'ACP_PAYMENTS_INTERKASSA_SUCCESS_URL'		=> 'Succes URL',
	'ACP_PAYMENTS_INTERKASSA_SUCCESS_EXPLAIN'	=> 'Страница на которую пользователь попадёт после успешной оплаты. Эту ссылку нужно указать в настройках interkassa',
	'ACP_PAYMENTS_INTERKASSA_FAIL_URL'		=> 'Fail URL',
	'ACP_PAYMENTS_INTERKASSA_FAIL_EXPLAIN'	=> 'Страница на которую пользователь попадёт при возникновении ошибки. Эту ссылку нужно указать в настройках interkassa',

	/** Локализация способов оплаты */
	'ACP_PAYMENTS_METHOD'				=> 'Другие способы оплаты',
	'ACP_PAYMENTS_METHOD_TITLE'			=> 'Управление способами оплаты',
	'ACP_PAYMENTS_METHOD_EXPLAIN'		=> 'Здесь вы можете добавить дополнительный способ и описание для не автоматизированной оплаты',
	'ACP_PAYMENTS_METHOD_ALL'			=> 'Список созданный ранее',
	'ACP_PAYMENTS_METHOD_NO'			=> 'Не создано ни одного шаблона для возможности оплаты!',
	'ACP_PAYMENTS_METHOD_NEW'			=> 'Добавить новый способ',
	'ACP_PAYMENTS_METHOD_IMAGE'			=> 'Изображение, логотип',
	'ACP_PAYMENTS_METHOD_IMAGE_EXPLAIN'	=> 'Название файлов не должны содержать пробелов, специальных символов и кириллицы.<br />Путь для загрузки изображений',
	'ACP_PAYMENTS_METHOD_NAME'			=> 'Назначение платежа',
	'ACP_PAYMENTS_METHOD_NAME_ERROR'	=> 'Похожее название уже существует',
	'ACP_PAYMENTS_METHOD_DESC'			=> 'Описание возможности оплаты',
	'ACP_PAYMENTS_METHOD_DESC_EXPLAIN'	=> 'Вы можете указать способ оплаты самостоятельным переводом, например банковский.<br />Можно использовать лексемы {TRANSFER_ID} для автоматического подставления выставленного счёта, а также {TRANSFER_DESC} для указания комментария и {TRANSFER_DATE} для даты выставленного счёта.',
	'ACP_PAYMENTS_METHOD_EDIT'			=> 'Редактирование способа оплаты',
	'ACP_PAYMENTS_METHOD_ADD'			=> 'Добавить способ оплаты',
	'ACP_PAYMENTS_METHOD_ADD_EXPLAIN'	=> 'Для идентификации платежей поступающих от пользователей в будущем, есть возможность задать необходимые лексемы. Возможно будет лучше если пользователь в комментариях к платежу будет указывать именно эти данные.',
	'ACP_PAYMENTS_METHOD_ADDED'			=> 'Способ оплаты успешно добавлен',
	'ACP_PAYMENTS_METHOD_REMOVED'		=> 'Способ оплаты успешно удалён',
	'ACP_PAYMENTS_METHOD_UPDATED'		=> 'Способ оплаты успешно обновлён',
	'ACP_PAYMENTS_METHOD_ERROR'			=> 'Одно или несколько значений не заполнены',
	'ACP_PAYMENTS_METHOD_ERROR_ID'		=> 'Не найден способ оплаты в базе данных',
	'LOG_PAYMENTS_METHOD_ADDED'			=> '<strong>Добавлен способ оплаты</strong><br />» %s',
	'LOG_PAYMENTS_METHOD_REMOVED'		=> '<strong>Удалён способ оплаты</strong><br />» %s',
	'LOG_PAYMENTS_METHOD_UPDATED'		=> '<strong>Обновлён способ оплаты</strong><br />» %s',

	'ACP_REQUESTS_TITLE'				=> 'Регистрация финансов',
	'ACP_REQUESTS_TITLE_EXPLAIN'		=> 'Здесь находятся все счета которые требуют определённых действий администратора или пользователей.',
	'ACP_PAYMENTS_INVOICE'				=> 'Выставленные счета',
	'ACP_PAYMENTS_INVOICE_WAITING'		=> 'Ожидает оплаты',
	'ACP_PAYMENTS_INVOICE_CONFIRM'		=> 'Подтвердить факт оплаты?',
	'ACP_PAYMENTS_INVOICE_PAID'			=> 'Уже оплатили',
	'ACP_PAYMENTS_INVOICE_DELETE'		=> 'Не оплаченные счета не смогут быть оплачены, а оплаченные не будут доступны в архиве.<br />Вы действительно хотите удалить выставленный счёт?',
	'ACP_PAYMENTS_INVOICE_DELETED'		=> 'Всё, удалили, проблемы ваши - деньги наши!',
	'ACP_PAYMENTS_RETENTION'			=> 'Заявки на перевод',
	'ACP_PAYMENTS_WITHDRAWAL'			=> 'Заявка на вывод',
	'ACP_PAYMENTS_WITHDRAWAL_WAITING'	=> 'Ожидает действия',
	'ACP_PAYMENTS_WITHDRAWAL_CONFIRM'	=> 'Подтвердить факт перевода?',
	'ACP_PAYMENTS_WITHDRAWAL_PAID'		=> 'Операция завершена',
	'ACP_PAYMENTS_WITHDRAWAL_ERROR'		=> 'Ошибка, нет соответствующей записи в базе данных',
	'ACP_PAYMENTS_WITHDRAWAL_DELETE'	=> 'Если перевод "Ожидает действий", то средства будут возвращены на личный счёт пользователя!<br /><br />Вы действительно хотите удалить из истории заявку на перевод?',
	'ACP_PAYMENTS_WITHDRAWAL_DELETED'	=> 'Заявка успешно удалена',
	'ACP_TRANSFER_TO_USER'				=> 'Перевод пользователю',

	'ACP_BUDGET_TOPICS'					=> 'Бюджет тем',
	'ACP_BUDGET_OPTIONS'				=> 'Метод использования',
	'ACP_BUDGET_DESCRIPTION'			=> 'Описание бюджета тем',
	'ACP_BUDGET_DESCRIPTION_EXPLAIN'	=> 'Здесь вы можете задать описание бюджета, показываемый пользователям в темах данного форума',
	'BUDGET_OPTIONS'	=> array(
		0	=> 'Не использовать перевод пользователям за сообщения',
		1	=> 'Включить перечисление пользователям за сообщения',
		2	=> 'Не указывать перечисления в бюджете темы',
	),

	/** Локализация рекламного расширения */
	'ACP_PAYMENTS_ADS'				=> 'Включить покупку рекламы',
	'ACP_PAYMENTS_ADS_EXPLAIN'		=> 'Пользователи смогут покупать рекламу в различных частях форума.',
	'ACP_PAYMENTS_ADS_CAT'			=> 'Реклама на форуме',
	'ACP_PAYMENTS_ADS_CAT_TITLE'	=> 'Области показа и заказа рекламы',
	'ACP_PAYMENTS_ADS_ADD_EXPLAIN'	=> 'Добавить область для заказа рекламы',
	'ACP_PAYMENTS_ADS_NAME'			=> 'Название рекламного блока',
	'ACP_PAYMENTS_ADS_DESC'			=> 'Краткое описание',
	'ACP_PAYMENTS_ADS_ADD'			=> 'Создать область',
	'ACP_PAYMENTS_ADS_ADDED'		=> 'Новая область успешно добавлена',
	'ACP_PAYMENTS_ADS_UPDATED'		=> 'Область успешно изменена',
	'ACP_PAYMENTS_ADS_NO'			=> 'Не создано ни одной области',
	'ACP_PAYMENTS_CAT_SUM'			=> 'Стоимость размещения',
	'ACP_PAYMENTS_CAT_LIMIT'		=> 'Лимит рекламных блоков',
	'ACP_PAYMENTS_CAT_POSITION'		=> 'Позиция размещения',
	'ACP_PAYMENTS_CAT_POS_EXPLAIN'	=> 'Позиция условие которой следует указать в выбраном вами шаблоне события. Только латиница!',
	'ACP_PAYMENTS_CAT_ADS_PAGE'		=> 'Страница отображения',
	'ACP_PAYMENTS_CAT_PAGE_EXPLAIN'	=> 'Например: viewforum, index, viewtopic. Оставьте пустым для вывода на всех страницах',
	'ACP_PAYMENTS_CAT_FORUM'		=> 'Форум для объявлений',
	'ACP_PAYMENTS_CAT_NO_FORUM'		=> 'Без создания тем',
	'ACP_PAYMENTS_CAT_FORUM_EXPLAIN'	=> 'В указаном форуме будут создаваться темы с объявлением, ссылка на который будет отображена в блоке. Если не выбрано, значит реклама будет направлять на внешнюю ссылку.',
	'ACP_PAYMENTS_CAT_ERROR_ID'		=> 'Ошибка! Выбраная категория области показа рекламы несуществует.',

	'LOG_PAYMENTS_ADS_ADDED'		=> '<strong>Добавлена новая область показа рекламы</strong><br />» %s',
	'LOG_PAYMENTS_ADS_REMOVED'		=> '<strong>Удалена область отображения рекламы</strong><br />» %s',
	'LOG_PAYMENTS_ADS_UPDATED'		=> '<strong>Обновлена рекламная область</strong><br />» %s',
));
