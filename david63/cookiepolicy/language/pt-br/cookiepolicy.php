<?php
/**
*
* @package Cookie Policy Extension
* @copyright (c) 2014 david63
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'COOKIE_ACCEPT_TEXT'	=> 'Este fórum usa cookies para dar a você uma maior e mais relevante experiência. Ao usá-lo, você aceita nossa política de cookies.<br /><br />Você pode saber mais sobre isso clicando em "Políticas de cookies" no rodapé das páginas.<br /><br />',
	'COOKIE_ACCEPT'			=> '[ Eu aceito ]',

	'COOKIE_TEXT'			=> '<h3>Como nós usamos cookies neste fórum?</h3>
	<p>Usamos arquivos conhecidos como cookies no %1$s para melhorar sua performance e melhorar sua experência. Ao usar o %1$s você aceita que nós podemos colocar este tipo de arquivo em seu dispositivo.</p>
<h3>O que são cookies??</h3><p>Cookies são pequenos aquivos de texto que um website pode colocar em seu computador or dispositivo móvel quando você o visita pela primeira vez ou uma de suas páginas.<br /><br />
Um cookie serve para vários propósitos. Por exemplo, ajudar um website ou outro a reconhecer seu dispositivo na próxima vez que você visitá-lo. O %1$s usa o termo "cookies" em sua política para se referir a todos os arquivos que coletam informações desta maneira.<br /><br />
Certos cookies contém informação pessoal. Por exemplo, quando você clica em "Lembrar de mim" ao se logar, um cookie irá armazenar seu nome de usuário. A maioria dos cookies não coleta informação que identifica você mas irá coletar informação mais geral tal como a maneira como os usuários chegaram ao  %1$s ou uma localização geral do usuário.</p>
<h3>Que tipo de cookie o %1$s usa?</h3><p>Cookies podem ter várias funções:</p>
<p><b>1. Cookies Essenciais</b><br />Alguns cookies são essenciais para a operação do %1$s. Esses cookies habilitam serviços que você especificamente solicitou.</p>
<p><b>2. Cookies de Performance</b><br />Esses cookies podem coletar informação anônima das páginas visitadas. Por exemplo, nós podemos usar estes cookies para saber quais as páginas mais populares, quais métodos de links entre páginas é mais eficiente e determinar porque algumas páginas estão gerando erros.</p>
<p><b>3. Cookies Funcionais</b><br />Esses cookies lembram escolhas que você fez para melhorar sua experiência no %1$s.</p>
<p>O %1$s pode também permitir terceiros a usarem cookies que caem em qualquer uma das categorias acima. Por exemplo, como muitos websites, nós podemos usar Google Analytics para monitorar o tráfego de nosso website.</p>
<h3>O usuário pode bloquear cookies?</h3><p>Para descobrir como gerenciar cookies, leia a seção de ajuda do navegador ou o manual de seu dispositivo móvel - ou visite um dos websites abaixo, os quais contém informação detalhada de como gerenciar, controlar ou deletar cookies.<br /><br />
<a href="http://www.aboutcookies.org" style="text-decoration:none">www.aboutcookies.org</a><br />
<a href="http://www.allaboutcookies.org" style="text-decoration:none">www.allaboutcookies.org</a></p>
<p>Por favor, lembre-se que se você desabilitar os cookies pode descobrir que algumas seções do %1$s não funcionarão apropriadamente.</p>
<h3>Cookies de redes sociais no %1$s</h3><p>O %1$s pode ter links para websites de redes sociais (por exemplo Facebook, Twitter ou YouTube). Esses websites também podem colocar cookies em seu dispositivo e o %1$s não controla como eles os usam, portanto sugerimos que você cheque como estes websites estão usando seus cookies.',

	'COOKIE_POLICY'			=> 'Políticas de Cookies',
));
