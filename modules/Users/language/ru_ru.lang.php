<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
* SugarCRM Community Edition is a customer relationship management program developed by
* SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
*
* This program is free software; you can redistribute it and/or modify it under
* the terms of the GNU Affero General Public License version 3 as published by the
* Free Software Foundation with the addition of the following permission added
* to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
* IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
* OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
*
* This program is distributed in the hope that it will be useful, but WITHOUT
* ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
* FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
* details.
*
* You should have received a copy of the GNU Affero General Public License along with
* this program; if not, see http://www.gnu.org/licenses or write to the Free
* Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
* 02110-1301 USA.
*
* You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
* SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
*
* The interactive user interfaces in modified source and object code versions
* of this program must display Appropriate Legal Notices, as required under
* Section 5 of the GNU Affero General Public License version 3.
*
* In accordance with Section 7(b) of the GNU Affero General Public License version 3,
* these Appropriate Legal Notices must retain the display of the "Powered by
* SugarCRM" logo. If the display of the logo is not reasonably feasible for
* technical reasons, the Appropriate Legal Notices must display the words
* "Powered by SugarCRM".
     // Replaced by RAPIRA -->
 ********************************************************************************/
  /*********************************************************************************
  *
  * This file was generated by the RAPIRA Translation Suite ----------
  *
  ***********************************************************************likhobory*/

  /*********************************************************************************
  * Description : Defines the Russian language pack for the base application.
  * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights Reserved.
  * Contributor(s):
  *********************************************************************************/
 // Replaced by RAPIRA <--
$mod_strings = array (
'LBL_DELETE_USER_CONFIRM'           => 'When the User record is deleted, the corresponding Employee record will also be deleted. After the user is deleted, any workflow definitions and reports involving the user might need to be updated.<br/><br/>'.
'Deleting a User record cannot be undone.',
'LBL_DELETE_GROUP_CONFIRM'          => 'Вы действительно хотите удалить данного группового пользователя? Нажмите на кнопку <b>ОК</b> для удаления  пользователя из системы<br/>После удаления у вас будет возможность переназначить ответственных для записей, принадлежащих удалённому групповому пользователю.',
'LBL_DELETE_PORTAL_CONFIRM'         => 'Are you sure you want to delete this Portal API User? Click OK to delete the User record.', ///
'Click OK to delete the User record.',

'LNK_IMPORT_USERS'                 => 'Импорт пользователей',
'ERR_DELETE_RECORD'=> 'Перед удалением профиля должен быть указан номер записи.' ,
'ERR_EMAIL_INCORRECT'=> 'Укажите E-mail, чтобы создать и отправить пароль.',
'ERR_EMAIL_NO_OPTS'=> 'Не удалось подобрать оптимальные настройки для входящей почты.' ,
'ERR_ENTER_CONFIRMATION_PASSWORD'=> 'Пожалуйста, введите подтверждение пароля.' ,
'ERR_ENTER_NEW_PASSWORD'=> 'Пожалуйста, введите Ваш новый пароль.' ,
'ERR_ENTER_OLD_PASSWORD'=> 'Пожалуйста, введите Ваш текущий пароль.' ,
'ERR_IE_FAILURE1'=> '[Вернуться]' ,
'ERR_IE_FAILURE2'=> 'Не удалось соединиться с учётной записью электронной почты. Пожалуйста, проверьте ваши настройки и попробуйте ещё раз.' ,
'ERR_IE_MISSING_REQUIRED'=> "В настройках входящей электронной почты отсутствует необходимая информация.\n  Пожалуйста, проверьте ваши настройки и попробуйте ещё раз.\n\nЕсли вы не настроили входящую почту - очистите все поля.",
'ERR_INVALID_PASSWORD'=> 'Вы должны указать правильные логин и пароль.' ,
'ERR_NO_LOGIN_MOBILE'=> 'Перед тем как использовать мобильную версию, вы должны первый раз войти в систему, используя обычный веб-браузер или же воспользоваться обычным режимом. Пожалуйста, используйте полноценный веб-браузер или нажмите на ссылку ниже для перехода в обычный режим. Приносим свои извинения за доставленные неудобства.',
'ERR_LAST_ADMIN_1'=> 'Имя пользователя \\\"' ,
'ERR_LAST_ADMIN_2'=> '\" последний пользователь с правами администратора.  По меньшей мере один пользователь должен быть администратором.' ,
'ERR_PASSWORD_CHANGE_FAILED_1'=> 'Изменение пароля пользователя прошло неудачно для ' ,
'ERR_PASSWORD_CHANGE_FAILED_2'=> ' неудачно.  Должен быть установлен новый пароль.' ,
'ERR_PASSWORD_CHANGE_FAILED_3'		=> '. Неверный новый пароль.',
'ERR_PASSWORD_INCORRECT_OLD_1'=> 'Неверный текущий пароль' ,
'ERR_PASSWORD_INCORRECT_OLD_2'=> '. Повторите ввод паролей' ,
'ERR_PASSWORD_MISMATCH'=> 'Пароли не совпадают' ,
'ERR_PASSWORD_USERNAME_MISSMATCH'   => 'Вы должны указать правильные имя пользователя и E-mail',
'ERR_PASSWORD_LINK_EXPIRED'         => 'Ваша ссылка устарела, пожалуйста, создайте новую',
'ERR_REENTER_PASSWORDS'=> 'Новый пароль и подтверждение пароля не совпадают.' ,
'ERR_REPORT_LOOP'=> 'Пользователь не может отчитываться ни перед самим собой, ни перед кем из менеджеров.' ,
'ERR_RULES_NOT_MET'                 => 'Введённый вами пароль не отвечает требованиям, предъявляемым при его создании. Попробуйте ввести другой пароль.',
'ERR_USER_INFO_NOT_FOUND'=> 'Пользовательская информация не обнаружена',
'ERR_USER_NAME_EXISTS_1'=> 'Имя пользователя ' ,
'ERR_USER_NAME_EXISTS_2'=> ' уже существует. Дублирование имён пользователей не допускается. Измените имя пользователя на уникальное.' ,
'ERR_USER_IS_LOCKED_OUT'=> 'Данный пользователь заблокирован и не может войти в систему, используя существующий пароль.',

'LBL_PASSWORD_SENT'                => 'Обновление пароля',
'LBL_CANNOT_SEND_PASSWORD'         => 'Ошибка отправки пароля',
'ERR_EMAIL_NOT_SENT_ADMIN'=> 'Система не в состоянии выполнить ваш запрос. Пожалуйста, проверьте:',
'ERR_SMTP_URL_SMTP_PORT'=> 'Адрес и порт SMTP-сервера
',
'ERR_SMTP_USERNAME_SMTP_PASSWORD'=> 'Имя пользователя и пароль (SMTP)
',
'ERR_RECIPIENT_EMAIL'=> 'E-mail получателя
',
'ERR_SERVER_STATUS'=> 'Состояние вашего сервера',
'ERR_SERVER_SMTP_EMPTY'=> 'Система не в состоянии отправить письмо пользователю.  Проверьте параметры сервера исходящей почты в <a href="index.php?module=EmailMan&action=config">Настройках E-mail</a>.',

'LBL_ADDRESS_CITY'=> 'Адрес - город:' ,
'LBL_ADDRESS_COUNTRY'=> 'Адрес - страна:' ,
'LBL_ADDRESS_INFORMATION'=> 'Адресная информация' ,
'LBL_ADDRESS_POSTALCODE'=> 'Адрес - почтовый индекс:' ,
'LBL_ADDRESS_STATE'=> 'Адрес - область:' ,
'LBL_ADDRESS_STREET'=> 'Адрес - улица:' ,
'LBL_ADDRESS'=> 'Адрес' ,
'LBL_ADMIN_USER'=> 'Администратор',


'LBL_ADMIN_DESC'=> 'Пользователь имеет доступ к панели администрирования.',
'LBL_REGULAR_DESC'=> 'Пользователь имеет основанный на ролях доступ к модулям и записям.',



'LBL_ADMIN'=> 'Администратор' ,
'LBL_ADVANCED'                     => 'Дополнительно',
'LBL_ANY_ADDRESS'                  => 'Любой адрес:',
'LBL_ANY_EMAIL'=> 'Любой E-mail:' ,
'LBL_ANY_PHONE'=> 'Любой тел.:' ,
'LBL_BUTTON_CREATE'=> 'Создать' ,
'LBL_BUTTON_EDIT'=> 'Править' ,
'LBL_CALENDAR_OPTIONS'=> 'Настройки календаря' ,
'LBL_CHANGE_PASSWORD'               => 'Изменение сгенерированного пароля',
'LBL_CHANGE_SYSTEM_PASSWORD'=> 'Пожалуйста, укажите новый пароль.',
'LBL_CHANGE_PASSWORD_TITLE'         => 'Пароль',
'LBL_CHOOSE_A_KEY'=> 'Укажите ключ для недопущения неавторизованных публикаций Вашего календаря' ,
'LBL_NO_KEY' => 'Ключ не указан. Пожалуйста, введите ключ для осуществления публикации.',

'LBL_CHOOSE_WHICH'=> 'Вы можете выбрать закладки, отображаемые в системе, а также отсортировать их в желаемом порядке.' ,
'LBL_CITY'=> 'Город' ,

'LBL_CLEAR_BUTTON_TITLE'=> 'Очистить',


'LBL_CONFIRM_PASSWORD'=> 'Подтверждение пароля:' ,
'LBL_CONFIRM_REGULAR_USER'=> 'Вы изменили тип пользователя с Системного администратора на Обычного пользователя. После сохранения внесённых изменений пользователь не будет иметь административных прав.\n\nНажмите кнопку "OK" для применения изменений.\nНажмите кнопку "Отмена" для возврата на редактируемую страницу.',
'LBL_COUNTRY'=> 'Страна' ,
'LBL_CURRENCY_TEXT'=> 'Выберите валюту, которая будет фигурировать во всех создаваемых записях. Эта же валюта будет указана в колонке <b>Сумма</b> при просмотре списка сделок.' ,
'LBL_CURRENCY'=> 'Валюта' ,
'LBL_CURRENCY_EXAMPLE'=> 'Пример валюты',
'LBL_CURRENCY_SIG_DIGITS'=> 'Значимые цифры валюты',
'LBL_CURRENCY_SIG_DIGITS_DESC'=> 'Количество символов после запятой',
'LBL_NUMBER_GROUPING_SEP'=> 'Разделитель групп разрядов' ,
'LBL_NUMBER_GROUPING_SEP_TEXT'=> 'Символ, используемый для разделения групп разрядов (1 000 000) ' ,
'LBL_DECIMAL_SEP'=> 'Десятичный разделитель' ,
'LBL_DECIMAL_SEP_TEXT'=> 'Символ, разделяющий целую и дробную части числа' ,
'LBL_FDOW'=> 'Первый день недели',
'LBL_FDOW_TEXT'=> 'Первый день недели, отображаемый в календаре',
'LBL_DATE_FORMAT_TEXT'=> 'Установите формат отображения даты' ,
'LBL_DATE_FORMAT'=> 'Формат даты' ,
'LBL_DEFAULT_SUBPANEL_TITLE'=> 'Пользователи' ,
'LBL_DEPARTMENT'=> 'Отдел' ,
'LBL_DESCRIPTION'=> 'Описание:' ,
'LBL_DISPLAY_TABS'=> 'Отображаемые закладки' ,
'LBL_DOWNLOADS' => 'Загрузки',
'LBL_DST_INSTRUCTIONS'=> '(+DST) обозначает соблюдение Вами перехода на летнее время' ,
'LBL_EDIT_TABS'=> 'Управление закладками' ,
'LBL_EDIT'=> 'Править' ,
'LBL_USER_HASH'=> 'Пароль',
'LBL_AUTHENTICATE_ID'=> 'ID аутентификации',
'LBL_ACCOUNT_NAME'=> 'Логин',
'LBL_USER_PREFERENCES'=> 'Параметры пользователя',
'LBL_EXT_AUTHENTICATE'=> 'Внешняя аутентификация',
'LBL_EMAIL_OTHER'=> 'E-mail 2:' ,
'LBL_EMAIL'=> 'E-mail' ,
'LBL_EMAIL_CHARSET'=> 'Кодировка исходящего письма',
'LBL_EMAIL_EDITOR_OPTION'=> 'Формат' ,
'LBL_EMAIL_GMAIL_DEFAULTS'=> 'Использовать настройки Gmail&#153;',
'LBL_EMAIL_LINK_TYPE'=> 'Почтовый клиент' ,

'LBL_EMAIL_LINK_TYPE_HELP'=> '<b>Почтовый клиент Suite</b> - отправка электронных писем при помощи встроенного в Suite почтового клиента.<br><b>Внешний почтовый клиент</b> - любой другой почтовый клиент, например Microsoft Outlook.',

'LBL_EMAIL_NOT_SENT'                => 'Система не в состоянии выполнить ваш запрос. Пожалуйста, свяжитесь с системным администратором.',
'LBL_EMAIL_PROVIDER'               => 'Почтовая служба',
'LBL_EMAIL_SHOW_COUNTS'=> 'Показывать кол-во сообщений?' ,
'LBL_EMAIL_SIGNATURE_ERROR1'=> 'Для этой подписи необходимо ввести название.' ,
'LBL_EMAIL_SMTP_SSL'=> 'Включить SMTP over SSL',
'LBL_EMAIL_TEMPLATE_MISSING'            => 'Не выбран шаблон для отсылаемого письма с паролем пользователя. Пожалуйста, выберите необходимый шаблон на странице управления паролями.',
'LBL_EMPLOYEE_STATUS'=> 'Статус сотрудника' ,
'LBL_EMPLOYEE_INFORMATION'         => 'Информация о сотруднике',
'LBL_ERROR'=> 'Ошибка' ,
'LBL_EXPORT_CHARSET'=> 'Кодировка импорта/экспорта',
'LBL_EXPORT_CHARSET_DESC'=> 'Выберите используемую кодировку.  Она будет использоваться при импортировании данных, экспорте в csv-формат и при создании vCard.',
'LBL_EXPORT_DELIMITER'=> 'Символ разделителя при экспорте данных',
'LBL_EXPORT_DELIMITER_DESC'=> 'Укажите символ(ы), разделяющие экспортируемые данные.',
'LBL_FAX_PHONE'=> 'Факс' ,
'LBL_FAX'=> 'Факс' ,
'LBL_FIRST_NAME'=> 'Имя' ,
'LBL_GENERATE_PASSWORD_BUTTON_KEY'  => 'G',
'LBL_SYSTEM_GENERATED_PASSWORD'     => 'Автоматически сгенерированный пароль',
'LBL_GENERATE_PASSWORD_BUTTON_LABEL'   => 'Сменить пароль',
'LBL_GENERATE_PASSWORD_BUTTON_TITLE'   => 'Сменить пароль',
'LBL_GENERATE_PASSWORD'             => 'Сменить пароль',
'LBL_GROUP_DESC'=> 'Используется только для назначения пользователей в указанную группу (например, для входящих писем) и не может авторизоваться через Веб-интерфейс Suite.' ,
'LBL_GROUP_USER_STATUS'=> 'Групповой пользователь' ,
'LBL_GROUP_USER'=> 'Групповой пользователь' ,
'LBL_HIDE_TABS'=> 'Скрытые закладки' ,
'LBL_HOME_PHONE'=> 'Тел. (дом.)' ,
'LBL_INBOUND_TITLE'=> 'Информация по контрагенту' ,
'LBL_IS_ADMIN'=> 'Администратор' ,
'LBL_LANGUAGE'=> 'Язык:' ,
'LBL_LAST_NAME'=> 'Фамилия' ,
'LBL_LAST_NAME_SLASH_NAME'=> 'Фамилия/Имя',
'LBL_LAYOUT_OPTIONS'                => 'Параметры макета',
'LBL_LDAP'=> 'LDAP',
'LBL_LDAP_AUTHENTICATION'=> 'LDAP-аутентификация',
'LBL_LIST_ACCEPT_STATUS'=> 'Статус' ,
'LBL_LIST_ADMIN'=> 'Администрирование' ,
'LBL_LIST_DEPARTMENT'=> 'Отдел' ,
'LBL_LIST_EMAIL'=> 'E-mail' ,
'LBL_LIST_FORM_TITLE'=> 'Пользователи' ,
'LBL_LIST_GROUP'=> 'Групповой' ,
'LBL_LIST_LAST_NAME'=> 'Фамилия' ,
'LBL_LIST_MEMBERSHIP'=> 'Участник' ,
'LBL_LIST_NAME'=> 'Пользователь' ,
'LBL_LIST_PRIMARY_PHONE'=> 'Основной тел.' ,
'LBL_LIST_PASSWORD'=> 'Пароль',
'LBL_LIST_STATUS'=> 'Статус' ,
'LBL_LIST_TITLE'=> 'Должность' ,
'LBL_LIST_USER_NAME'=> 'Логин' ,
'LBL_LOCALE_DEFAULT_NAME_FORMAT'=> 'Формат ФИО по умолчанию',
'LBL_LOCALE_DESC_FIRST'=> '[Имя]',
'LBL_LOCALE_DESC_LAST'=> '[Фамилия]',
'LBL_LOCALE_DESC_SALUTATION'=> '[Приветствие]',
'LBL_LOCALE_DESC_TITLE'=> '[Название]',
'LBL_LOCALE_EXAMPLE_NAME_FORMAT'=> 'Пример',
'LBL_LOCALE_NAME_FORMAT_DESC'=> 'Формат ФИО.',
'LBL_LOCALE_NAME_FORMAT_DESC_2'=> '<i>"s" Приветствие<br>"f" Имя<br>"l" Фамилия</i>',
'LBL_SAVED_SEARCH'                  => 'Отображение результатов поиска / управление сохранёнными условиями поиска',
// LOGIN PAGE STRINGS
'LBL_LOGIN_BUTTON_KEY'=> 'L' ,
'LBL_LOGIN_BUTTON_LABEL'=> 'Вход' ,
'LBL_LOGIN_BUTTON_TITLE'=> 'Авторизоваться' ,
'LBL_LOGIN_WELCOME_TO'=> 'Добро пожаловать в',
'LBL_LOGIN_OPTIONS'=> 'Параметры',
'LBL_LOGIN_FORGOT_PASSWORD'         => 'Забыли пароль?',
'LBL_LOGIN_SUBMIT'          => 'Отправить E-mail',
'LBL_LOGIN_ATTEMPTS_OVERRUN'        => 'Слишком много безуспешных попыток входа в систему.',
'LBL_LOGIN_LOGIN_TIME_ALLOWED'      => 'Вы можете попытаться снова войти в систему через ',
'LBL_LOGIN_LOGIN_TIME_DAYS'     => ' дней.',
'LBL_LOGIN_LOGIN_TIME_HOURS'    => ' час.',
'LBL_LOGIN_LOGIN_TIME_MINUTES'      => ' мин.',
'LBL_LOGIN_LOGIN_TIME_SECONDS'      => ' сек.',
'LBL_LOGIN_ADMIN_CALL'              => 'Обратитесь к системному администратору.',
// END LOGIN PAGE STRINGS
'LBL_LOGGED_OUT_1' => 'Вы автоматически вышли из системы. Для повторного входа нажмите ',
'LBL_LOGGED_OUT_2' => 'здесь',
'LBL_LOGGED_OUT_3' => '.',
'LBL_MAIL_FROMADDRESS'=> 'Адрес для "От":' ,
'LBL_MAIL_FROMNAME'=> 'Имя для "От":' ,
'LBL_MAIL_OPTIONS_TITLE'=> 'Настройка E-mail' ,
'LBL_MAIL_SENDTYPE'=> 'Отправка почты с помощью:' ,
'LBL_MAIL_SMTPAUTH_REQ'=> 'Использовать SMTP-аутентификацию?',
'LBL_MAIL_SMTPPORT'=> 'SMTP-порт:' ,
'LBL_MAILMERGE_TEXT'=> 'Включить слияние (этот параметр так же должен быть установлен администратором в настройках конфигурации).' ,
'LBL_MAILMERGE'=> 'Слияние' ,
'LBL_MAX_TAB'=> 'Количество отображаемых закладок' ,
'LBL_MAX_TAB_DESCRIPTION'           => 'Максимальное количество закладок, отображаемых в верхней части окна. Число отображаемых закладок зависит от разрешения экрана. Если суммарное количество закладок превышает указанное здесь значение, то оставшиеся закладки отображаются при нажатии на значок <b>>></b>, расположенном в правой части панели навигации.',
'LBL_MAX_SUBTAB'                    => 'Количество субпанелей',
'LBL_MAX_SUBTAB_DESCRIPTION'        => 'Количество субпанелей, отображаемых на каждой закладке.',
'LBL_MESSENGER_ID'=> 'IM - имя / E-mail' ,
'LBL_MESSENGER_TYPE'=> 'IM-тип' ,
'LBL_MOBILE_PHONE'=> 'Тел. (моб.)' ,
'LBL_MODIFIED_BY'                  => 'Изменено:',
'LBL_CREATED_BY_NAME' => 'Создано', //bug 48978
'LBL_MODIFIED_BY_ID'               => 'Изменено (ID):',
'LBL_MODULE_NAME'=> 'Пользователи' ,
'LBL_MODULE_TITLE'=> 'Сотрудники - ГЛАВНАЯ' ,
'LBL_NAME'=> 'Полное имя' ,
'LBL_SIGNATURE_NAME'                                        => 'Название',
'LBL_NAVIGATION_PARADIGM'           => 'Навигация',
'LBL_NAVIGATION_PARADIGM_DESCRIPTION'   => 'Группировать модули в закладки по определённым признакам или в виде отдельных закладок для каждого модуля.',
'LBL_USE_GROUP_TABS'                => 'Сгруппированные модули',
'LBL_NEW_FORM_TITLE'=> 'Новый пользователь' ,
'LBL_NEW_PASSWORD'=> 'Новый пароль:' ,
'LBL_NEW_PASSWORD1'=> 'Пароль' ,
'LBL_NEW_PASSWORD2'=> 'Подтверждение пароля' ,
'LBL_NEW_USER_PASSWORD_1'=> 'Пароль был успешно изменён.',
'LBL_NEW_USER_PASSWORD_2'=> 'Письмо, содержащее автоматически сгенерированный пароль, было отправлено новому пользователю.',
'LBL_NEW_USER_PASSWORD_3'=> 'Пароль успешно создан.',
'LBL_NEW_USER_BUTTON_KEY'=> 'N' ,
'LBL_NEW_USER_BUTTON_LABEL'=> 'Новый пользователь' ,
'LBL_NEW_USER_BUTTON_TITLE'=> 'Новый пользователь' ,
'LBL_NORMAL_LOGIN'=> 'Переключитесь в режим обычного просмотра',
'LBL_NOTES'=> 'Заметки' ,
'LBL_OFFICE_PHONE'=> 'Тел. (раб.)' ,
'LBL_OLD_PASSWORD'=> 'Текущий пароль:' ,
'LBL_OTHER_EMAIL'=> 'Другой E-mail:' ,
'LBL_OTHER_PHONE'=> 'Другой тел.' ,
'LBL_OTHER'=> 'Другое' ,
'LBL_PASSWORD'=> 'Пароль' ,
'LBL_PASSWORD_GENERATED'            => 'Новый пароль сгенерирован',
'LBL_PASSWORD_EXPIRATION_LOGIN'     => 'Срок действия пароля истёк. Укажите новый пароль.',
'LBL_PASSWORD_EXPIRATION_GENERATED' => 'Ваш пароль создан автоматически',
'LBL_PASSWORD_EXPIRATION_TIME'      => 'Срок действия пароля истёк. Укажите новый пароль.',

'LBL_PSW_MODIFIED'                  => 'Последнее изменение пароля',
'LBL_PHONE'=> 'Тел.:' ,
'LBL_PICK_TZ_WELCOME'=> 'Добро пожаловать в SuiteCRM' ,
'LBL_PICK_TZ_DESCRIPTION'           => 'Перед тем как продолжить, пожалуйста, выберите ваш часовой пояс. При необходимости вы сможете позже поменять часовой пояс на странице настройки личных параметров пользователя.' ,
'LBL_PORTAL_ONLY_DESC'=> 'Use for the Portal API. This type cannot login through the Sugar web interface.', ///
'LBL_PORTAL_ONLY_USER'=> 'Portal API User', ///
'LBL_POSTAL_CODE'=> 'Индекс' ,
'LBL_PRIMARY_ADDRESS'=> 'Основной адрес' ,
'LBL_PROMPT_TIMEZONE_TEXT'=> 'Однократный запуск мастера настройки при входе в систему' ,
'LBL_PROMPT_TIMEZONE'=> 'Запуск мастера настройки' ,
'LBL_PROVIDE_USERNAME_AND_EMAIL' => 'Укажите имя пользователя и E-mail',
'LBL_PUBLISH_KEY'=> 'Публичный ключ' ,

'LBL_RECAPTCHA_NEW_CAPTCHA'         => 'Обновить',
'LBL_RECAPTCHA_SOUND'=> 'Переключиться на звук',
'LBL_RECAPTCHA_IMAGE'=> 'Переключиться на картинку',
'LBL_RECAPTCHA_INSTRUCTION'         => 'Введите указанные слова через пробел',
'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE'=> 'Введите указанные слова через пробел',
'LBL_RECAPTCHA_FILL_FIELD'=> 'Ведите текст, указанный на картинке.',
'LBL_RECAPTCHA_INVALID_PRIVATE_KEY'=> 'Неверный закрытый Recaptcha-ключ',
'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE'=> 'Проверочный параметр неверен (The challenge parameter of the verify Recaptcha script was incorrect).',
'LBL_RECAPTCHA_UNKNOWN'=> 'Неизвестная Recaptcha-ошибка',

'LBL_RECEIVE_NOTIFICATIONS_TEXT'=> 'Пользователь получает уведомление по E-mail при назначении ему записи другим пользователем.' ,
'LBL_RECEIVE_NOTIFICATIONS'=> 'Уведомление о назначении' ,
'LBL_REGISTER'                      => 'Новый пользователь? Пожалуйста, зарегистрируйтесь',
'LBL_REGULAR_USER'                  => 'Обычный пользователь',
'LBL_REMINDER_TEXT'=> 'Временной интервал по умолчанию для напоминания о предстоящем телефонном разговоре или встрече. Напоминания в виде всплывающих окон появляются у всех приглашённых пользователей Suite. Напоминания по электронной почте отправляются ВСЕМ приглашённым.' ,
'LBL_REMINDER'=> 'Напоминание о мероприятии' ,
'LBL_REMINDER_POPUP' => 'Во всплывающем окне',
'LBL_REMINDER_EMAIL' => 'E-mail',
'LBL_REMINDER_EMAIL_ALL_INVITEES'   => 'Отправлять E-mail приглашённым',
'LBL_REMOVED_TABS'=> 'Закладки, доступные только администратору' ,
'LBL_REPORTS_TO_NAME'=> 'Руководитель',
'LBL_REPORTS_TO'=> 'Руководитель',
'LBL_REPORTS_TO_ID'                => 'Руководитель (ID):',
'LBL_REQUEST_SUBMIT'=> 'Письмо отправлено',
'LBL_RESET_TO_DEFAULT'=> 'Сброс в стандартные значения',
'LBL_RESET_PREFERENCES'=> 'Установить стандартные значения' ,
'LBL_RESET_PREFERENCES_WARNING'     => 'Вы действительно хотите сбросить все ваши настройки?',
'LBL_RESET_PREFERENCES_WARNING_USER' => 'Вы действительно хотите сбросить все настройки данного пользователя?',
'LBL_RESET_HOMEPAGE'                => 'Сбросить настройки закладки "ГЛАВНАЯ"',
'LBL_RESET_DASHBOARD'               => 'Сбросить настройки диаграмм',
'LBL_RESET_HOMEPAGE_WARNING'        => 'Вы действительно хотите сбросить настройки закладки `ГЛАВНАЯ`?',
'LBL_RESET_HOMEPAGE_WARNING_USER'   => 'Вы действительно хотите сбросить настройки закладки `ГЛАВНАЯ` для данного пользователя?',
'LBL_SALUTATION'                    => 'Приветствие',
'LBL_ROLES_SUBPANEL_TITLE'=> 'Роли' ,
'LBL_SEARCH_FORM_TITLE'=> 'Поиск пользователей' ,
'LBL_SEARCH_URL'=> 'Искать размещение' ,
'LBL_SELECT_CHECKED_BUTTON_LABEL'=> 'Выбрать отмеченных пользователей' ,
'LBL_SELECT_CHECKED_BUTTON_TITLE'=> 'Выбрать отмеченных пользователей' ,
'LBL_SETTINGS_URL_DESC'=> 'Используйте этот URL , когда вы устанавливаете настройки Sugar Plug-in для Microsoft&reg; Outlook&reg; и Sugar Plug-in для Microsoft&reg; Word&reg;.' ,
'LBL_SETTINGS_URL'=> 'URL' ,
'LBL_SIGNATURE'=> 'Подпись' ,
'LBL_SIGNATURE_HTML'=> 'HTML-подпись' ,
'LBL_SIGNATURE_DEFAULT'=> 'Использовать подпись?' ,
'LBL_SIGNATURE_PREPEND'=> 'Подпись перед ответом?' ,
'LBL_SIGNATURES'=> 'Подписи:' ,
'LBL_STATE'=> 'Область' ,
'LBL_STATUS'=> 'Статус пользователя' ,
'LBL_SUBPANEL_LINKS'                => 'Субпанели',
'LBL_SUBPANEL_LINKS_DESCRIPTION'    => 'Отображать субпанели в Форме просмотра.',
'LBL_SUBPANEL_TABS'                 => 'Группировать закладки субпанелей',
'LBL_SUBPANEL_TABS_DESCRIPTION'     => 'В Форме просмотра группировать субпанели на закладках.',
'LBL_SUGAR_LOGIN'=> 'Пользователь SuiteCRM',
'LBL_SUPPORTED_THEME_ONLY'          => 'Не все темы поддерживают этот параметр.',
'LBL_SWAP_LAST_VIEWED_DESCRIPTION'  => 'Отображать последние просмотры слева, а не сверху.',
'LBL_SWAP_SHORTCUT_DESCRIPTION'     => 'Отображать меню модуля сверху, а не слева.',
'LBL_SWAP_LAST_VIEWED_POSITION'     => 'Отображать последние просмотры слева',
'LBL_SWAP_SHORTCUT_POSITION'        => 'Отображать меню модуля сверху',
'LBL_TAB_TITLE_EMAIL'=> 'Массовые рассылки' ,
'LBL_TAB_TITLE_USER'=> 'Пользовательские настройки' ,
'LBL_THEME'=> 'Темы' ,
'LBL_THEME_COLOR'=> 'Цвет',
'LBL_THEME_FONT'=> 'Шрифт',
'LBL_TIME_FORMAT_TEXT'=> 'Установите формат отображения времени' ,
'LBL_TIME_FORMAT'=> 'Формат времени' ,
'LBL_TIMEZONE_DST_TEXT'=> 'Соблюдение летнего времени' ,
'LBL_TIMEZONE_DST'=> 'Летнее время:' ,
'LBL_TIMEZONE_TEXT'=> 'Установите часовой пояс' ,
'LBL_TIMEZONE'=> 'Часовой пояс' ,
'LBL_TITLE'=> 'Должность' ,
'LBL_USE_REAL_NAMES'=> 'Отображать полные имена пользователей',
'LBL_USE_REAL_NAMES_DESC'=> 'Отображать полные имена пользователей вместо логина',
'LBL_USER_INFORMATION'=> 'Профиль пользователя' ,
'LBL_USER_LOCALE'=> 'Региональные настройки',
'LBL_USER_NAME'=> 'Логин' ,
'LBL_USER_SETTINGS'=> 'Пользовательские настройки' ,
'LBL_USER_TYPE'       => 'Тип пользователя',
'LBL_USER_ACCESS'                  => 'Права доступа',
'LBL_USER'=> 'Пользователи:' ,
'LBL_WORK_PHONE'=> 'Рабочий телефон:' ,
'LBL_YOUR_PUBLISH_URL'=> 'Опубликовать в моем размещении' ,
    'LBL_ICAL_PUB_URL'                  => 'Адрес интеграции с iCal',
    'LBL_ICAL_PUB_URL_HELP'             => 'Используйте этот адрес для подписки на календарь SuiteCRM в рамках iCal.',

'LBL_YOUR_QUERY_URL'=> 'Запрашиваемый Вами URL:' ,
'LNK_NEW_USER'=> 'Создать нового пользователя' ,
'LNK_NEW_PORTAL_USER'=> 'Create Portal API User', ///
'LNK_NEW_GROUP_USER'=> 'Создать группового пользователя',
'LNK_USER_LIST'=> 'Пользователи' ,
'LNK_REASSIGN_RECORDS'=> 'Переназначить записи',
'LBL_PROSPECT_LIST'                 => 'Список адресатов',
'LBL_EMAILS'                        => 'E-mail',
'LBL_PROCESSING'                    => 'Выполняется..',
'LBL_UPDATE_FINISH'                 => 'Обновление завершено',
'LBL_AFFECTED'                      => 'записей обработано',

'LBL_USER_NAME_FOR_ROLE'            => 'Пользователи/Роли',
'LBL_SESSION_EXPIRED'               => 'Вы автоматически вышли из системы, поскольку время вашей сессии истекло.',

// INBOUND EMAIL STRINGS
'LBL_APPLY_OPTIMUMS'=> 'Применить оптимальные настройки' ,
'LBL_ASSIGN_TO_USER'=> 'Назначить пользователю' ,
'LBL_BASIC'=> 'Настройки входящей почты' ,
'LBL_CERT_DESC'=> 'Включить проверку почтовых сертификатов сервера - не использовать, если используется автоподписка.' ,
'LBL_CERT'=> 'Проверка сертификата' ,
'LBL_FIND_OPTIMUM_KEY'=> 'f' ,
'LBL_FIND_OPTIMUM_MSG'=> 'Найти оптимальные параметры соединения.' ,
'LBL_FIND_OPTIMUM_TITLE'=> 'Найти оптимальную конфигурацию' ,
'LBL_FORCE'=> 'Force Negative' ,
'LBL_FORCE_DESC'=> 'Some IMAP/POP3 servers require special switches. Check to force a negative switch when connecting (i.e., /notls) ' ,
'LBL_FOUND_OPTIMUM_MSG'=> 'Найдены оптимальные параметры. Нажмите кнопку ниже для того, чтобы применить их к вашему почтовому ящику.' ,
'LBL_EMAIL_INBOUND_TITLE'=> 'Параметры входящей почты' ,
'LBL_EMAIL_OUTBOUND_TITLE'=> 'Параметры исходящей почты' ,
'LBL_LOGIN'=> 'Логин' ,
'LBL_MAILBOX_DEFAULT'=> 'ВХОДЯЩИЕ' ,
'LBL_MAILBOX_SSL_DESC'=> 'Использовать SSL при соединении. Если SSL не работает, то проверьте наличие параметра "--with-imap-ssl" при конфигурировании исходных текстов PHP.' ,
'LBL_MAILBOX'=> 'Контролируемая папка' ,
'LBL_MAILBOX_TYPE'=> 'Возможные действия' ,
'LBL_MARK_READ_NO'=> 'E-mail помечаются удалёнными после импортирования' ,
'LBL_MARK_READ_YES'=> 'Оставлять E-mail на сервере при импорте' ,
'LBL_MARK_READ_DESC'=> 'Импортировать сообщения и помечать их на сервере как прочитанные; не удалять сообщения на сервере.' ,
'LBL_MARK_READ'=> 'Оставлять сообщения на сервере' ,
'LBL_ONLY_SINCE_NO'=> 'Нет. Помечать все письма на сервере.' ,
'LBL_ONLY_SINCE_YES'=> 'Да' ,
'LBL_ONLY_SINCE_DESC'=> 'PHP не может отличить НОВЫЕ сообщения от НЕПРОЧИТАННЫХ, когда используется POP3. Оставьте эту опцию отмеченной. Это значительно увеличит производительность системы, если ваш сервер не поддерживает IMAP.' ,
'LBL_ONLY_SINCE'=> 'Импортировать только новые (с момента последней проверки)' ,
'LBL_PORT'=> 'Порт почтового сервера' ,
'LBL_SERVER_OPTIONS'=> 'Опции почтового сервера' ,
'LBL_SERVER_TYPE'=> 'Протокол почтового сервера' ,
'LBL_SERVER_URL'=> 'Адрес почтового сервера' ,
'LBL_SSL'=> 'Использовать SSL' ,
'LBL_SSL_DESC'=> 'Использовать SSL' ,
'LBL_TEST_BUTTON_KEY'=> 't' ,
'LBL_TEST_BUTTON_TITLE'=> 'Тестирование' ,
'LBL_TEST_SETTINGS'=> 'Тест настроек' ,
'LBL_TEST_SUCCESSFUL'=> 'Соединение успешно завершено' ,
'LBL_TLS_DESC'=> 'Использование TLS при соединении с почтовым сервером - используйте этот параметр только в случае поддержки данного протокола почтовым сервером.' ,
'LBL_TLS'=> 'Использовать TLS' ,
'LBL_TOGGLE_ADV'=> 'Дополнительные настройки' ,
'LBL_OWN_OPPS'                      => 'Нет сделок',
'LBL_EXTERNAL_AUTH_ONLY'=> 'Authenticate this user only through',
'LBL_ONLY'=> 'Only', ///
'LBL_OWN_OPPS_DESC'                 => 'Отметьте эту опцию, если пользователю не назначено сделок. Используйте эту опцию для пользователей, являющихся менеджерами и не участвующих в продажах. Используется в модуле "Прогнозы".',
// END INBOUND EMAIL STRINGS
'LBL_LDAP_ERROR' => 'Ошибка LDAP. Пожалуйста, свяжитесь с администратором',
'LBL_LDAP_EXTENSION_ERROR' => 'Ошибка LDAP. Расширения не загружены',

// PROJECT RESOURCES STRINGS
'LBL_USER_HOLIDAY_SUBPANEL_TITLE' => 'Праздники',
'LBL_RESOURCE_NAME' => 'Название',
'LBL_RESOURCE_TYPE' => 'Тип',

'LBL_PDF_SETTINGS'  => 'PDF Settings',
'LBL_PDF_PAGE_FORMAT'  => 'Page Format',
'LBL_PDF_PAGE_FORMAT_TEXT'  => 'The format used for pages',
'LBL_PDF_PAGE_ORIENTATION'  => 'Page Orientation',
'LBL_PDF_PAGE_ORIENTATION_TEXT'  => '',
'LBL_PDF_PAGE_ORIENTATION_P'  => 'Portrait',
'LBL_PDF_PAGE_ORIENTATION_L'  => 'Landscape',
'LBL_PDF_MARGIN_HEADER'  => 'Header Margin',
'LBL_PDF_MARGIN_HEADER_TEXT'  => '',
'LBL_PDF_MARGIN_FOOTER'  => 'Footer Margin',
'LBL_PDF_MARGIN_FOOTER_TEXT'  => '',
'LBL_PDF_MARGIN_TOP'  => 'Top Margin',
'LBL_PDF_MARGIN_TOP_TEXT'  => '',
'LBL_PDF_MARGIN_BOTTOM'  => 'Bottom Margin',
'LBL_PDF_MARGIN_BOTTOM_TEXT'  => '',
'LBL_PDF_MARGIN_LEFT'  => 'Left Margin',
'LBL_PDF_MARGIN_LEFT_TEXT'  => '',
'LBL_PDF_MARGIN_RIGHT'  => 'Right Margin',
'LBL_PDF_MARGIN_RIGHT_TEXT'  => '',
'LBL_PDF_FONT_NAME_MAIN'  => 'Font for Header and Body',
'LBL_PDF_FONT_NAME_MAIN_TEXT'  => 'The selected font will be applied to the text in the header and the body of the PDF Document',
'LBL_PDF_FONT_SIZE_MAIN'  => 'Main Font Size',
'LBL_PDF_FONT_SIZE_MAIN_TEXT'  => '',
'LBL_PDF_FONT_NAME_DATA'  => 'Font for Footer',
'LBL_PDF_FONT_NAME_DATA_TEXT'  => 'The selected font will be applied to the text in the footer of the PDF Document',
'LBL_PDF_FONT_SIZE_DATA'  => 'Data Font Size',
'LBL_PDF_FONT_SIZE_DATA_TEXT'  => '',
'LBL_LAST_ADMIN_NOTICE' => 'Вы выбрали собственную учётную запись. Вы не можете изменить её тип или статус.',
'LBL_MAIL_SMTPUSER'=> 'SMTP-пользователь:' ,
'LBL_MAIL_SMTPPASS'=> 'SMTP-пароль:' ,
'LBL_MAIL_SMTPSERVER' => 'SMTP-сервер:' ,
'LBL_SMTP_SERVER_HELP' => 'Сервер SMTP может быть использован для отправки исходящей электронной почты. Для использования данного сервера в настройках учётной записи укажите соответствующего пользователя и пароль.',
'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Администратор системы ещё не настроил стандартный сервер исходящей почты. Тестовое письмо не может быть отправлено.',
'LBL_MAIL_SMTPAUTH_REQ'=> 'Использовать SMTP-аутентификацию?',
'LBL_MAIL_SMTPPASS'=> 'SMTP-пароль:' ,
'LBL_MAIL_SMTPPORT'=> 'SMTP-порт:' ,
'LBL_MAIL_SMTPSERVER'=> 'SMTP-сервер:' ,
'LBL_MAIL_SMTPUSER'=> 'SMTP-пользователь:' ,
'LBL_MAIL_SMTPTYPE'                => 'Тип SMTP-сервера:',
'LBL_MAIL_SMTP_SETTINGS'           => 'Настройка SMTP-сервера',
'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Выберите почтовую службу:',
'LBL_YAHOOMAIL_SMTPPASS'=> 'Yahoo! - пароль:',
'LBL_YAHOOMAIL_SMTPUSER'=> 'Yahoo! - учётная запись почты:',
'LBL_GMAIL_SMTPPASS'=> 'Gmail - пароль:',
'LBL_GMAIL_SMTPUSER'=> 'Gmail - адрес:',
'LBL_EXCHANGE_SMTPPASS'=> 'Exchange - пароль:',
'LBL_EXCHANGE_SMTPUSER'=> 'Exchange - логин:',
'LBL_EXCHANGE_SMTPPORT'=> 'Exchange - порт сервера:',
'LBL_EXCHANGE_SMTPSERVER'=> 'Exchange  - сервер:',
'LBL_OK'   => 'OK',
'LBL_CANCEL'    => 'Отказаться',
'LBL_DELETE_USER' => 'Удаление пользователя',
// Wizard
'LBL_WIZARD_TITLE' => 'Мастер настройки системы',
'LBL_WIZARD_WELCOME_TAB' => 'Добро пожаловать',
'LBL_WIZARD_WELCOME_TITLE' => 'Добро пожаловать в SuiteCRM!',
'LBL_WIZARD_WELCOME' => 'Нажмите на кнопку <b>Далее</b> для настройки основных параметров системы, таких как:<br /><br />&bull;&nbsp;Информация о сотруднике.<br />&bull;&nbsp;Параметры отображения даты, времени, валюты, ФИО.<br />&bull;&nbsp;Параметры сервера исходящей почты.<br /><br />',
'LBL_WIZARD_WELCOME_NOSMTP' => 'Предлагаем вам настроить основные параметры системы.<br /><br />После нажатия на кнопку <b>Далее</b> вам будет предложено настроить следующие параметры:<br /><br />&bull;&nbsp;Информацию о сотруднике.<br />&bull;&nbsp;Параметры отображения даты, времени, валюты, ФИО.<br /><br />',
'LBL_WIZARD_NEXT_BUTTON' => 'Вперёд >',
'LBL_WIZARD_BACK_BUTTON' => '< Назад',
'LBL_WIZARD_SKIP_BUTTON' => 'Пропустить',
'LBL_WIZARD_FINISH_BUTTON' => 'Готово',
'LBL_WIZARD_FINISH_TAB' => 'Готово',
'LBL_WIZARD_FINISH_TITLE' => 'Система готова к использованию!',

'LBL_WIZARD_FINISH' => 'Нажмите на кнопку <b>Готово</b> для сохранения настроек и перехода к работе с системой. За дополнительной информацией вы можете обратиться к следующим ресурсам:<br /><br />
<table cellpadding=0 cellspacing=0>
<tr><td><!--not_in_theme!-->Visit www.suitecrm.com <img src=include/images/sugarcrm_login.png style="margin-right: 5px;"></td><td><a href="http://www.suitecrm.com/" target="_blank"><b>Suite CRM</b></a></td></tr>
<tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr>
<tr><td><img src=include/images/forums.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com.ua/viewforum.php?f=5" target="_blank"><b>Русскоязычная документация</b></a><br>Русскоязычный форум, посвящённый SugarCRM.</td></tr>
</table>',

'LBL_WIZARD_FINISH1' => 'С чего начнём?',
'LBL_WIZARD_FINISH2' => 'Начало работы в системе',
'LBL_WIZARD_FINISH3' => 'Импортирование данных',
'LBL_WIZARD_FINISH4' => 'Импортирование данных из внешних источников',
'LBL_WIZARD_FINISH5' => 'Создание пользователей',
'LBL_WIZARD_FINISH6' => 'Создание в системе новых учётных записей',
'LBL_WIZARD_FINISH7' => 'Просмотр и настройка параметров системы',
'LBL_WIZARD_FINISH8' => 'Управление стандартными и дополнительными параметрами системы',
'LBL_WIZARD_FINISH9' => 'Настройка внешнего вида системы',
'LBL_WIZARD_FINISH10' => 'Настройка макетов страниц, полей, меток и комбобоксов при помощи Студии',
'LBL_WIZARD_FINISH11' => 'Поддержка',
'LBL_WIZARD_FINISH12' => 'Доступ к англоязычному форуму. Вы также можете обсудить данный проект на <a href="http://www.sugarcrm.com.ua" target="_blank"><b>Русскоязычном форуме</b></a>.',
'LBL_WIZARD_FINISH14' => 'Просмотр документации ',
'LBL_WIZARD_FINISH15' => 'Англоязычное руководство пользователя и примечания к текущему релизу',
'LBL_WIZARD_FINISH16' => 'Просмотр базы знаний',
'LBL_WIZARD_FINISH17' => 'Советы от службы технической поддержки',
'LBL_WIZARD_FINISH18' => 'Форум',
'LBL_WIZARD_FINISH19' => 'Англоязычный форум.',
'LBL_WIZARD_FINISH2DESC' => 'Переход на ГЛАВНУЮ страницу системы.',
'LBL_WIZARD_PERSONALINFO' => 'Информация о сотруднике',
'LBL_WIZARD_LOCALE' => 'Региональные стандарты',
'LBL_WIZARD_SMTP' => 'Параметры сервера исходящей почты',
'LBL_WIZARD_PERSONALINFO_DESC' => 'Введите контактную информацию. Эта информация будет доступна другим пользователям системы. Поля, помеченные значком <span class="required">*</span>, обязательны для заполнения.',
'LBL_WIZARD_LOCALE_DESC' => 'Укажите ваш часовой пояс, формат отображения даты, времени, валюты и ФИО.',
'LBL_WIZARD_SMTP_DESC' => 'Укажите параметры сервера исходящей почты.',
'LBL_EAPM_SUBPANEL_TITLE' => 'Внешние учётные записи',

'LBL_EDITLAYOUT' => 'Изменить макет' /*for 508 compliance fix*/,
'LBL_HELP' => 'Справка' /*for 508 compliance fix*/,
'LBL_CHECKMARK' => 'Checkmark', /// /*for 508 compliance fix*/,
'LBL_THEMEPREVIEW' => 'Preview', /// /*for 508 compliance fix*/,

'LBL_OAUTH_TOKENS' => 'OAuth-маркёры',
'LBL_OAUTH_TOKENS_SUBPANEL_TITLE' => "OAuth-маркёры доступа",

//For export labels
'LBL_MODIFIED_USER_ID' => 'Ответственный(ая)-ID',
'LBL_PHONE_HOME' => 'Тел. (дом.)',
'LBL_PHONE_MOBILE' => 'Тел. (моб.)',
'LBL_PHONE_WORK' => 'Тел. (раб.)',
'LBL_PHONE_OTHER' => 'Другой тел.',
'LBL_PHONE_FAX' => 'Факс',
'LBL_PORTAL_ONLY' => 'Portal Only', ///
'LBL_SHOW_ON_EMPLOYEES' => 'Отображать в списке сотрудников',
'LBL_IS_GROUP' => 'Is Group', ///
'LBL_EXPORT_CREATED_BY' => 'Создано (ID)',

'LBL_DATE_MODIFIED' => 'Дата изменения',
'LBL_DATE_ENTERED' => 'Дата создания',
'LBL_DELETED' => 'Удалено',
'LBL_HIDEOPTIONS' => 'Скрыть параметры',
'LBL_SHOWOPTIONS' => 'Показать параметры',

'LBL_SUITE_SUPERCHARGED' => "Supercharged by SuiteCRM",
'LBL_SUITE_POWERED_BY' => "Powered By SugarCRM",
'LBL_SUITE_TOP' => "Назад",
'LBL_SUITE_PRINT' => "Печать",
'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by SalesAgility, one of the worlds most knowledgeable SugarCRM consultancies.',
'LBL_SUITE_DESC2' => 'SuiteCRM is intended to deliver on the promise of SugarCRM - a freely available open source CRM project that combines great functionality, with community and commitment.',
'LBL_SUITE_DESC3' => 'There will be no licenced software as part of the project managed by SalesAgility. All the code is free. All the code is available for free download. There is no hidden agenda to charge for access to the code. It is and always will be free and open source. There will be no paid-for versions.',
'LBL_QUICK_ACCOUNT' => 'Создать контрагента',
'LBL_QUICK_CONTACT' => 'Создать контакт',
'LBL_QUICK_OPPORTUNITY' => 'Create Opportunity',
'LBL_QUICK_LEAD' => 'Создать предварит. контакт',
'LBL_QUICK_DOCUMENT' => 'Создать документ',
'LBL_QUICK_CALL' => 'Назначить звонок',
'LBL_QUICK_TASK' => 'Создать задачу',

    'LBL_ENABLE_NOTIFICATIONS' => 'Включить оповещений'
); // END STRINGS DEFS

?>
