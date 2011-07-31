<?php
include("../../mainfile.php");
switch ($GLOBALS['xoopsModuleConfig']['applet']) {
case 'flash':
	$xoopsOption['template_main'] = 'irc_flash_chat.html';
	include (XOOPS_ROOT_PATH."/header.php");
	$GLOBALS['xoTheme']->addScript(XOOPS_URL.'/modules/'.$GLOBALS['xoopsModule']->getVar('dirname').'/lightIRC/swfobject.js', array('type'=>'text/javascript'));
	$GLOBALS['xoTheme']->addScript(XOOPS_URL.'/modules/'.$GLOBALS['xoopsModule']->getVar('dirname').'/config.php', array('type'=>'text/javascript'));
	$GLOBALS['xoTheme']->addScript('', array('type'=>'text/javascript'), 'swfobject.embedSWF("'.XOOPS_URL.'/modules/'.$GLOBALS['xoopsModule']->getVar('dirname').'/lightIRC/lightIRC.swf", "lightIRC", "'.$GLOBALS['xoopsModuleConfig']['width'].'", "'.$GLOBALS['xoopsModuleConfig']['height'].'", "10.0.0", "'.XOOPS_URL.'/modules/'.$GLOBALS['xoopsModule']->getVar('dirname').'/lightIRC/expressInstall.swf", params);');
	include (XOOPS_ROOT_PATH."/footer.php");
	break;
default:
case 'java':
	$xoopsOption['template_main'] = 'irc_java_chat.html';
	include (XOOPS_ROOT_PATH."/header.php");
	if($xoopsUser){
		$nick = $xoopsUser->uname();
		$nick_details = $xoopsUser->name();
	} else {
		$nick = "Guest_".substr(md5(time()), mt_rand(0,28), 4);
		$nick_details = "Guest of ".XOOPS_URL;
	}
	$GLOBALS['xoopsTpl']->assign('nick', $nick);
	$GLOBALS['xoopsTpl']->assign('fullname', $nick_details);
	$GLOBALS['xoopsTpl']->assign('xoConfig', $GLOBALS['xoopsModuleConfig']);
	$GLOBALS['xoopsTpl']->assign('xoopsConfig', $GLOBALS['xoopsConfig']);
	include (XOOPS_ROOT_PATH."/footer.php");
	break;
}	
?>