<?php
/**
*
* @package Cookie Policy Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
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
	'ALL'								=> 'جميع الصفحات',

	'CLICK_TO_SELECT'					=> 'أنقر هنا أو على المربع لتحديد اللون',
	'CLOSE_PICKER'						=> 'إغلاق',

	'COOKIE_BOX_BG_COLOUR'				=> 'لون الخلفية ',
	'COOKIE_BOX_BG_COLOUR_EXPLAIN'		=> 'حدد لون الخلفية في مربع موافقة الكوكيز بالصفحة الرئيسية.',
	'COOKIE_BOX_HREF_COLOUR'			=> 'لون الرابط ',
	'COOKIE_BOX_HREF_COLOUR_EXPLAIN'	=> 'حدد لون رابط "أنا موافق" في مربع موافقة الكوكيز بالصفحة الرئيسية.',
	'COOKIE_BOX_TXT_COLOUR'				=> 'لون النص ',
	'COOKIE_BOX_TXT_COLOUR_EXPLAIN'		=> 'حدد لون النص مربع موافقة الكوكيز.',
	'COOKIE_BOX_POSITION'				=> 'مكان المربع ',
	'COOKIE_BOX_POSITION_EXPLAIN'		=> 'حدد مكان مربع موافقة الكوكيز في اليمين أو اليسار بالصفحة الرئيسية.',

	'COOKIE_CUSTOM_BOX'					=> 'تفعيل ',
	'COOKIE_CUSTOM_BOX_EXPLAIN'			=> 'استخدام الألوان التي تحددها هنا لمربع الكوكيز بالصفحة الرئيسية.<br />سوف يتم استخدام الألوان الإفتراضية إذا أخترت <strong>لا</strong>.',
	'COOKIE_CUSTOM_PAGE'				=> 'تفعيل ',
	'COOKIE_CUSTOM_PAGE_EXPLAIN'		=> 'استخدام الألوان التي تحددها هنا لصفحة سياسة الكوكيز.<br />سوف يتم استخدام الألوان الإفتراضية إذا أخترت <strong>لا</strong>.',

	'COOKIE_DETECT'						=> 'التأكد من أن الكوكيز مطلوب ',
	'COOKIE_DETECT_EXPLAIN'				=> 'محاولة إكتشاف أن العضو من دول الإتحاد الأوروبي وبالتالي طلب الموافقة على سياسة الكوكيز من هؤلاء الأعضاء.<br /><strong>ملاحظة :</strong> هذا الخيار قد لا يعمل بصورة دقيقة ولذلك لا يُنصح به للمنتديات التي يُمكن أن تكون أغلبية أعضائها من دول الإتحاد الأوروبي.',

	'COOKIE_EXPIRE'						=> 'تاريخ الإنتهاء ',
	'COOKIE_EXPIRE_EXPLAIN'				=> 'اختيارك "نعم" يعني إعادة الطلب من العضو للموافقة على سياسة الكوكيز سنوياً.',

	'COOKIE_LEFT'						=> 'يسار',
	'COOKIE_LOG_ERRORS'					=> 'تسجيل الاخطاء ',
	'COOKIE_LOG_ERRORS_EXPLAIN'			=> 'تسجيل أي أخطاء يتم اكتشافها عند البحث عن عنوان الآي بي IP الخاص بالعضو.',

	'COOKIE_PAGE_BG_COLOUR'				=> 'لون الخلفية ',
	'COOKIE_PAGE_BG_COLOUR_EXPLAIN'		=> 'حدد لون الخلفية لصفحة سياسة الكوكيز.',
	'COOKIE_PAGE_TXT_COLOUR'			=> 'لون النص ',
	'COOKIE_PAGE_TXT_COLOUR_EXPLAIN'	=> 'حدد لون النص لصفحة سياسة الكوكيز.',

	'COOKIE_POLICY'						=> 'سياسة تخزين المعلومات',
	'COOKIE_POLICY_ENABLE'				=> 'تفعيل ',
	'COOKIE_POLICY_ENABLE_EXPLAIN'		=> 'تفعيل أو تعطيل مُتطلبات جميع الأعضاء في هذا المنتدى للموافقة على استخدام سياسة الكوكيز بحسب شروط الكوكيز لدول الإتحاد الأوروبي (2012).',
	'COOKIE_POLICY_EXPLAIN'				=> 'من هنا تستطيع إدارة الخيارات المطلوبة لسياسة الكوكيز.',
	'COOKIE_POLICY_LOG'					=> '<strong>تم تحديث إعدادات سياسة الكوكيز</strong>',
	'COOKIE_POLICY_MANAGE'				=> 'الإعدادات',
	'COOKIE_POLICY_ON_INDEX'			=> 'العرض في الواجهة فقط ',
	'COOKIE_POLICY_ON_INDEX_EXPLAIN'	=> 'إظهار مربع موافقة الكوكيز في الصفحة الرئيسية للمنتدى أو في جميع الصفحات.',
	'COOKIE_POLICY_OPTIONS'				=> 'الخيارات',

	'COOKIE_RIGHT'						=> 'يمين',

	'COOKIE_SHOW_POLICY'				=> 'إظهار سياسة الكوكيز ',
	'COOKIE_SHOW_POLICY_EXPLAIN'		=> 'عرض رابط سياسة الكوكيز في الشريط الموجود بأسفل المنتدى حتى لو تم تعطيل هذه الإضافة. مثال : تستطيع عرض رابط سياسة الكوكيز بدون الحاجة إلى مربع الموافقة.',

	'CUSTOM_BOX_COLOURS'				=> 'تخصيص الألوان لمربع موافقة الكوكيز',
	'CUSTOM_BOX_COLOURS_EXPLAIN'		=> '<strong>تستطيع هنا تغيير ألوان مربع موافقة الكوكيز لكي يناسب استايل منتداك.</strong>',
	'CUSTOM_PAGE_COLOURS'				=> 'تخصيص الألوان لصفحة الكوكيز',
	'CUSTOM_PAGE_COLOURS_EXPLAIN'		=> '<strong>تستطيع هنا تغيير ألوان صفحة سياسة الكوكيز لكي يناسب استايل منتداك.</strong>',

	'LOG_COOKIE_ERROR'					=> '<strong>فشل في البحث عن عنوان الـIP</strong>',
	'LOG_CURL_ERROR'					=> '<strong>مكتبة الإتصال cURL غير موجود في هذا السيرفر</strong>',
	'LOG_SERVER_ERROR'					=> '<strong>غير قادر على الإتصال بعنوان الآي بي للسيرفر</strong>',

	'UNBAN_IP'							=> 'رفع الحظر عن عنوان الـIP ',
	'UNBAN_IP_EXPLAIN'					=> 'النظام سوف يحظر تلقائياً أي رقم IP ينفذ أكثر من 250 طلبات في الدقيقة الواحدة. <a href="http://ip-api.com/docs/unban">انقر هنا</a> للحصول على نموذج رفع الحظر إذا تم حظر عنوان الآي بي الخاص بك.',

	'YOUR_IP'							=> 'يبدوا أن عنوان الآي بي IP لسيرفرك هو ',
));
