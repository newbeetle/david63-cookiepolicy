<?php
/**
*
* @package Cookie Policy Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Deutsche Übersetzung für >=1.1.3 von: Luke (wcsaga.org), RaudiXO (wcsaga.org)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'COOKIE_ACCEPT_TEXT'		=> 'Dieses Forum verwendet Cookies zur Verbesserung Ihres Nutzungserlebnisses. Mit dem Besuch dieses Forums stimmen Sie dieser Richtlinie zu.<br /><br />Weitere Informationen über verwendete Cookies finden Sie in der "Cookie-Richtlinie" auf der Foren-Übersicht oder durch Klick auf den nachfolgenden Link.<br /><br />',
	'COOKIE_ACCEPT'			=> '[ Akzeptieren ]',

	'COOKIE_TEXT'			=> '<h3>Wie verwendet dieses Forum Cookies?</h3>
	<p>Wir benutzen auf %1$s Cookie-Dateien zur Leistungssteigerung und zur Verbesserung des Nutzungserlebnisses. Durch Ihren Besuch auf %1$s stimmen Sie der Speicherung dieser Dateien auf Ihrem Endgerät zu.</p>
<h3>Was sind Cookies?</h3><p>Cookies sind kleine Textdateien, welche beim ersten Besuch einer Website auf dem Computer oder dem Smartphone eines Benutzers abgelegt werden können.<br /><br />
Cookies können verschiedene Funktionen beinhalten. Ein Cookie ermöglicht es z.B. Webseiten, Ihr Endgerät beim nächsten Besuch wiederzuerkennen. %1$s benutzt den Begriff “Cookies” in dieser Richtlinie in Bezug auf alle Dateien, die Informationen auf diese Art sammeln.<br /><br />
Manche Cookies beinhalten persönliche Informationen – ein Beispiel: Klickt man beim Anmelden auf “Angemeldet bleiben”, speichert ein Cookie den Benutzernamen. Die meisten Cookies sammeln keine Informationen zur Benutzeridentifizierung, sondern generelle Informationen in Bezug auf die Nutzung von %1$s, oder den Standort des Benutzers.</p>
<h3>Welche Cookie-Typen verwendet %1$s?</h3><p>Cookies können verschiedene Funktionen bereitstellen:</p>
<p><b>1. Notwendige Cookies</b><br />Einige Cookies sind zur Verwendung von %1$s unerlässlich. Ohne diese Cookies können Dienste wie eine Registrierung oder Anmeldung nicht bereitgestellt werden.</p>
<p><b>2. Leistungs-Cookies</b><br />Diese Cookies können anonymisierte Informationen darüber sammeln, wie Besucher unsere Website verwenden, z.B. welche Seiten am häufigsten besucht werden, welche Verlinkungsmethode am effektivsten ist, und zur Analyse von Fehlermeldungen.</p>
<p><b>3. Funktions-Cookies</b><br />Diese Cookies ermöglichen es uns die Funktionen und Inhalte der Seite auf Sie zugeschnitten anzubieten, indem diese Cookies Ihre Voreinstellungen speichern.</p>
<p>%1$s kann auch Drittanbietern erlauben, Cookies der oben beschriebenen Typen bereitzustellen. Wir können z.B., wie viele andere Webseiten auch, unseren Netzverkehr mit Google Analytics überwachen.</p>
<h3>Kann ein Benutzer Cookies blockieren?</h3><p>Informationen zur Verwaltung von Cookies finden Sie in der Hilfesektion Ihres Browsers oder im Handbuch Ihres Smartphones - oder Sie besuchen die unten aufgeführten Webseiten.<br /><br />
<a href="https://de.wikipedia.org/wiki/Cookie" style="text-decoration:none">de.wikipedia.org/wiki/Cookie (Deutsch)</a><br />
<a href="http://www.aboutcookies.org" style="text-decoration:none">www.aboutcookies.org (Englisch)</a><br />
<a href="http://www.allaboutcookies.org/ge/" style="text-decoration:none">www.allaboutcookies.org (Deutsch)</a></p>
<p>Bitte beachten Sie, dass nach der Deaktivierung von Cookies einige Bereiche von %1$s nicht mehr vollständig funktionieren.</p>
<h3>Cookies auf %1$s von Sozialen Netzwerk-Seiten</h3><p>%1$s kann Links von Sozialen Netzwerk-Seiten (z.B. Facebook, Twitter oder YouTube) enthalten. Diese Webseiten können ebenfalls Cookies auf Ihrem Endgerät platzieren, und %1$s hat keine Kontrolle über die Verwendung dieser Cookies. Daher schlägt %1$s vor, dass Sie sich auf deren Webseiten darüber informieren, wie Cookies verwendet werden.',

	'COOKIE_POLICY'			=> 'Cookie-Richtlinie',
));
