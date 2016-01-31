<?php
/**
*
* @package Cookie Policy Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

/// DEVELOPERS PLEASE NOTE
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
	'ALL'					=> 'Auf jeder Seite',

	'CLICK_TO_SELECT'			=> 'Klicken Sie in das Textfeld um eine Farbe zu wählen',

	'COOKIE_BOX_BDR_COLOUR'			=> 'Cookie-Fenster Rahmen-Farbe',
	'COOKIE_BOX_BDR_COLOUR_EXPLAIN'		=> 'Wählen Sie die Rahmen-Farbe für das Cookie-Akzeptieren-Fenster.<br />Die Standard Farbe ist <strong>“#FFFF8A”</strong>',
	'COOKIE_BOX_BDR_WIDTH'			=> 'Cookie-Fenster Rahmen-Breite',
	'COOKIE_BOX_BDR_WIDTH_EXPLAIN'		=> 'Wählen Sie die Rahmen-Breite für das Cookie-Akzeptieren-Fenster.<br />Die Standard Breite ist <strong>“1”</strong>',
	'COOKIE_BOX_BG_COLOUR'			=> 'Cookie-Fenster Hintergrund-Farbe',
	'COOKIE_BOX_BG_COLOUR_EXPLAIN'		=> 'Wählen Sie die Hintergrund-Farbe für das Cookie-Akzeptieren-Fenster.<br />Die Standard Farbe ist <strong>“#00608F”</strong>',
	'COOKIE_BOX_HREF_COLOUR'		=> 'Cookie-Fenster Link-Farbe',
	'COOKIE_BOX_HREF_COLOUR_EXPLAIN'	=> 'Wählen Sie die Farbe für den “Akzeptieren” Link im Cookie-Akzeptieren-Fenster.<br />Die Standard Farbe ist <strong>“#FFFFFF”</strong>',
	'COOKIE_BOX_TXT_COLOUR'			=> 'Cookie-Fenster Text-Farbe',
	'COOKIE_BOX_TXT_COLOUR_EXPLAIN'		=> 'Wählen Sie die Text-Farbe für das Cookie-Akzeptieren-Fenster.<br />Die Standard Farbe ist <strong>“#DBDB00”</strong>',
	'COOKIE_BOX_POSITION'			=> 'Cookie-Fenster Position',
	'COOKIE_BOX_POSITION_EXPLAIN'		=> 'Positioniert das Cookie-Akzeptieren-Fenster entweder links oder rechts.',

	'COOKIE_CUSTOM_PAGE'			=> 'Individuelle Farben für die Cookie-Richtlinie',
	'COOKIE_CUSTOM_PAGE_EXPLAIN'		=> 'Benutze individuelle Farben für die Seite mit der Cookie-Richtlinie.<br />Bei der Einstellung <strong>Nein</strong> werden die Standard Farben des Styles verwendet.',

	'COOKIE_DETECT'				=> 'Prüfen ob das Cookie-Fenster benötigt wird',
	'COOKIE_DETECT_EXPLAIN'			=> 'Hierbei wird versucht zu erkennen, ob der Benutzer ein EU-Bürger ist und wird den Cookie-Hinweis nur anzeigen, wenn dies zutrifft.<br /><strong>Hinweis:</strong> Diese Erkennung ist nicht absolut zuverlässig und wird nicht für Foren empfohlen, deren Großteil der Benutzer EU-Bürger sind.',

	'COOKIE_EXPIRE'				=> 'Cookie läuft ab',
	'COOKIE_EXPIRE_EXPLAIN'			=> 'Bei der Einstellung <strong>Ja</strong> muss der Benutzer die Cookie-Richtlinie jedes Jahr neu bestätigen.',

	'COOKIE_LEFT'				=> 'Links',
	'COOKIE_LOG_ERRORS'			=> 'Protokolliere Fehler',
	'COOKIE_LOG_ERRORS_EXPLAIN'		=> 'Alle Fehler werden protokolliert die bei der Überprüfung der Benutzer IP Adresse festgestellt werden.',

	'COOKIE_PAGE_BG_COLOUR'			=> 'Individuelle Hintergrund-Farbe für die Cookie-Richtlinie',
	'COOKIE_PAGE_BG_COLOUR_EXPLAIN'		=> 'Wählen Sie die Hintergrund-Farbe für die Seite mit der Cookie-Richtlinie.<br />Die Standard Farbe ist <strong>“#FFFFFF”</strong>',
	'COOKIE_PAGE_TXT_COLOUR'		=> 'Individuelle Text-Farbe für die Cookie-Richtlinie',
	'COOKIE_PAGE_TXT_COLOUR_EXPLAIN'	=> 'Wählen Sie die Text-Farbe für die Seite mit der Cookie-Richtlinie.<br />Die Standard Farbe ist <strong>“#000000”</strong>',

	'COOKIE_POLICY'				=> 'Cookie-Richtlinie (Cookie policy)',
	'COOKIE_POLICY_ENABLE'			=> 'Cookie-Fenster aktivieren',
	'COOKIE_POLICY_ENABLE_EXPLAIN'		=> 'Aktiviert/Deaktiviert das Fenster mit dem Hinweis auf Verwendung von Cookies gemäß der europäischen Cookie-Richtlinie (2012), den alle Benutzer in diesem Forum bestätigen müssen.',
	'COOKIE_POLICY_EXPLAIN'			=> 'Legen Sie die Einstellungen für die Cookie-Richtlinie fest',
	'COOKIE_POLICY_LOG'			=> '<strong>Cookie-Richtlinie Einstellungen wurden aktualisiert</strong>',
	'COOKIE_POLICY_MANAGE'			=> 'Einstellungen',
	'COOKIE_POLICY_ON_INDEX'		=> 'Anzeige des Cookie-Fensters begrenzen',
	'COOKIE_POLICY_ON_INDEX_EXPLAIN'	=> 'Zeigt das Cookie-Akzeptieren-Fenster entweder nur in der Foren-Übersicht oder auf jeder Seite.',
	'COOKIE_POLICY_OPTIONS'			=> 'Cookie-Richtlinie Einstellungen',

	'COOKIE_RIGHT'				=> 'Rechts',

	'COOKIE_SHOW_POLICY'			=> 'Cookie-Richtlinie anzeigen',
	'COOKIE_SHOW_POLICY_EXPLAIN'		=> 'Bei der Einstellung <strong>Ja</strong> wird in der Navigationsleiste ein Link angezeigt, der zur Seite mit der Cookie-Richtlinie führt. Das heißt Sie können damit die Seite mit der Cookie-Richtlinie unabhängig vom Cookie-Akzeptieren-Fenster anbieten.',

	'CUSTOM_BOX_COLOURS'			=> 'Cookie-Fenster Farben',
	'CUSTOM_BOX_COLOURS_EXPLAIN'		=> '<strong>Hier können Sie die Farben des Cookie-Hinweises anpassen, damit sie besser zum Foren-Style passen.</strong>',
	'CUSTOM_PAGE_COLOURS'			=> 'Individuelle Farben für die Cookie-Richtlinie Seite',
	'CUSTOM_PAGE_COLOURS_EXPLAIN'		=> '<strong>Hier können Sie die Farben der Cookie-Richtlinie Seite anpassen, damit sie besser zum Foren-Style passen.</strong>',

	'LOG_COOKIE_ERROR'			=> '<strong>Überprüfung der IP fehlgeschlagen</strong>',
	'LOG_CURL_ERROR'			=> '<strong>cURL ist auf diesem Server nicht verfügbar</strong>',
	'LOG_SERVER_ERROR'			=> '<strong>Verbindung zum IP Server fehlgeschlagen</strong>',

	'PIXELS'				=> 'Pixel #px',

	'UNBAN_IP'				=> 'IP Adresse entsperren',
	'UNBAN_IP_EXPLAIN'			=> 'Das System sperrt automatisch jede IP Adresse, die mehr als 250 Anfragen pro Minute erzeugt. Wenn Ihre IP Adresse gesperrt wurde, <a href="http://ip-api.com/docs/unban">klicken Sie hier</a> um das Formular zum Entsperren aufzurufen.',

	'YOUR_IP'				=> 'Ihre Server IP Adresse lautet',
));
