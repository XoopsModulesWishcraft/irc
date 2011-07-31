<?php 

	header("content-type: application/x-javascript");
	include_once('../../mainfile.php');

	if($xoopsUser){
		$nick = $xoopsUser->uname();
		$nick_details = $xoopsUser->name();
	} else {
		$nick = "Guest_".substr(md5(time()), mt_rand(0,28), 4);
		$nick_details = "Guest of ".XOOPS_URL;
	}

?>
/*
 * lightIRC configuration
 * www.lightIRC.com
 *
 * You can add or change these parameters to customize lightIRC.
 * Please see the full parameters list at http://redmine.lightirc.com/projects/lightirc/wiki/Customization_parameters
 *
 */

var params = {};

/* Change these parameters */
params.host                         = "<?php echo $GLOBALS['xoopsModuleConfig']['server']; ?>";
params.port                         = <?php echo (!empty($GLOBALS['xoopsModuleConfig']['port'])?$GLOBALS['xoopsModuleConfig']['port']:6667); ?>;
params.policyPort                   = <?php echo (!empty($GLOBALS['xoopsModuleConfig']['policyport'])?$GLOBALS['xoopsModuleConfig']['policyport']:843); ?>;

/* Language for the user interface. Currently available translations: bd, bg, br, cz, da, de, el, en, es, et, fr, hu, it, ja, nl, pl, ro, ru, sl, sq, sr_cyr, sr_lat, sv, th, tr, uk */
params.language                     = "<?php echo _LANGCODE; ?>";

/* Relative or absolute URL to a lightIRC CSS file.
 * The use of styles only works when you upload lightIRC to your webspace.
 * Example: css/lightblue.css 
 */
params.styleURL                     = "<?php echo (!empty($GLOBALS['xoopsModuleConfig']['css'])?XOOPS_URL.'/modules/ircmod/lightIRC/css/'.$GLOBALS['xoopsModuleConfig']['css']:''); ?>";

/* Nick to be used. A % character will be replaced by a random number */
params.nick                         = "<?php echo $nick; ?>";
/* Channel to be joined after connecting. Multiple channels can be added like this: #lightIRC,#test,#help */
params.autojoin                     = "<?php echo $GLOBALS['xoopsModuleConfig']['channel1']; ?>,<?php echo $GLOBALS['xoopsModuleConfig']['channel2']; ?>";
/* Commands to be executed after connecting. E.g.: /mode %nick% +x */
params.perform                      = "";

/* Whether the server window (and button) should be shown */
params.showServerWindow             = true;

/* Show a popup to enter a nickname */
params.showNickSelection            = true;
/* Adds a password field to the nick selection box */
params.showIdentifySelection        = false;

/* Show button to register a nickname */
params.showRegisterNicknameButton   = false;
/* Show button to register a channel */
params.showRegisterChannelButton    = false;

/* Opens new queries in background when set to true */
params.showNewQueriesInBackground   = false;

/* Position of the navigation container (where channel and query buttons appear). Valid values: left, right, top, bottom */
params.navigationPosition           = "bottom";


/* See more parameters at http://redmine.lightirc.com/projects/lightirc/wiki/Customization_parameters */




/* Use this method to send a command to lightIRC with JavaScript */
function sendCommand(command) {
  swfobject.getObjectById('lightIRC').sendCommand(command);
}

/* This method gets called if you click on a nick in the chat area */
function onChatAreaClick(nick) {
  //alert("onChatAreaClick: "+nick);
}

/* This method gets called if you use the parameter contextMenuExternalEvent */
function onContextMenuSelect(type, nick) {
  alert("onContextMenuSelect: "+nick+" for type "+type);
}

/* This method gets called if you use the parameter loopServerCommands */
function onServerCommand(command) {
  return command;
}

/* This loop escapes % signs in parameters. You should not change it */
for(var key in params) {
  params[key] = params[key].toString().replace(/%/g, "%25");
}