<?php
include('../../../mainfile.php');
xoops_loadLanguage('modinfo', 'irc');
$module_handler = xoops_gethandler('module');
$xoModule = $module_handler->getByDirname('irc');
if (is_object($xoModule))
	redirect_header(XOOPS_URL."/modules/system/admin.php?fct=preferences&op=showmod&mod=".$xoModule->getVar('mid'), 5, _MI_IRC_PREFERENCES);
else 
	redirect_header(XOOPS_URL);

?>