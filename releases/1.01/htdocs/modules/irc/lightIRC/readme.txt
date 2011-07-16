Welcome to lightIRC 1.1! 
 _ _       _     _   _____ _____   _____     __    __  
| (_)     | |   | | |_   _|  __ \ / ____|   /_ |  /_ | 
| |_  __ _| |__ | |_  | | | |__) | |         | |   | |
| | |/ _` | '_ \| __| | | |  _  /| |         | |   | |
| | | (_| | | | | |_ _| |_| | \ \| |____     | |_  | |
|_|_|\__, |_| |_|\__|_____|_|  \_\\_____|    |_(_) |_| 
      __/ |
     |___/

lightIRC has been developed by Valentin Manthei (contact@valentin-manthei.de)
www.lightIRC.com


Information for upgrades from lightIRC 1.0:
- The chat now shows nick prefixes like @ or + in the chat area. If you don't like this, use showNickPrefixes = false
- If you did use useUserListIcons, make sure that you upload the icons folder to your webspace as they are no longer included within lightIRC.swf

Changes in lightIRC 1.1 (12. March 2011):
- Added Hungarian, Czech, Polish and Slovenian translations
- Server password is not being displayed in plain text anymore
- Parameter charset makes you able to define a custom encoding (default: utf-8)
- Parameter iconPath allows to use custom user list icons instead of having @+ prefixes
- Parameter userListCustomIcons allows you to include own icons for nicknames
- Parameter contextMenuExternalEvent is now able to take more than one item
- Various predefined ban masks are now available in the ban popup
- Away messages are displayed in the active chat window
- Added /back alias to unset an away state
- /clear command added
- Emoticons are not shown in the server window anymore
- Channel header supports channel and URL links
- Background image support for CSS stylesheets
- Ignores are being remembered
- A click on a nick in the chat area calls a JavaScript method
- Identify message default value changed to "NickServ:This nickname is registered"
- Support for mIRC background colors
- Scrolling for the emoticon popup when having many emoticons
- The parameters nickPrefix and nickPostfix define what should be shown around a nick in the chat area. Default: <nick>
- The parameter showNickPrefixes indicates whether a nick in the chat area is displayed like this: @nick or +nick (default: yes) 
- Last used nick is being stored when using rememberNickname
- Menu, translation, emoticons are small popus now
- Server input can be sent to JavaScript with parameter loopServerCommands
- Specific commands can be blocked from being entered from the user with parameter blockedCommands
- Fix: notices in query windows were not shown
- Fix: fontWeight CSS setting for links didn't work
- Fix: parameter nickAlternate didn't work properly
- Fix: ftp:// links were not supported
- Fix: the chat area scrollbar stopped scrolling down in some cases
- Fix: +vv mode change did only apply for the first nick
- Fix: < and > in emoticon codes were not supported 
- Fix: emoticons were shown horizontally flipped due to a bug in Flex 4.1
- Fix: Removed control key for nick completion as it caused problems when hitting CTRL+V in a query
- Fix: /memoserv or other commands starting with /me were interpreted as actions

This package contains the following files:
- css/ (Contains various CSS styles that can be used to change lightIRCs style. Parameter to change the style: styleURL)
- emoticons/ (Contains emoticons to be used within lightIRC. Parameters to change emoticons: emoticonPath, emoticonList)
- icons/ (Contains icons which are being displayed in the user list if you use useUserListIcons = true)
- language/ (Contains translations for the user interface)
- lightIRC.swf (The lightIRC application itself)
- index.html (The home page to start lightIRC)
- config.js (lightIRC configuration parameters)
- swfobject.js (Used to embed lightIRC within the index.html)
- expressInstall.swf (Used to install Flash Player automatically if a user does not have the plugin installed)
- readme.txt (This file)

Setup:
- Open config.js with a text editor and change/add parameters if necessary. Read http://redmine.lightirc.com/projects/lightirc/wiki/Customization_parameters for a list of all parameters.
- Upload all files and folders to your webspace
- Navigate your browser to index.html

Important notice:
If you should encounter a "security error" when starting lightIRC, please read http://redmine.lightirc.com/projects/lightirc/wiki/Flash_Policy_setup_instructions

More information: http://wiki.lightirc.com or irc.lightirc.com (#lightIRC)
Please use the bug tracker to submit feature requests or bugs: http://redmine.lightirc.com/projects/lightirc

Best regards,
Valentin