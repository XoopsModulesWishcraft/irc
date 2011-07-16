<?php
include("../../mainfile.php");
$xoopsOption['template_main'] = 'ircmod_chat.html';
include (XOOPS_ROOT_PATH."/header.php");
$GLOBALS['xoTheme']->addScript(XOOPS_URL.'/modules/ircmod/lightIRC/swfobject.js', array('type'=>'text/javascript'));
$GLOBALS['xoTheme']->addScript(XOOPS_URL.'/modules/ircmod/config.php', array('type'=>'text/javascript'));
$GLOBALS['xoTheme']->addScript('', array('type'=>'text/javascript'), 'swfobject.embedSWF("'.XOOPS_URL.'/modules/ircmod/lightIRC/lightIRC.swf", "lightIRC", "'.$GLOBALS['xoopsModuleConfig']['width'].'", "'.$GLOBALS['xoopsModuleConfig']['height'].'", "10.0.0", "'.XOOPS_URL.'/modules/ircmod/lightIRC/expressInstall.swf", params);');
include (XOOPS_ROOT_PATH."/footer.php");
?>