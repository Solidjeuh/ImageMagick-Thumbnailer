<?php
/**
 *
 * ImageMagick Thumbnailer. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, canonknipser, http://canonknipser.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
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

	'ACP_CK_IT'					=> 'Instellingen',
	'ACP_CK_IT_QUALITY'			=> 'Compressie kwaliteit',
	'ACP_CK_IT_QUALITY_EXPLAIN'	=> 'Met deze instelling kunt u de beeldcompressiekwaliteit van de gegenereerde miniatuur bepalen. Hogere waarden geven een hogere kwaliteit, maar ook grotere bestandsgroottes. Vóór phpBB 3.2.4 was de waarde ingesteld op 80 in de pphBB kern',
	'ACP_CK_IT_SETTING_SAVED'	=> 'Instellingen zijn succesvol opgeslagen!',

	'CK_ERR_NEW_INSTANCE'		=> 'Fout 0001: maken van een nieuw exemplaar van Imagick is mislukt',
	'CK_ERR_SET_FORMAT'			=> 'Fout 0002: SetImageFormat mislukt',
	'CK_ERR_SET_COMPRESSION_Q'	=> 'Fout 0003: SetCompressionQuality mislukt',
	'CK_ERR_RESIZE'				=> 'Fout 0004: herschalen opdracht mislukt: ',
	'CK_ERR_WRITE_IMAGE'		=> 'Fout 0005: WriteIimage is mislukt ',
	'CK_ERR_CALLING_IMAGICK'	=> 'Fout 0006: Het aanroepen van een Imagick service is mislukt, origineel bericht:',

	'CK_WARN_MIMETYPE'			=> 'Warning 0001: onbekend Mime-Type: ',

));
