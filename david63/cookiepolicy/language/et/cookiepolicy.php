<?php
/**
*
* @package Cookie Policy Extension
* @copyright (c) 2014 david63; Estonian translation by phpBBeesti.com 04/2015
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
	'COOKIE_ACCEPT_TEXT'	=> 'See foorum kasutab küpsiseid, et pakkuda kasutajatele isikupärasemat kasutuskogemust, ning mugavamat navigeerimist. Jätkates selle foorumi kasutamist, nõustute küpsiste kasutamisega meie foorumil.<br /><br />Rohkem teavet küpsiste kasutamise kohta leiad, kui vajutad lehekülje all olevas jaluses linki nimega "Küpsiste teave".<br /><br />',
	'COOKIE_ACCEPT'			=> '[ Ma nõustun ]',

	'COOKIE_TEXT'			=> '<h3>Kuidas me kasutame küpsiseid?</h3>
	<p>Me kasutame küpsiseid foorumil %1$s, et pakkuda kasutajatele isikupärasemat kasutuskogemust ja mugavamat navigeerimist. Kasutades %1$s, sa nõustud sellega et me paneme need failitüübid sinu poolt kasutatavasse seadmesse (PC, nuhvel jms).</p>
<h3>Mis on küpsised ja kuidas need toimivad?</h3><p>Küpsis on sessiooniidentifikaator, mis kujutab endast väikest tekstikujulist andmeblokki. Veebiserver saadab küpsise Sinu veebilehitsejale ja see salvestatakse arvutisse. Tavaliselt on tegemist eraldi asetseva(te) faili(de)ga kasutaja profiilis. Küpsised omavad ka kehtivusaega – vastavalt sellele need kas kustutatakse sessiooni sulgemisel või salvestatakse hilisemaks kasutamiseks.<br /><br />
Küpsist kasutavad veebilehed erinevalt. Laias laastus on tegemist isikustatud info haldamisega. Küpsiste abil määratakse ja salvestatakse eelistused, regionaalsed sätted, teenuste kasutamise valikud jne. %1$s kasutab terminit "küpsised" selles teabes, et täpsustada kõiki üksikasju, mis viitavad just sellisele informatsiooni kogumisele siin lehel.<br /><br />
Mõned küpsiste tüübid võivad sisaldada ka kasutajate personaalset informatsiooni - nagu näiteks, kui kasutaja  vajutab sisselogimisel "Mäleta mind" kasti linnukese, siis küpsised säilitavad tema kasutajanime. Enamik küpsiseid ei kogu ühtegi sellist informatsiooni, mis võib tuvastada teid. Kuid antud küpsised koguvad üldist informatsiooni, nagu näiteks kuidas kasutaja saabus ja kasutas veebilehekülge %1$s, ning kasutaja üldist asukohta.</p>
<h3>Mis tüüpi küpsiseid %1$s kasutab?</h3><p>Küpsised võivad täita mitmeid erinevaid funktsioone, põhiolemuselt jagunevad küpsised kaheks: ajutised ehk seansi küpsised ja püsiküpsised. Sellel veebilehel kasutatakse peamiselt alljärgnevaid küpsiseid:</p>
<p><b>1. Tingimata vajalikud küpsised</b><br />Need on olulised küpsised, mis võimaldavad teil foorumil %1$s ringi liikuda ja kasutada selle funktsioone, näiteks siseneda turvaaladele. Ilma nendeta ei oleks registreerimine või sisselogimine võimalik. Need küpsised ei kogu teie kohta mingisugust teavet.</p>
<p><b>2. Tehnilisi küpsiseid, mis</b><br />koguvad teavet selle kohta, kuidas antud foorumit kasutatakse. Näiteks, milliseid lehekülgesi külastatakse kõige enam ja kas kasutajad saavad neilt veateateid. Need küpsised ei kogu teavet, mis võimaldaks foorumil kasutajat otseselt tuvastada.</p>
<p><b>3. Autentimise küpsised, mis</b><br />võimaldavad foorumil meeles pidada kasutaja tehtud valikuid (näiteks nimi, keel või piirkond). Neid küpsiseid kasutame näiteks sisselogitud kasutaja identifitseerimiseks, kasutajad saavad end järjestikuste veebilehekülgede külastuste käigus autentida ning ligi pääseda sisule. Autentimise küpsised on enamasti ajutised küpsised.</p>
<p>Samuti võib veebileht %1$s lubada kolmandatele osapooltele kasutada küpsiseid, mis ei kuulu ühtegi üleval toodud kategooriasse. Näiteks, nagu enamus veebilehti, võib ka antud veebilehekülg kasutada Google Analytics teenust, et aidata monitoorida antud lehekülje külastatavust.</p>
<h3>Kuidas ma saan küpsiseid hallata?</h3><p>Küpsiste haldamise suvandid saate üle vaadata oma brauseris. Brauserit saab kasutada põhifunktsioonide, saidi täiustamise, isikupärastamise ja reklaamiga seotud küpsiste haldamiseks. Erinevatel brauseritel kasutatakse küpsiste keelamiseks erinevaid võimalusi, kuid tavaliselt leiab need menüüdest Tööriistad või Suvandid. Abi leiate brauseri spikrimenüüst. Lisaks küpsiste haldamisele lasevad brauserid tavaliselt kontrollida küpsistega sarnanevaid faile (lokaalseid ühiskasutusobjekte jms), nt lubades brauseri privaatsusrežiimi.<br /><br />
<a href="http://www.aboutcookies.org" style="text-decoration:none">www.aboutcookies.org</a><br />
<a href="http://www.allaboutcookies.org" style="text-decoration:none">www.allaboutcookies.org</a><br />
<a href="http://www.aki.ee/et/kupsised" style="text-decoration:none" target="_blank">www.aki.ee/kupsised</a></p>
<p>Siin kohal tuletame meelde, et kõikide küpsiste blokeerimine võib küll aidata kasutaja privaatsust kaitsta, kuid samas piirata ka %1$s kasutusvõimalusi.</p>
<h3>Suhtlusvõrgustike küpsised foorumis %1$s</h3><p>Foorum %1$s võib lubada ka linke sotsiaalvõrgustike veebilehtedele (nt. Facebook, Twitter, YouTube). Need veebileheküljed võivad lisada omalt poolt sinu seadmesse täiendavaid faile, mis on seotud küpsistega, kuid mida ei halda ega kontrolli %1$s. %1$s soovitab lugeda ja tutvude samuti nende veebisaitide küpsiste teabega, et saaksid teada kuidas nemad kasutavad küpsiseid.',

	'COOKIE_POLICY'			=> 'Küpsiste teave',
));
