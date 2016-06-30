<?php

/**
 * Admin
 */
define('DURA_ADMIN_NAME', 'Admin');
define('DURA_ADMIN_PASS', 'Password');

/**
 * URL & Path
 */
define('DURA_URL', 'http://roadrunner-forums.com/chat'); // DO NOT ADD SLASH TO END.
define('DURA_PATH', dirname(__FILE__));

/**
 * Trust Path directory should be put outside of Document Root.
 */
define('DURA_TRUST_PATH', DURA_PATH.'/trust_path'); // Leave This Alone
define('DURA_XML_PATH', DURA_TRUST_PATH.'/xml'); // Leave This Alone
define('DURA_TEMPLATE_PATH', DURA_TRUST_PATH.'/template'); // Leave This Alone

/**
 * If use mod_rewrite, set true.
 */
define('DURA_USE_REWRITE', false);

/**
 * Chat room settings
 */
define('DURA_LOG_LIMIT', 1000000);
define('DURA_TIMEOUT', 130); // 3 mins user timeout 
define('DURA_USER_MIN', 3);
define('DURA_USER_MAX', 50);
define('DURA_ROOM_LIMIT', 50);
define('DURA_SITE_USER_CAPACITY', 100); // rooms that can be created
define('DURA_CHAT_ROOM_EXPIRE', 260); // 6 mins
define('DURA_MESSAGE_MAX_LENGTH', 200);

/**
 * Language setting
 */
define('DURA_LANGUAGE', 'en-US');

/**
 * Title settings
 */
define('DURA_TITLE', 'Dollars Chat');
define('DURA_SUBTITLE', 'RoadRunner-Forums');

/**
 * Session name
 */
define('DURA_SESSION_NAME', 'Dollars-chat');

/**
 * Comet settings
 */
define('DURA_USE_COMET', 1);
define('DURA_SLEEP_LOOP', 1800);
define('DURA_SLEEP_TIME', 1);

?>