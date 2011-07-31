<?php
$module_handler = xoops_gethandler('module');
$xoModule = $module_handler->getByDirname('irc');
global $adminmenu;
$adminmenu = array();
if (is_object($xoModule))
$adminmenu[0]['title'] = _MI_IRC_ADMENU1;
$adminmenu[0]['link'] = "../system/admin.php?fct=preferences&op=showmod&mod=".$xoModule->getVar('mid');
?>
