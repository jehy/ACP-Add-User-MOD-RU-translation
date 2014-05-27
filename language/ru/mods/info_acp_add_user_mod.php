<?php
/**
* @author Rich McGirr (RMcGirr83) http://phpbbmodders.net
* @author David Lewis (Highway of Life) http://phpbbacademy.com
*
* @package acp
* @version $Id:
* @copyright (c) 2011 phpBB Modders
* @copyright (c) 2007 Star Trek Guide Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
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

$lang = array_merge($lang, array(
	'ACP_ACCOUNT_ADDED'			=> 'Пользовательский аккаунт был создан и пользователь может теперь авторизовываться с логином и паролем, высланными на указанный вами емейл адрес.',
	'ACP_ACCOUNT_INACTIVE'		=> 'Пользовательский аккаунт был создан. Однако, настройки форума требуют, чтобы пользователь активировал свой аккаунт.<br />Ключ для активации был выслан на указанный вами емейл адрес.',
	'ACP_ACCOUNT_INACTIVE_ADMIN'=> 'Пользовательский аккаунт был создан. Однако, настройки форума требуют, чтобы аккаунт был активирован администратором.<br />Администраторам был выслан емейл и пользователь будет уведомлён, когда его аккаунт будет активирован',
	'ACP_ADD_USER'				=> 'ACP Мод для добавления пользователя',
	'ACP_ADMIN_ACTIVATE'		=> 'Администратору будет выслан емейл для активации аккаунта, альтернативно можно выбрать галочку ниже для автоматической активации аккаунта. Пользователю придут подробности авторизации.',
	'ACP_EMAIL_ACTIVATE'		=> 'Когда аккаунт будет создан, пользователю придёт емейл со ссылкой на активацию аккаунта.',
	'ACP_INSTANT_ACTIVATE'		=> 'Аккаунт будет активирован мгновенно. Пользователю придут подробности авторизации.',

	'ADD_USER'					=> 'Добавить пользователя',
	'ADD_USER_EXPLAIN'			=> 'Создать новый пользовательский аккаунт. Если у вас настроена активация только при помощи Администратора, вы сможете сразу активировать пользователя.',
	'MOD_VERSION'				=> 'Версия %s',
	'ADMIN_ACTIVATE'			=> 'Активировать аккаунт',
	'CONFIRM_PASSWORD'			=> 'Подтвердите пароль',
	'EDIT_USER_GROUPS'			=> '%sЧтобы редактировать группы пользователя, нажмите сюда%s',
	'GROUP_ADD'					=> 'Выбранные здесь группы будут присвоены пользователю, дополнительно к группе зарегистрированных пользователей',

	'CONTINUE_EDIT_USER'		=> '%1$sНажмите сюда чтобы управлять профилем %2$s%3$s', // e.g.: Click here to edit Joe’s profile.
	'LOG_USER_ADDED'			=> '<strong>Новый пользователь создан</strong><br />» %s',
	'PASSWORD'					=> 'Пароль',
	'PASSWORD_EXPLAIN'			=> 'Если вы не введёте пароль здесь, он будет сгененрирован автоматически.',
	'acl_a_add_user'			=> array('lang' => 'Может создавать новые пользовательские аккаунты', 'cat' => 'user_group'),
));

?>