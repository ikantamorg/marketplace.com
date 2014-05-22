<?php
/**
 * bulgarian language file
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author Nikolay Vladimirov <nikolay@vladimiroff.com>
 * @author Viktor Usunov <usun0v@mail.bg>
 * @author Kiril <neohidra@gmail.com>
 */

// for admin plugins, the menu prompt to be displayed in the admin menu
// if set here, the plugin doesn't need to override the getMenuText() method
$lang['menu']       = 'Настройки';

$lang['error']      = 'Обновяването на настройките не е възможно, поради невалидна стойност, моля, прегледайте промените си и пробвайте отново.
                       <br />Неверните стойности ще бъдат обградени с червена рамка.';
$lang['updated']    = 'Обновяването на настройките е успешно.';
$lang['nochoice']   = '(няма друг възможен избор)';
$lang['locked']     = 'Обновяването на файла с настройките не е възможно, ако това не е нарочно, проверете,<br />
                       дали името на локалния файл с настройки и правата са верни.';

$lang['danger']     = 'Внимание: промяна на опцията може да направи Wiki-то и менюто за настройване недостъпни.';
$lang['warning']    = 'Предупреждение: промяна на опцията може предизвика нежелани последици.';
$lang['security']   = 'Предупреждение: промяна на опцията може да представлява риск за сигурността.';

/* --- Config Setting Headers --- */
$lang['_configuration_manager'] = 'Диспечер на настройките'; //same as heading in intro.txt
$lang['_header_dokuwiki'] = 'Настройки на DokuWiki';
$lang['_header_plugin']  = 'Настройки на приставки';
$lang['_header_template'] = 'Настройки на шаблона';
$lang['_header_undefined'] = 'Неопределени настройки';

/* --- Config Setting Groups --- */
$lang['_basic'] = 'Основни настройки';
$lang['_display'] = 'Настройки за изобразяване';
$lang['_authentication'] = 'Настройки за удостоверяване';
$lang['_anti_spam'] = 'Настройки за борба със SPAM-ма';
$lang['_editing'] = 'Настройки за редактиране';
$lang['_links'] = 'Настройки на препратките';
$lang['_media'] = 'Настройки на медията';
$lang['_notifications'] = 'Настройки за известяване';
$lang['_syndication']   = 'Настройки на RSS емисиите';
$lang['_advanced'] = 'Допълнителни настройки';
$lang['_network'] = 'Мрежови настройки';

/* --- Undefined Setting Messages --- */
$lang['_msg_setting_undefined'] = 'Няма метаданни за настройките.';
$lang['_msg_setting_no_class'] = 'Няма клас настройки.';
$lang['_msg_setting_no_default'] = 'Няма стандартна стойност.';

/* -------------------- Config Options --------------------------- */

/* Basic Settings */
$lang['title']      = 'Заглавие за Wiki-то, тоест името';
$lang['start']      = 'Име на началната страница';
$lang['lang']       = 'Език на интерфейса';
$lang['template']   = 'Шаблон (определя вида на страниците)';
$lang['tagline']    = 'Подзаглавие - изобразява се под името на Wiki-то (ако се поддържа от шаблона)';
$lang['sidebar']    = 'Име на страницата за страничната лента (ако се поддържа от шаблона). Оставите ли полето празно лентата ще бъде изключена';
$lang['license']    = 'Под какъв лиценз да бъде публикувано съдържанието?';
$lang['savedir']    = 'Директория за записване на данните';
$lang['basedir']    = 'Главна директория (напр. <code>/dokuwiki/</code>). Оставете празно, за да бъде засечена автоматично.';
$lang['baseurl']    = 'URL адрес (напр. <code>http://www.yourserver.com</code>). Оставете празно, за да бъде засечен автоматично.';
$lang['cookiedir']  = 'Път за бисквитките. Оставите ли полето празно ще се ползва горния URL адрес.';
$lang['dmode']      = 'Режим (права) за създаване на директории';
$lang['fmode']      = 'Режим (права) за създаване на файлове';
$lang['allowdebug'] = 'Включване на режи debug - <b>изключете, ако не е нужен!</b>';

/* Display Settings */
$lang['recent']      = 'Скорошни промени - брой еленти на страница';
$lang['recent_days'] = 'Колко от скорошните промени да се пазят (дни)';
$lang['breadcrumbs'] = 'Брой на следите. За изключване на функцията задайте 0.';
$lang['youarehere']  = 'Йерархични следи (в този случай можете да изключите горната опция)';
$lang['fullpath']    = 'Показване на пълния път до страниците в долния колонтитул.';
$lang['typography']  = 'Замяна на последователност от символи с типографски еквивалент';
$lang['dformat']     = 'Формат на датата (виж. <a href="http://www.php.net/strftime">strftime</a> функцията на PHP)';
$lang['signature']   = 'Подпис - какво да внася бутона "Вмъкване на подпис" от редактора';
$lang['showuseras']  = 'Какво да се показва за потребителя, който последно е променил дадена страницата';
$lang['toptoclevel'] = 'Главно ниво (заглавие) за съдържанието';
$lang['tocminheads'] = 'Минимален брой заглавия, определящ дали да бъде създадено съдържание';
$lang['maxtoclevel'] = 'Максимален брой нива (заглавия) за включване в съдържанието';
$lang['maxseclevel'] = 'Максимален брой нива предоставяни за самостоятелно редактиране';
$lang['camelcase']   = 'Ползване на CamelCase за линкове';
$lang['deaccent']    = 'Почистване имената на страниците (на файловете)';
$lang['useheading']  = 'Ползване на първото заглавие за име на страница';
$lang['sneaky_index'] = 'Стандартно DokuWiki ще показва всички именни пространства в индекса. Опцията скрива тези, за които потребителят няма права за четене. Това може да доведе и до скриване на иначе достъпни подименни пространства. С определени настройки на списъците за контрол на достъпа (ACL) може да направи индекса неизползваем. ';
$lang['hidepages']   = 'Скриване на страниците съвпадащи с този регулярен израз(regular expressions)';

/* Authentication Settings */
$lang['useacl']      = 'Ползване на списъци за достъп';
$lang['autopasswd']  = 'Автоматично генериране на пароли, на нови потребители и пращане по пощата';
$lang['authtype']    = 'Метод за удостоверяване';
$lang['passcrypt']   = 'Метод за криптиране на паролите';
$lang['defaultgroup']= 'Стандартна група';
$lang['superuser']   = 'Супер потребител -  група, потребител или списък със стойности разделени чрез запетая (user1,@group1,user2) с пълен достъп до всички страници и функции без значение от настройките на списъците за достъп (ACL)';
$lang['manager']     = 'Управител - група, потребител или списък със стойности разделени чрез запетая (user1,@group1,user2) с достъп до определени управленски функции ';
$lang['profileconfirm'] = 'Потвърждаване на промени в профила с парола';
$lang['rememberme'] = 'Ползване на постоянни бисквитки за вписване (за функцията "Запомни ме")';
$lang['disableactions'] = 'Изключване функции на DokuWiki';
$lang['disableactions_check'] = 'Проверка';
$lang['disableactions_subscription'] = 'Абониране/Отписване';
$lang['disableactions_wikicode'] = 'Преглед на кода/Експортиране на оригинална версия';
$lang['disableactions_other'] = 'Други действия (разделени със запетая)';
$lang['auth_security_timeout'] = 'Автоматично проверяване на удостоверяването всеки (сек)';
$lang['securecookie'] = 'Да се изпращат ли бисквитките зададени чрез HTTPS, само чрез HTTPS от браузъра? Изключете опцията, когато SSL се ползва само за вписване, а четенето е без SSL.';
$lang['remote']      = 'Включване на системата за отдалечен API достъп. Това ще позволи на приложения да се свързват с DokuWiki чрез XML-RPC или друг механизъм.';
$lang['remoteuser']  = 'Ограничаване на отдалечения API достъп - активиране само за следните групи и потребители (отделени със запетая). Ако оставите полето празно всеки ще има достъп достъп.';

/* Anti-Spam Settings */
$lang['usewordblock']    = 'Блокиране на SPAM въз основа на на списък от думи';
$lang['relnofollow']     = 'Ползване на rel="nofollow" за външни препратки';
$lang['indexdelay']      = 'Забавяне преди индексиране (сек)';
$lang['mailguard']       = 'Промяна на адресите на ел. поща (във форма непозволяваща пращането на SPAM)';
$lang['iexssprotect']    = 'Проверяване на качените файлове за вероятен зловреден JavaScript и HTML код';

/* Editing Settings */
$lang['usedraft']   = 'Автоматично запазване на чернова по време на редактиране';
$lang['htmlok']     = 'Разрешаване вграждането на HTML код';
$lang['phpok']      = 'Разрешаване вграждането на PHP код';
$lang['locktime']   = 'Макс. период за съхраняване на заключените файлове (сек)';
$lang['cachetime']  = 'Макс. период за съхраняване на кеша (сек)';

/* Link settings */
$lang['target____wiki']      = 'Прозорец за вътрешни препратки';
$lang['target____interwiki'] = 'Прозорец за препратки към други Wiki сайтове';
$lang['target____extern']    = 'Прозорец за външни препратки';
$lang['target____media']     = 'Прозорец за медийни препратки';
$lang['target____windows']   = 'Прозорец за препратки към Windows';

/* Media Settings */
$lang['mediarevisions'] = 'Да се пазят ли стари версии на качените файлове (Mediarevisions)?';
$lang['refcheck']    = 'Проверка за препратка към медия, преди да бъде изтрита';
$lang['gdlib']       = 'Версия на GD Lib';
$lang['im_convert']  = 'Път до инструмента за трансформация на ImageMagick';
$lang['jpg_quality'] = 'Качество на JPG компресията (0-100)';
$lang['fetchsize']   = 'Максимален размер (байтове), който fetch.php може да сваля';

/* Notification Settings */
$lang['subscribers'] = 'Включване на поддръжката за абониране към страници';
$lang['subscribe_time'] = 'Време след което абонаментните списъци и обобщения се изпращат (сек); Трябва да е по-малко от времето определено в recent_days.';
$lang['notify']      = 'Пращане на съобщения за промени по страниците на следната eл. поща';
$lang['registernotify'] = 'Пращане на информация за нови потребители на следната ел. поща';
$lang['mailfrom']    = 'Ел. поща, която да се ползва за автоматично изпращане на ел. писма';
$lang['mailprefix']  = 'Представка за темите (поле subject) на автоматично изпращаните ел. писма';
$lang['htmlmail']    = 'Изпращане на по-добре изглеждащи, но по-големи по-размер HTML ел. писма. Изключете ако желаете писмата да се изпращат като чист текст.';

/* Syndication Settings */
$lang['sitemap']     = 'Генериране на Google sitemap (дни)';
$lang['rss_type']    = 'Тип на XML емисията';
$lang['rss_linkto']  = 'XML емисията препраща към';
$lang['rss_content'] = 'Какво да показват елементите на XML емисията?';
$lang['rss_update']  = 'Интервал на актуализиране на XML емисията (сек)';
$lang['rss_show_summary'] = 'Показване на обобщение в заглавието на XML емисията';
$lang['rss_media']   = 'Кой тип промени да се включват в XML мисията?';

/* Advanced Options */
$lang['updatecheck'] = 'Проверяване за за нови версии и предупреждения за сигурността? Необходимо е Dokiwiki да може да се свързва със update.dokuwiki.org за тази функционалност.';
$lang['userewrite']  = 'Ползване на nice URL адреси';
$lang['useslash']    = 'Ползване на наклонена черта за разделител на именните пространства в URL';
$lang['sepchar']     = 'Разделител между думите в имената на страници';
$lang['canonical']   = 'Ползване на напълно уеднаквени URL адреси (абсолютни адреси - http://server/path)';
$lang['fnencode']    = 'Метод за кодиране на не-ASCII именуваните файлове.';
$lang['autoplural']  = 'Проверяване за множествено число в препратките';
$lang['compression'] = 'Метод за компресия на attic файлове';
$lang['gzip_output'] = 'Кодиране на съдържанието с gzip за xhtml';
$lang['compress']    = 'Компактен CSS и javascript изглед';
$lang['cssdatauri']  = 'Максимален размер, в байтове, до който изображенията посочени в .CSS файл ще бъдат вграждани в стила (stylesheet), за да се намали броя на HTTP заявките. Техниката не работи за версиите на IE преди 8! Препоръчителни стойности: <code>400</code> до <code>600</code> байта. Въведете <code>0</code> за изключване.';
$lang['send404']     = 'Пращане на "HTTP 404/Page Not Found" за несъществуващи страници';
$lang['broken_iua']  = 'Отметнете, ако ignore_user_abort функцията не работи. Може да попречи на търсенето в страниците. Знае се, че комбинацията IIS+PHP/CGI е лоша. Вижте  <a href="http://bugs.splitbrain.org/?do=details&amp;task_id=852">Грешка 852</a> за повече информация.';
$lang['xsendfile']   = 'Ползване на Х-Sendfile header, за да може уебсървъра да дава статични файлове? Вашият уебсървър трябва да го поддържа.';
$lang['renderer_xhtml']   = 'Представяне на основните изходни данни (xhtml) от Wiki-то с';
$lang['renderer__core']   = '%s (ядрото на DokuWiki)';
$lang['renderer__plugin'] = '%s (приставка)';

/* Network Options */
$lang['dnslookups'] = 'DokuWiki ще търси имената на хостовете, на отдалечени IP адреси, от които потребители редактират страници. НЕ е желателно да ползвате опцията ако имате бавен или неработещ DNS сървър.';

/* Proxy Options */
$lang['proxy____host']   = 'Име на прокси сървър';
$lang['proxy____port']   = 'Порт за проксито';
$lang['proxy____user']   = 'Потребител за проксито';
$lang['proxy____pass']   = 'Парола за проксито';
$lang['proxy____ssl']    = 'Ползване на SSL при свързване с проксито';
$lang['proxy____except'] = 'Регулярен израз определящ за кои URL адреси да не се ползва прокси сървър.';

/* Safemode Hack */
$lang['safemodehack']    = 'Ползване на хака safemode';
$lang['ftp____host']     = 'FTP сървър за хака safemode';
$lang['ftp____port']     = 'FTP порт за хака safemode';
$lang['ftp____user']     = 'FTP потребител за хака safemode';
$lang['ftp____pass']     = 'FTP парола за хака safemode';
$lang['ftp____root']     = 'FTP главна директория за хака safemode';

/* License Options */
$lang['license_o_']      = 'Нищо не е избрано';

/* typography options */
$lang['typography_o_0']  = 'без';
$lang['typography_o_1']  = 'с изключение на единични кавички';
$lang['typography_o_2']  = 'включително единични кавички (не винаги работи)';

/* userewrite options */
$lang['userewrite_o_0']  = 'без';
$lang['userewrite_o_1']  = 'файлът .htaccess';
$lang['userewrite_o_2']  = 'вътрешно от DokuWiki ';

/* deaccent options */
$lang['deaccent_o_0']    = 'изключено';
$lang['deaccent_o_1']    = 'премахване на акценти';
$lang['deaccent_o_2']    = 'транслитерация';

/* gdlib options */
$lang['gdlib_o_0']       = 'GD Lib не е достъпна';
$lang['gdlib_o_1']       = 'Версия 1.x';
$lang['gdlib_o_2']       = 'Автоматично разпознаване';

/* rss_type options */
$lang['rss_type_o_rss']   = 'RSS версия 0.91';
$lang['rss_type_o_rss1']  = 'RSS версия 1.0';
$lang['rss_type_o_rss2']  = 'RSS версия 2.0';
$lang['rss_type_o_atom']  = 'Atom версия 0.3';
$lang['rss_type_o_atom1'] = 'Atom версия 1.0';

/* rss_content options */
$lang['rss_content_o_abstract'] = 'Извлечение';
$lang['rss_content_o_diff']     = 'Обединени разлики';
$lang['rss_content_o_htmldiff'] = 'Таблица с разликите в HTML формат';
$lang['rss_content_o_html']     = 'Цялото съдържание на HTML страницата';

/* rss_linkto options */
$lang['rss_linkto_o_diff']     = 'изглед на разликите';
$lang['rss_linkto_o_page']     = 'променената страница';
$lang['rss_linkto_o_rev']      = 'списък на версиите';
$lang['rss_linkto_o_current']  = 'текущата страница';

/* compression options */
$lang['compression_o_0']   = 'без';
$lang['compression_o_gz']  = 'gzip';
$lang['compression_o_bz2'] = 'bz2';

/* xsendfile header */
$lang['xsendfile_o_0'] = 'без';
$lang['xsendfile_o_1'] = 'Специфичен lighttpd header (преди версия 1.5)';
$lang['xsendfile_o_2'] = 'Стандартен X-Sendfile header';
$lang['xsendfile_o_3'] = 'Специфичен Nginx X-Accel-Redirect header за пренасочване';

/* Display user info */
$lang['showuseras_o_loginname']  = 'Име за вписване';
$lang['showuseras_o_username']   = 'Пълно потребителско име';
$lang['showuseras_o_email']      = 'Ел, поща (променени според настройките на mailguard)';
$lang['showuseras_o_email_link'] = 'Ел. поща под формата на връзка тип mailto:';

/* useheading options */
$lang['useheading_o_0']  = 'Никога';
$lang['useheading_o_navigation'] = 'Само за навигация';
$lang['useheading_o_content'] = 'Само за съдържанието на Wiki-то';
$lang['useheading_o_1'] = 'Винаги';

$lang['readdircache'] = 'Максимален период за съхраняване кеша на readdir (сек)';
