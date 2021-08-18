<?php die(1); ?>
[18-Aug-2021 07:28:08] Error (code: 0): An exception occurred in driver: SQLSTATE[HY000] [2002] Connection refused
Server API: apache2handler;
Request method: GET;
URI: /;
Backtrace: 
#0 /var/www/html/vendor/doctrine/dbal/lib/Doctrine/DBAL/DBALException.php(166): convertException()
#1 /var/www/html/vendor/doctrine/dbal/lib/Doctrine/DBAL/DBALException.php(154): wrapException()
#2 /var/www/html/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOMySql/Driver.php(28): driverException()
#3 /var/www/html/vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php(362): connect()
#4 /var/www/html/vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php(428): connect()
#5 /var/www/html/vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php(388): getDatabasePlatformVersion()
#6 /var/www/html/vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php(330): detectDatabasePlatform()
#7 /var/www/html/vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php(1202): getDatabasePlatform()
#8 /var/www/html/var/run/classes/XLite/Core/Connection.php(27): setNestTransactionsWithSavepoints()
#9 /var/www/html/vendor/doctrine/dbal/lib/Doctrine/DBAL/DriverManager.php(199): __construct()
#10 /var/www/html/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php(891): getConnection()
#11 /var/www/html/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php(871): createConnection()
#12 /var/www/html/var/run/classes/XLite/Core/DatabaseAbstract.php(381): create()
#13 /var/www/html/var/run/classes/XLite/Module/QSL/CloudSearch/Core/DatabaseDecorator.php(28): startEntityManager()
#14 /var/www/html/var/run/classes/XLite/Core/DatabaseAbstract.php(365): startEntityManager()
#15 /var/www/html/var/run/classes/XLite/Core/DatabaseAbstract.php(299): connect()
#16 /var/www/html/var/run/classes/XLite/Base/Singleton.php(34): __construct()
#17 /var/www/html/var/run/classes/XLite/Core/DatabaseAbstract.php(133): getInstance()
#18 /var/www/html/var/run/classes/XLite/Core/DatabaseAbstract.php(151): getEM()
#19 /var/www/html/var/run/classes/XLite/Module/XC/ThemeTweaker/Core/Database.php(28): getRepo()
#20 /var/www/html/var/run/classes/XLite/Core/Config.php(86): getRepo()
#21 /var/www/html/var/run/classes/XLite/Core/Config.php(68): readFromDatabase()
#22 /var/www/html/var/run/classes/XLite/Core/Config.php(32): readConfig()
#23 /var/www/html/top.inc.php(35): getInstance()
#24 /var/www/html/cart.php(14): require_once()
#25 /var/www/html/index.php(9): require_once()


