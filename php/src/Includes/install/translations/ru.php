<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */


/**
 * X-Cart installation texts (Russian)
 */


if (!defined('XLITE_INSTALL_MODE')) {
  die('Incorrect call of the script. Stopping.');
}

$translation = array (
  'Installation script' => 'Мастер установки',
  'Installation wizard' => 'Мастер установки',
  'PHP version' => 'Версия PHP',
  'PHP safe_mode' => 'Безопасный режим PHP',
  'Disabled functions' => 'Отключенные функции',
  'Memory limit' => 'Предел памяти',
  'File uploads' => 'Загрузка файлов',
  'MySQL support' => 'Поддержка MySQL',
  'PDO extension' => 'Расширение PDO',
  'Upload file size limit' => 'Предел размера загружаемого файла',
  'Memory allocation test' => 'Проверка распределения памяти',
  'Recursion test' => 'Проверка рекурсии',
  'File permissions' => 'Права на файлы',
  'MySQL version' => 'Версия MySQL',
  'GDlib extension' => 'Расширение GDlib',
  'Phar extension' => 'Расширение Phar',
  'HTTPS bouncers' => 'HTTPS баунсеры',
  'XML extensions support' => 'Поддержка XML расширений',
  'Internal error: function :func() does not exists' => 'Внутренняя ошибка: функция :func() не существует',
  'Checking requirements is successfully complete' => 'Проверка требований успешно завершена',
  'Some requirements are failed' => 'Не все требования выполнены',
  'install_script.error_message_1' => 'В корневой папке Вашего установленного магазина X-Cart обнаружен файл install.php, используемого для запуска установки X-Cart. Хранение данного файла в указанном местоположении в неизменном виде не безопасно. Мы настоятельно рекомендуем удалить или переименовать данный файл для предотвращения неавторизованного доступа к инструментарию инсталляции магазина.',
  'php_version.error_message_1' => 'Версия PHP должна быть как минимум :minPhpVersion.',
  'php_version.error_message_2' => 'Весрия PHP должнв быть не выше :maxPhpVersion.',
  'php_version.error_message_3' => 'Обнаружена неподдерживаемая версия PHP.',
  'PHP option sql.safe_mode value should be Off' => 'Значение PHP опции sql.safe_mode должно быть Off',
  'Unlimited' => 'Без ограничений',
  'php_memory_limit.error_message_1' => 'Значение PHP опции memory_limit должно быть как минимум :memoryLimitMin.',
  'php_file_uploads.error_message_1' => 'Значение PHP опции file_uploads должно быть On.',
  'Support MySQL is disabled in PHP. It must be enabled.' => 'Поддержка MySQL в PHP отключена. Необходимо ее включить.',
  'php_pdo_mysql.error_message_1' => 'Необходимо установить расширение PDO с поддержкой MySQL',
  'php_upload_max_file_size.error_message_1' => 'Необходимо задать значение для PHP опции upload_max_filesize. Сейчас значение отсутствует.',
  'PHP allow_url_fopen option value should be On' => 'Статус PHP опции allow_url_fopen должен быть On',
  'Memory allocation test failed. Response:' => 'Проверка распределения памяти не выполнена. Ответ:',
  'Recursion test failed.' => 'Проверка рекурсии не выполнена',
  'unknown' => 'не известно',
  'Can\'t connect to MySQL server' => 'Нет соединения с MySQL сервером',
  'mysql_version.error_message_1' => 'Версия :rdbms должна быть как минимум :minMysqlVersion.',
  'mysql_version.error_message_3' => 'Не удалось определить версию MySQL сервера (:error).',
  'php_gdlib.error_message_1' => 'Для некоторых модулей необходимо расширение GDlib версии 2.0 или выше.',
  'Phar extension is not loaded' => 'Расширение Phar не загружено',
  'https_bouncer.error_message_2' => 'Расширение libcurl не найдено.',
  'https_bouncer.error_message_1' => 'Расширение libcurl обнаружено, но оно не поддерживает безопасные протоколы.',
  'xml_support.error_message_1' => 'Для некоторых модулей необходимы расширения XML/Expat и DOM.',
  'config_writing_error' => 'Не удалось открыть файл конфигурации \':configfile\' для записи. Установка прервана из-за данной непредвиденной ошибки. Пожалуйста, исправьте проблему и запустите установку снова.',
  'mysql_connection_error' => 'Не удалось подключиться к MySQL серверу:pdoerr.<br />Установка прервана из-за данной непредвиденной ошибки. Пожалуйста, исправьте проблему и запустите установку снова.',
  'doDropDatabaseTables() failed' => 'Ошибка в doDropDatabaseTables()',
  'Creating directories...' => 'Идет создание директорий...',
  'Creating .htaccess files...' => 'Идет создание .htaccess файлов...',
  'Copying templates...' => 'Идет копирование темплейтов...',
  'copy_files() failed' => 'Ошибка в copy_files()',
  'Updating config file...' => 'Идет обновление файла конфигурации...',
  'fatal_error_creating_dirs' => 'Во время создания директорий возникла неустранимая ошибка; вероятно, причина ошибки - неверные права на директории. Установка прервана из-за данной непредвиденной ошибки. Пожалуйста, исправьте проблему и запустите установку снова.',
  'Login and password can\'t be empty.' => 'Поля Логин и Пароль не могут быть пустыми',
  'Updating primary administrator profile...' => 'Идет обновление основного администраторского профиля...',
  'Registering primary administrator profile...' => 'Регистрация основного администраторского профиля...',
  'ERROR' => 'ОШИБКА',
  'ERRORS:' => 'ОШИБКИ:',
  'The rest report data:' => 'Остальные результаты проверки:',
  'cannot_connect_mysql_server' => 'Не удалось установить соединение с MySQL сервером или выбранной базой данных :pdoerr.<br />Нажмите кнопку \'НАЗАД\' и проверьте введенные данные о MySQL сервере.',
  'script_renamed_text' => '
В целях защиты вашей установки X‑Cart 5, файл "install.php" был переименован в ":newname".

При возникновении необходимости переустановки X-Cart, переименуйте файл ":newname" обратно в "install.php" и пройдите по следующей ссылке:
     http://:host:webdir/install.php
',
  'script_renamed_text_html' => '
В целях защиты вашей установки X-Cart, файл "install.php" был переименован в ":newname".<br />
При возникновении необходимости переустановки X-Cart, переименуйте файл ":newname" обратно в "install.php"',
  'script_cannot_be_renamed_text' => '<span style="color: red;"><b>ВНИМАНИЕ!</b> Не удалось переименовать файл install.php! Чтобы обезопасить свою установку X-Cart и предотвратить неавторизованное использование файла, переименуйте или удалите файл вручную.</span>',
  'correct_permissions_text' => 'Перед использованием X-Cart, пожалуйста установите следующие права на файлы:',
  'congratulations_text' => 'Поздравляем!

Магазин на базе X-Cart 5 успешно установлен и доступен по следующим ссылкам:

ВИТРИНА (ГЛАВНАЯ СТРАНИЦА)
     http://:host:webdir/cart.php

ПАНЕЛЬ АМИНИСТРИРОВАНИЯ
     http://:host:webdir/admin.php
     Логин (e-mail): :login
     Пароль:       :password

:perms

:renametext

Код авторизации для запуска install.php: :authcode

Благодарим вас за выбор X‑Cart 5!

--
Мастер Установки X‑Cart 5

',
  'Installation complete' => 'Установка завершена',
  'X-Cart installation complete'  => 'Установка X-Cart завершена',
  'X-Cart software has been successfully installed and is now available at the following URLs:' => 'Магазин на базе X‑Cart успешно установлен и доступен по следующим ссылкам:',
  'CUSTOMER ZONE (FRONT-END)' => 'ВИТРИНА (ГЛАВНАЯ СТРАНИЦА)',
  'ADMINISTRATOR ZONE (BACKOFFICE)' => 'ПАНЕЛЬ АДМИНИСТРИРОВАНИЯ',
  'Your auth code for running install.php in the future is:' => 'Код авторизации для запуска install.php в будущем:',
  'PLEASE WRITE THIS CODE DOWN IN CASE YOU ARE GOING TO REMOVE ":filename"' => 'ПОЖАЛУЙСТА, ЗАПИШИТЕ ЭТОТ КОД НА СЛУЧАЙ, ЕСЛИ ВЫ СОБИРАЕТЕСЬ УДАЛИТЬ ":filename"',
  'Creating directory: [:dirname]... ' => 'Идет создание директории: [:dirname]...',
  'Already exists' => 'Уже существует',
  'Failed to create directories' => 'Не удалось создать директории',
  'Creating file: [:filename]... ' => 'Идет создание файла: [:filename]...',
  'Failed to create files' => 'Не удалось создать файлы',
  'Click here to see more details' => 'Нажмите здесь для получения подробной информации',
  'Failed' => 'Внимание',
  'Skipped' => 'Пропущено',
  'Fatal error' => 'Неустранимая ошибка',
  'Please correct the error(s) before proceeding to the next step.' => 'Пожалуйста, исправьте ошибку(и), прежде чем перейти к следующему шагу',
  'Please correct the error(s) before proceeding to the next step or get help.' => 'Пожалуйста, исправьте ошибку(и), прежде чем перейти к следующему шагу. Если вы не знаете, как решить проблему, пожалуйста, обратитесь за помощью к <em>хостинг-провайдеру</em> или отправьте нам <em>сведения об ошибке установки</em>, специалисты X‑Cart помогут вам найти решение.',
  'Warning' => 'Внимание',
  'Installation script renamed to :filename' => 'Файл установки переименован в :filename',
  'Warning! Installation script renaming failed' => 'Внимание! Не удалось переименовать файл установки.',
  'Incorrect auth code! You cannot proceed with the installation.' => 'Неверный код авторизации! Установка не может быть продолжена.',
  'Config file not found (:filename)' => 'Файл конфигурации (:filename) не найден',
  'Cannot open config file \':filename\' for writing!' => 'Не удалось открыть для записи файл конфигурации  \':filename\'',
  'Config file \':filename\' write failed!' => 'Не удалось сделать запись в файле конфигурации \':filename\'! Отказано в доступе.',
  'You must accept the License Agreement to proceed with the installation. If you do not agree with the terms of the License Agreement, do not install the software.' => 'Чтобы начать установку, необходимо принять условия Лицензионного соглашения. Если вы не принимаете условия Лицензионного соглашения, не устанавливайте программное обеспечение.',
  'Environment checking' => 'Проверка среды',
  'Inspecting server configuration' => 'Проверка конфигурации сервера',
  'Environment' => 'Среда',
  'Environment checking failed' => 'Проверка среды не завершена',
  'Critical dependencies' => 'Критические требования',
  'Critical dependency failed' => 'Критическое требование не выполнено',
  'Critical dependencies failed' => 'Необходимые библиотеки или программное обеспечение отсутствует',
  'Non-critical dependencies' => 'Некритические требования',
  'Non-critical dependencies failed' => 'Рекомендованные библиотеки или программное обеспечение не найдено',
  'Web server name' => 'Имя web-сервера',
  'Hostname of your web server (E.g.: www.example.com).' => 'Имя хоста сервера (например, www.example.com)',
  'Secure web server name' => 'Безопасное имя web-сервера',
  'Hostname of your secure (HTTPS-enabled) web server (E.g.: secure.example.com). If omitted, it is assumed to be the same as the web server name.' => 'Безопасный (HTTPS-enabled) web-сервер (например: secure.example.com).<br />Если пропущен, то предполагается, что это совпадает с именем веб-сервера.',
  'X-Cart web directory' => 'Веб-директория X‑Cart',
  'Path to X-Cart files within the web space of your web server (E.g.: /shop).' => 'Путь к файлам X‑Cart на сервере (напр., /shop).',
  'MySQL server name' => 'Имя MySQL сервера',
  'Hostname or IP address of your MySQL server.' => 'Имя хоста MySQL сервера или IP адрес',
  'MySQL server port' => 'Порт MySQL сервера',
  'If your database server is listening to a non-standard port, specify its number (e.g. 3306).' => 'Если ваш сервер использует нестандартный порт, укажите его здесь (например 3306)',
  'MySQL server socket' => 'Сокет MySQL сервера',
  'If your database server is used a non-standard socket, specify it (e.g. /tmp/mysql-5.1.34.sock).' => 'Если ваш сервер базы использует нестандартный сокет, укажите его здесь (напр., /tmp/mysql-5.1.34.sock).',
  'MySQL database name' => 'Имя MySQL базы данных',
  'Name of a new or existing database to use.' => 'Имя новой или существующей базы данных.',
  'MySQL username' => 'Имя пользователя MySQL',
  'MySQL username. The user must have full access to the database specified above.' => 'Имя пользователя MySQL. Пользователь должен иметь полный доступ к вышеобозначенной базе данных.',
  'MySQL password' => 'MySQL пароль',
  'Password for the above MySQL username.' => 'Пароль вышеупомянутого MySQL пользователя',
  'Install sample catalog' => 'Установить демонстрационный каталог',
  'Specify whether you would like to setup sample categories and products?' => 'Установить пробные категории и товары?',
  'Yes' => 'Да',
  'No' => 'Нет',
  'The web server name and/or web drectory is invalid! Press \'BACK\' button and review web server settings you provided' => 'Неверное имя веб-сервера и/или веб-директории! Нажмите кнопку \'НАЗАД\' и проверьте введенные настройки веб-сервера.',
  'Cannot open file \':filename\' for writing. To install the software, please correct the problem and start the installation again...' => 'Не удалось открыть файл \':filename\' для редактирования. Устраните проблему и запустите установку снова.',
  'Installation Wizard has detected X-Cart tables' => 'Мастер Установки обнаружил, что в указанной вами базе данных уже есть таблицы X‑Cart. Если установка будет продолжена, таблицы будут удалены. <br /><br />Нажмите \'Назад\', чтобы указать другую базу данных, или \'Далее\', чтобы продолжить установку и переписать существующую базу данных.',
  'pdo-error-2005' => 'Не удалось установить соединение с MySQL сервером. Проверьте правильность имени MySQL сервера<span class="pdo-details" onclick="javascript: toggleSection(\'pdo-error\');">Подробнее</span><div class="section section-pdo-error">:pdoerr</div><br />Нажмите НАЗАД\' и проверьте введенные настройки MySQL сервера.',
  'pdo-error-1044' => 'Пользователь <i>:dbuser</i> не имеет доступа к базе данных <i>:dbname</i>. Проверьте правильность имени MySQL базы данных.<span class="pdo-details" onclick="javascript: toggleSection(\'pdo-error\');">Подробнее</span><div class="section section-pdo-error">:pdoerr</div><br />Нажмите НАЗАД\' и проверьте введенные настройки MySQL сервера.',
  'pdo-error-1045' => 'Не удалось установить соединение с MySQL сервером. Проверьте правильность указанных имени пользователя и пароля.<span class="pdo-details" onclick="javascript: toggleSection(\'pdo-error\');">Подробнее</span><div class="section section-pdo-error">:pdoerr</div><br />Нажмите НАЗАД\' и проверьте введенные настройки MySQL сервера.',
  'pdo-error-common' => 'Не удалось установить соединение с MySQL сервером.<span class="pdo-details" onclick="javascript: toggleSection(\'pdo-error\');">Подробнее</span><div class="section section-pdo-error">:pdoerr</div><br />Нажмите НАЗАД\' и проверьте введенные настройки MySQL сервера.',
  'The database <i>:dbname</i> cannot be created automatically:pdoerr.<br /> Please go back, create it manually and then proceed with the installation process again.' => 'Невозможно создать базу данных <i>:dbname</i> автоматически:pdoerr.<br /> Пожалуйста, вернитесь на предыдущий шаг, создайте базу вручную и продолжите установку.',
  'You must provide web server name' => 'Необходимо указать имя сервера',
  'You must provide MySQL server name' => 'Необходимо указать имя MySQL сервера',
  'You must provide MySQL username' => 'Необходимо указать имя пользователя MySQL',
  'You must provide MySQL database name' => 'Необходимо указать имя MySQL базы данных',
  'Building cache notice' => 'Идет подготовка вашего магазина к работе. Обычно, это занимает не больше минуты. По завершении процесса, нажмите \'Далее\' и приступайте к работе.',
  'E-mail' => 'E-mail',
  'E-mail address of the store administrator' => 'Адрес электронной почты администратора магазина',
  'Password' => 'Пароль',
  'E-mail and password that you provide on this screen will be used to create primary administrator profile. Use them as credentials to access the Administrator Zone of your online store.' => 'E-mail-адрес и пароль, введенные на этой странице, будут использованы для создания основного администраторского профиля. Они являются именем пользователя и паролям для входа в основную учетную запись администратора.',
  'Please, enter non-empty password' => 'Пожалуйста, введите пароль',
  'Please, specify a valid e-mail address!' => 'Пожалуйста, укажите действующий e-mail-адрес',
  'file_permissions.error_message_1' => 'Недостаточно прав для выполнения процесса. Пожалуйста, убедитесь, что следующие файлы доступны для записи:' . PHP_EOL . '<br /><i class="copy2clipboard fa fa-clipboard"></i><div class="copy2clipboard-alert alert-success" style="display: none;"></div><div class="permissions-list">:pathsList</div>',
  'file_permissions.error_message_2' => 'Недостаточно прав для выполнения процесса. Убедитесь, что выставлены следующие права доступа (Только на системах типа UNIX):' . PHP_EOL . '<br /><i class="copy2clipboard fa fa-clipboard"></i><div class="copy2clipboard-alert alert-success" style="display: none;"></div><div class="permissions-list">:pathsList</div>'. PHP_EOL . 'Такие права доступа необходимы для беспрепятственной автоматической установки или обновления X-Cart на вашем сервере. Они не учитывают специфической конфигурации вашего сервера и каких-либо требований безопасности. По завершении процесса необходимо выставить более строгие ограничения прав. <a target="_blank" href="https://kb.x-cart.ru/setting_up_x-cart_5_environment/secure_configuration.html#почему-x-cart-требует-права-доступа-666777">Узнать больше.</a>',
  'Copied to clipboard' => 'Скопировано в буфер обмена',
  'Copy to clipboard' => 'Копировать в буфер обмена',
  'Cache building procedure failed: :message' => 'Не удалось сгенерировать кеш:<br />\n:message',
  'License agreement' => 'Лицензионное соглашение',
  'Configuring X-Cart' => 'Настройка параметров X‑Cart',
  'Setting up templates' => 'Установка темплейтов',
  'Building cache' => 'Генерируем кеш',
  'Creating administrator account' => 'Создание аккаунта администратора',
  'Building cache: Pass #:step...' => 'Генерация кеша: Шаг #:step...',
  'Cache is built' => 'Кеш сгенерирован',
  'Click here to redirect' => 'Нажмите здесь для перехода',
  'Reason: memory_get_usage() is disabled on your hosting.' => 'Причина: опция memory_get_usage() отключена на вашем сервере',
  'Fatal error: Invalid current step. Stopped.' => 'Неустранимая ошибка: Текущий шаг не выполнен. Установка приостановлена.',
  'Internal error: function :funcname() not found' => 'Внутренняя ошибка: функция :funcname() не найдена',
  'Installation Wizard' => 'Мастер Установки',
  'Version' => 'Версия',
  'Step :step' => 'Шаг :step',
  'This installer requires JavaScript to function properly.<br />Please enable Javascript in your web browser.' => 'Для работы скрипта установки необходим JavaScript.<br />Пожалуйста, активтруйте Javascript в своем браузере.',
  'Back' => 'Назад',
  'Try again' => 'Попробуйте снова',
  'Next' => 'Далее',
  'Re-check' => 'Повторить проверку',
  'Status' => 'Статус',
  'Non-critical dependency failed' => 'Рекомендованные библиотеки или программное обеспечение не найдено',
  'requirements_failed_text' => 'Пожалуйста, обратитесь к своему <em>провайдеру хостинга</em> или отправьте нам <em>сведения об ошибке установки</em>, и наши специалисты помогут вам найти решение.',
  'Send a report' => 'Техподдержка',
  'Send report and get a help' => 'Отправить отчет и получить помощь',
  'requirement_warning_text' => 'Конфигурация сервера неблагоприятна для установки. Это может привести к частичной или полной неработоспособности магазина X‑Cart 5. <br />Продолжить установку все равно?',
  'Yes, I want to continue the installation.' => 'Да, я хочу продолжить установку.',
  '[original report]' => '[original report]',
  '[replicated report]' => '[replicated report]',
  'Report generation failed.' => 'Отчет не создан',
  'Technical problems report' => 'Отчет о технических проблемах',
  'See details' => 'Подробнее',
  'Hide details' => 'Скрыть детали',
  'Additional comments' => 'Дополнительные комментарии',
  'Close window' => 'Закрыть окно',
  'Auth code' => 'Код авторизации',
  'Prevents unauthorized use of installation script' => 'Предотвращает неавторизованное использование<br />скрипта установки',
  'I accept the License Agreement' => 'Я принимаю условия соглашения и <a href="https://www.x-cart.ru/privacy-policy.html?utm_source=XC5Install&amp;utm_medium=acceptLA&amp;utm_campaign=XC5Install" target="_blank">Правила соблюдения конфиденциальности</a>',
  'Could not find license agreement file.<br />Aborting installation.' => 'Файл лицензионного соглашения не найден.<br />Прекращение установки.',
  'php_version.label_message' => 'Версии PHP <b>:minPhpVersion+</b> поддерживаются.',
  'php_disabled_functions.label_message' => 'Обнаружено, что некоторые функции, используемые X‑Cart 5, отключены. Убедитесь, что эти функции не упомянуты в опции "disable_functions", и все php-расширения, необходимые для работы этих функций, активированы в файле php.ini. Пожалуйста, устраните проблему и попробуйте снова.',
  'php_memory_limit.label_message' => 'Значение PHP опции memory_limit должно быть как минимум :memoryLimitMin.',
  'php_pdo_mysql.label_message' => 'При поддержке MySQL,  расширение PDO необходимо для подключения X‑Cart 5 к базе данных. Пожалуйста, убедитесь, что это расширение включено в файле php.ini, и попробуйте еще раз.',
  'php_file_uploads.label_message' => 'Конфигурация сервера, на котором будет установлен X‑Cart 5, отвечает системным требованиям; тем не менее, на сервере обнаружены некоторые проблемы с серверным программным обеспечением, которые могут отрицательно повлиять на работе X‑Cart 5.<br /><br />Для стабильной работы X‑Cart 5 в значении переменной upload_max_filesize в файле in php.ini необходимо указать максимальный допустимый размер загружаемых файлов.',
  'php_upload_max_file_size.label_message' => 'Для стабильной работы X‑Cart 5 в значении переменной upload_max_filesize в файле in php.ini необходимо указать максимальный допустимый размер загружаемых файлов. Пожалуйста, исправьте значение этого параметра или обратитесь в техподдержку хостинг-провайдера.',
  'php_gdlib.label_message' => 'GDLib версии 2.0 или выше требуется для автоматической генерации уменьшенных изображений товаров из изображений товаров и для некоторых других модулей. Библиотека GDLib должна включать libJpeg (убедитесь, что сконфигурирована PHP опция  --with-jpeg-dir=DIR, где DIR - это директория установки libJpeg). Пожалуйста, обратитесь в поддержку своего хостинг-провайдера для настройки этого параметра.',
  'php_phar.label_message' => 'Расширение Phar необходимо для установки внешних модулей для X‑Cart 5 и обновлений с Маркетплейса. Рекомендуется использовать Phar версии 2.0.1 или новее, иначе, возможен сбой в работе. Пожалуйста, обратитесь в поддержку своего хостинг-провайдера для настройки данного параметра.',
  'https_bouncer.label_message' => 'Поддержка безопасного протокола HTTPS, наличии действующего SSL-сертификата и модуль LibCURL необходимы для обработки кредитных карт через Authorize.NET, PayPal и другие платежные системы, предоставляющие услуги расчета стоимости доставки в режиме реального времени (для этого ваш сайт должен воспринимать безопасное подключение посредством HTTPS/SSL). Пожалуйста, обратитесь в техподдержку своего хостинг-провайдера для настройки данных параметров.',
  'xml_support.label_message' => 'PHP расширения Xml/EXPAT и DOMDocument необходимы для работы модулей, предоставляющих возможность расчета стоимости доставки в режиме реального времени, а также, для платежных модулей и корректной работы e-mail уведомлений. Пожалуйста, обратитесь в техподдержку своего хостинг-провайдера для настройки данных параметров.',
  'loopback_request.label_message' => 'Страница Мои Приложения (service.php) не доступна, пожалуйста <a href="https://www.x-cart.com/contact-us.htmlutm_source=XC5Install&amp;utm_medium=reqsFailure&amp;utm_campaign=XC5Install">свяжитесь с нами</a>',
  'loopback_request.error_message_1' => 'Страница Мои Приложения (service.php) не доступна, пожалуйста <a href="https://www.x-cart.com/contact-us.htmlutm_source=XC5Install&amp;utm_medium=reqsFailure&amp;utm_campaign=XC5Install">свяжитесь с нами</a>',
  'DocBlocks support' => 'Поддержка DocBlocks',
  'doc_blocks_support.error_message_1' => 'PHP на вашем сервере не поддерживает DocBlock. Эта система необходима для работы X‑Cart 5.',
  'doc_blocks_support.error_message_2' => 'PHP на вашем сервере не поддерживает DocBlock. Эта система необходима для работы X‑Cart 5. Блокировка DocBlock может быть вызвана работой расширения eAccelerator. Отключите это расширение и попробуйте снова.',
  'doc_blocks_support.label_message' => 'Комментарии Docblocks используются X‑Cart 5 и не должны быть доступны другим PHP расширениям.<br /><br />Если работает расширение eAccelerator, загрузите его в файл php.ini или перенастройте eAccelerator с помощью параметра --with-eaccelerator-doc-comment-inclusion, затем, удалите кеш расширения eAccelerator.',
  'file_permissions.kb_message' => 'Посмотрите в нашем <a href="https://kb.x-cart.ru/general_setup/installation_guide.html#2сбой-проверки-прав-доступа" target="_blank">руководстве</a> как решить проблему с правами файлов.',
  'php_disable_functions.kb_message' => 'Посмотрите в нашем <a href="https://kb.x-cart.ru/general_setup/installation_guide.html#3-отключенные-функции" target="_blank">руководстве</a> как решить проблему с отключенными PHP функциями.',
  'php_pdo_mysql.kb_message' => 'Посмотрите в нашем <a href="https://kb.x-cart.ru/general_setup/installation_guide.html#4-отключенные-php-расширения" target="_blank">руководстве</a> как решить проблему с библиотекой PDO.',
  'https_bouncer.kb_message' => 'Посмотрите в нашем <a href="https://kb.x-cart.ru/general_setup/installation_guide.html#5-https-баунсер-не-установлен" target="_blank">руководстве</a> как решить проблему с библиотекой libCurl.',
  'kb_note_mysql_issue' => 'Посмотрите в нашем <a href="https://kb.x-cart.ru/general_setup/installation_guide.html#1-проблемы-с-подключением-к-базе-данных" target="_blank">руководстве</a> как решить проблему с MySQL соединением.',
  'Redirecting to the next step...' => 'Переход на следующий шаг...',
  'Preparing data for cache generation...' => 'Подготовка данных для генерации кеша...',
  'Config file' => 'Файл конфигурации',
  'config_file.label_message' => 'Файл конфигурации не существует, и его нельзя скопировать из стандартного файла конфигурации. Данный файл необходим для установки программы.<br /><br />Пожалуйста, выполните следующие действия: <br /><br />1. Откройте директорию :configPath<br />2. Скопируйте <i>:defaultConfigFileName</i> to <i>:configFileName</i><br />3. Установите права на запись <i>:configFileName</i><br /><br />Попробуйте снова.',
  'Oops!' => 'Ой!',
  'The current step of the cache rebuilding process is taking longer than expected. Check for possible problems <a href="https://kb.x-cart.com/pages/viewpage.action?pageId=7504578" target="_blank">here</a>.' => 'Текущий шаг процедуры перестройки кэша длится дольше, чем ожидалось. <a href="https://kb.x-cart.com/en/setting_up_x-cart_5_environment/setting_time_limit_of_your_server.html" target="_blank" >Проверьте</a>, что может вызывать эту проблему.',
  'user_email_hint' => 'Чтобы мониторить эту проблему и получить решение, пожалуйста, укажите свой электронный адрес.',
  'Passed' => 'OK',
  'Default time zone' => 'Часовой пояс по умолчанию',
  'By default, dates in this site will be displayed in the chosen time zone.' => 'По умолчанию, календарная дата на этом сайте будет отображаться для выбранного часового пояса.',
  'The prefix of the shop tables in database' => 'Префикс для таблиц в базе данных',
  'Default charset' => 'Кодировка по умолчанию',
  'Administrator zone (backoffice)' => 'Панель администрирования',
  'Customer zone (front-end)' => 'Витрина (главная страница)',
  'Setting up directories' => 'Настройка директорий',
  'X-Cart shopping cart software v. :version' => 'Интернет-магазин на платформе X‑Cart :version',
  'xcart_site' => 'https://www.x-cart.ru/?utm_source=XC5Install&utm_medium=installFooter&utm_campaign=XC5Install',
  'Advanced server settings' => 'Расширенные настройки сервера',
  'Advanced MySQL settings' => 'Расширенные настройки MySQL',
  'Please, enter more strong password' => 'Введите более сложный пароль',
  'Show password' => 'Посмотреть пароль',
  'Hide password' => 'Скрыть пароль',
  'Very weak' => 'Очень простой',
  'Weak' => 'Простой',
  'Medium' => 'Средний',
  'Strong' => 'Сложный',
  'Uploading dump.sql into database...' => 'Загрузка SQL-дампа в базу данных...',
  'Redirecting to the next step...' => 'Переход на следующий шаг...',
  'Get first 30 days for FREE' => 'Получи первые 30 дней бесплатно',
  'Create Online Store with X‑Cart!' => 'Создайте интернет-магазин с X-Cart!',
  'No limitations or transaction fees, Open source code for easy customization, Great 24/7 support' => 'Без ограничений или комиссий за транзакции, открытый исходный код для легкой настройки, поддержка 24/7',
  'Having trouble installing X-Cart? Check out our installation guide' => 'Проблемы с установкой X-Cart?<br />Найдите решение в <a href="https://kb.x-cart.ru/general_setup/installation_guide.html" target="_blank">руководстве</a>',
  'X-Cart can track and store user actions to improve the UI/UX and merchant experience. You can stop user action tracking at any time by removing the Concierge module.' => 'X-Cart может отслеживать и хранить историю действий пользователя для улучшения механизма взаимодействия с пользователем и предоставления продавцу расширенных возможностей взаимодействия с сайтом магазина. Вы можете отключить отслеживание действий пользователя в любой момент удалив модуль Concierge.',
  'config_file.error_message_1' => 'Файл конфигурации не существует, и его нельзя скопировать из стандартного файла конфигурации. Данный файл необходим для установки программы.<br /><br />Пожалуйста, выполните следующие действия: <br /><br />1. Откройте директорию :configPath<br />2. Скопируйте <i>:defaultConfigFileName</i> to <i>:configFileName</i><br />3. Установите права на запись <i>:configFileName</i><br /><br />Попробуйте снова.',
  'php_disabled_functions.error_message_1' => 'Следующие функции отключены:<br/>:missedFunctions<br/>Данные функции могут использоваться программным обеспечением в некоторых случаях, и их рекомендуется включить.',
  'mysql_version.error_message_2' => 'Сервер MySQL не поддерживает систему InnoDB. InnoDB необходима для корректной работы X-Cart.',
  'php_gdlib.error_message_2' => 'У расширения GDlib отсутствует плагин JPEG.',
  'php_phar.error_message_1' => 'Для получения обновлений и установки модулей требуется расширение Phar версии 2.0.1 или выше; в противном случае корректность работы данных функций не гарантируется.',
  'frame_options.error_message_1' => 'Ваш сервер отдает заголовок X-Frame-Options с значением DENY. Для успешной установки X-Cart необходимо настроить эту опцию так, что ее значение было SAMEORIGIN или ALLOW-FROM хост_сервера. После установки X-Cart можно изменить значение на DENY, если это требуется.',
  'frame_options.label_message' => 'Заголовок сервера X-Frame-Options используется для того, чтобы ограничить использование сайта внутри фреймов.<br>Ваш сервер отдает заголовок X-Frame-Options с значением DENY.<br>Для успешной установки X-Cart необходимо настроить эту опцию так, что ее значение было SAMEORIGIN или ALLOW-FROM хост_сервера. После установки X-Cart можно изменить значение на DENY, если это требуется.',
);
