<?php
$modversion['name'] = _MI_IRC_NAME;
$modversion['version'] = 1.02;
$modversion['description'] = _MI_IRC_DESC;
$modversion['credits'] = "IRCMod is a GNU Flash/Java based IRC Chat Module";
$modversion['author'] = "wishcraft (simon@chronolabs.coop)";
$modversion['help'] = "";
$modversion['license'] = "GPL GNU";
$modversion['official'] = 0;
$modversion['image'] = "images/ircchat.png";
$modversion['dirname'] = "irc";

$modversion['hasMain'] = 1;

$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/admin.php";
$modversion['adminmenu'] = "admin/menu.php";

$modversion['config'][1]['name'] = 'server';
$modversion['config'][1]['title'] = '_MI_SERVER';
$modversion['config'][1]['description'] = '';
$modversion['config'][1]['formtype'] = 'textbox';
$modversion['config'][1]['valuetype'] = 'text';
$modversion['config'][1]['default'] = 'irc.austnet.org';

$modversion['config'][2]['name'] = 'port';
$modversion['config'][2]['title'] = '_MI_PORT';
$modversion['config'][2]['description'] = '';
$modversion['config'][2]['formtype'] = 'textbox';
$modversion['config'][2]['valuetype'] = 'int';
$modversion['config'][2]['default'] = 6667;

$modversion['config'][3]['name'] = 'network';
$modversion['config'][3]['title'] = '_MI_SERVER';
$modversion['config'][3]['description'] = '';
$modversion['config'][3]['formtype'] = 'textbox';
$modversion['config'][3]['valuetype'] = 'text';
$modversion['config'][3]['default'] = 'AUSTNET';

$modversion['config'][4]['name'] = 'chanop';
$modversion['config'][4]['title'] = '_MI_CHANOP';
$modversion['config'][4]['description'] = '';
$modversion['config'][4]['formtype'] = 'textbox';
$modversion['config'][4]['valuetype'] = 'text';
$modversion['config'][4]['default'] = 'chanop';

$modversion['config'][5]['name'] = 'nickop';
$modversion['config'][5]['title'] = '_MI_NICKOP';
$modversion['config'][5]['description'] = '';
$modversion['config'][5]['formtype'] = 'textbox';
$modversion['config'][5]['valuetype'] = 'text';
$modversion['config'][5]['default'] = 'nickop';

$modversion['config'][6]['name'] = 'channel1';
$modversion['config'][6]['title'] = '_MI_CHANNEL1';
$modversion['config'][6]['description'] = '';
$modversion['config'][6]['formtype'] = 'textbox';
$modversion['config'][6]['valuetype'] = 'text';
$modversion['config'][6]['default'] = '#ppc';

$modversion['config'][7]['name'] = 'channel2';
$modversion['config'][7]['title'] = '_MI_CHANNEL2';
$modversion['config'][7]['description'] = '';
$modversion['config'][7]['formtype'] = 'textbox';
$modversion['config'][7]['valuetype'] = 'text';
$modversion['config'][7]['default'] = '';

$modversion['config'][8]['name'] = 'policyport';
$modversion['config'][8]['title'] = '_MI_POLICYPORT';
$modversion['config'][8]['description'] = '';
$modversion['config'][8]['formtype'] = 'textbox';
$modversion['config'][8]['valuetype'] = 'int';
$modversion['config'][8]['default'] = '843';

$modversion['config'][9]['name'] = 'width';
$modversion['config'][9]['title'] = '_MI_WIDTH';
$modversion['config'][9]['description'] = '';
$modversion['config'][9]['formtype'] = 'textbox';
$modversion['config'][9]['valuetype'] = 'text';
$modversion['config'][9]['default'] = '100%';

$modversion['config'][10]['name'] = 'height';
$modversion['config'][10]['title'] = '_MI_HEIGHT';
$modversion['config'][10]['description'] = '';
$modversion['config'][10]['formtype'] = 'textbox';
$modversion['config'][10]['valuetype'] = 'text';
$modversion['config'][10]['default'] = '500px';

$modversion['config'][11]['name'] = 'css';
$modversion['config'][11]['title'] = '_MI_CSS';
$modversion['config'][11]['description'] = '';
$modversion['config'][11]['formtype'] = 'select';
$modversion['config'][11]['valuetype'] = 'text';
$modversion['config'][11]['default'] = '';
xoops_load('xoopslists');
$cssfiles = XoopsLists::getFileListAsArray(XOOPS_ROOT_PATH.'/modules/irc/lightIRC/css/');
$options = array('No CSS'=>'');
foreach($cssfiles as $cssfile)
	$options[$cssfile] = $cssfile; 
$modversion['config'][11]['options'] = $options;

$modversion['config'][12]['name'] = 'usesmilies';
$modversion['config'][12]['title'] = '_MI_USESMILIES';
$modversion['config'][12]['description'] = '';
$modversion['config'][12]['formtype'] = 'yesno';
$modversion['config'][12]['valuetype'] = 'int';
$modversion['config'][12]['default'] = 1;

$modversion['config'][13]['name'] = 'quitmsg';
$modversion['config'][13]['title'] = '_MI_QUITMSG';
$modversion['config'][13]['description'] = '';
$modversion['config'][13]['formtype'] = 'textbox';
$modversion['config'][13]['valuetype'] = 'text';
$modversion['config'][13]['default'] = 'ByeBye!';

$modversion['config'][14]['name'] = 'applet';
$modversion['config'][14]['title'] = '_MI_APPLET';
$modversion['config'][14]['description'] = '';
$modversion['config'][14]['formtype'] = 'select';
$modversion['config'][14]['valuetype'] = 'text';
$modversion['config'][14]['default'] = 'flash';
$modversion['config'][14]['options'] = array('Flash Applet'=>'flash', 'Java Applet'=>'java');

$modversion['templates'][1]['file'] = 'irc_flash_chat.html';
$modversion['templates'][1]['description'] = 'Flash Chat Window Template';
$modversion['templates'][2]['file'] = 'irc_java_chat.html';
$modversion['templates'][2]['description'] = 'Java Chat Window Template';

?>