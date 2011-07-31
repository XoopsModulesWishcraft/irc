#
# This java file is a part of the
#
# - Plouf's Java IRC Client -
#
# Copyright (C) 2002 Philippe Detournay
#
# This file is licensed under the GPL license
#
# All contacts : theplouf@yahoo.com
#
#
# Syntax :
# Comments begin with the # character. This character must be the first character of the line.
# A data line has three parts : the data id, the data id description, the data string.
# - Data id : An hexadecimal figure identifying the string.
# - Data description : Begins by [ and ends by ]. The description is not parsed and
# can be any string.
# - Data string : The string itself. Parameters are specified using the %i syntax.
#
# Trailing spaces can be added using the \s escape character.
0001 [INTERPRETOR_NOT_ON_CHANNEL] Not on a channel
0002 [INTERPRETOR_UNKNOWN_DCC] %1 : unknown dcc subcommand
0003 [INTERPRETOR_INSUFFICIENT_PARAMETERS] %1 : insufficient parameters
0004 [INTERPRETOR_BAD_CONTEXT] %1 : unable to perform in current context
0005 [INTERPRETOR_CANNOT_CTCP_IN_DCCCHAT] Cannot send CTCP codes via DCC Chat
0006 [INTERPRETOR_UNKNOWN_CONFIG] %1 : unknown config subcommand
0007 [INTERPRETOR_TIMESTAMP_ON] Timestamp enabled
0008 [INTERPRETOR_TIMESTAMP_OFF] Timestamp disabled
0009 [INTERPRETOR_SMILEYS_ON] Graphical smileys enabled
000a [INTERPRETOR_SMILEYS_OFF] Graphical smileys disabled
000b [INTERPRETOR_IGNORE_ON] Now ignoring %1
000c [INTERPRETOR_IGNORE_OFF] Not ignoring %1 anymore
000d [INTERPRETOR_MULTISERVER_DISABLED] Multiserver support is disabled
0101 [DCC_WAITING_INCOMING] Waiting for incoming connection...
0102 [DCC_UNABLE_TO_OPEN_CONNECTION] Unable to open connection : %1
0103 [DCC_CONNECTION_ESTABLISHED] DCC Connection established
0104 [DCC_CONNECTION_CLOSED] Connection closed
0105 [DCC_ERROR] Error : %1
0106 [DCC_UNABLE_TO_SEND_TO] %1 : unable to send to %2
0107 [DCC_BAD_CONTEXT] Unable to execute command from current context
0108 [DCC_NOT_CONNECTED] Not connected
0109 [DCC_UNABLE_PASSIVE_MODE] Unable to initialize passive mode
010a [CTCP_PING_REPLY] [%1 PING reply] : %2 seconds
010b [DCC_STREAM_CLOSED] Stream closed
0201 [IDENT_FAILED_LAUNCH] Failed to launch Ident server : %1
0202 [IDENT_REQUEST] Ident request from %1
0203 [IDENT_ERROR] Error occurred
0204 [IDENT_REPLIED] Replied %1
0205 [IDENT_DEFAULT_USER] default user
0206 [IDENT_NO_USER] No user for request
0207 [IDENT_RUNNING_ON_PORT] Ident server running on port %1
0208 [IDENT_LEAVING] Ident server leaving : %1
0209 [IDENT_NONE] none
020a [IDENT_UNKNOWN] unknown
020b [IDENT_UNDEFINED] Undefined result
0301 [FILE_SAVEAS] Save file as
0401 [ABOUT_ABOUT] About
0402 [ABOUT_PROGRAMMING] Programming
0403 [ABOUT_DESIGN] Design
0404 [ABOUT_THANKS] Thanks to
0405 [ABOUT_SUPPORT] for support, ideas and testing
0406 [ABOUT_GPL] This software is licensed under the GPL license
0501 [SERVER_UNABLE_TO_CONNECT] Unable to connect : %1
0502 [SERVER_UNABLE_TO_CONNECT_STILL] Unable to connect to %1 : currently trying to connect to %2
0503 [SERVER_DISCONNECTING] Disconnecting from %1
0504 [SERVER_CONNECTING] Connecting...
0505 [SERVER_NOT_CONNECTED] Not connected
0506 [SERVER_LOGIN] Logging in...
0507 [SERVER_DISCONNECTED] Disconnected from %1
0508 [SERVER_ERROR] Error : %1
071a [GUI_CHANGE_NICK] Change nick to
071b [GUI_COPY_WINDOW] Copy text
0801 [ASL_MALE] Boy, %1 years old, %2
0802 [ASL_FEMALE] Girl, %1 years old, %2
0803 [ASL_UNKNOWN] %1 years old from %2
0901 [REPLY_IDLE] %1 has been idle for %2
0902 [REPLY_SIGNON] %1 connected on %2
ffff [ERROR_NOT_DEFINED] Undefined string