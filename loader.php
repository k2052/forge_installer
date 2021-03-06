<?php    

// Load Fle.       
define('_Forge', '0.1');     

// Path To Joomla root folder.
define('JPATH_SITE', dirname(dirname(dirname(__FILE__))) );    

// Path To This Installer. 
define('JPATH_INSTALLATION', dirname(__FILE__) );      

// Path to forge
define('FORGE_PATH', dirname(__FILE__) . DS .  'lib' . DS . 'forge' );   
define('(FORGE_CONFIG_PATH', dirname(__FILE__) . DS .  'config'); 

# JExec
define('_JEXEC', 1);
 
// Setup the path related constants.
define('DS', DIRECTORY_SEPARATOR);
define('JPATH_BASE', dirname(dirname(dirname(__FILE__))) );
define('JPATH_ROOT',          JPATH_BASE);
define('JPATH_CONFIGURATION', JPATH_BASE);
define('JPATH_LIBRARIES',     JPATH_BASE.DS.'libraries');
define('JPATH_METHODS',       JPATH_ROOT.DS.'methods');        
define('TMP_PATH',            JPATH_SITE.DS.'tmp'.DS.'forge'); 
 
if(!defined('JPATH_INSTALLATION'))  define( 'JPATH_INSTALLATION',	JPATH_ROOT . DS . 'installation' );
if(!defined('JPATH_ADMINISTRATOR')) define( 'JPATH_ADMINISTRATOR',	JPATH_ROOT . DS . 'administrator' );
if(!defined('JPATH_XMLRPC'))        define( 'JPATH_XMLRPC', 		JPATH_ROOT . DS . 'xmlrpc' );
if(!defined('JPATH_LIBRARIES'))     define( 'JPATH_LIBRARIES',		JPATH_ROOT . DS . 'libraries' );
if(!defined('JPATH_PLUGINS'))       define( 'JPATH_PLUGINS',		JPATH_ROOT . DS . 'plugins'   );
if(!defined('JPATH_CACHE'))         define( 'JPATH_CACHE',			JPATH_BASE . DS . 'cache');         
if(!defined('JVERSION_SHORT'))      define('JVERSION_SHORT', substr(JVERSION, 0, 3));

// Load the library importer.
require_once (JPATH_LIBRARIES.DS.'joomla' . DS .'import.php'); 
require_once 'lib' . DS . 'helpers.php';

// Joomla! Imports.
jimport('joomla.application.application');
jimport('joomla.utilities.utility');
jimport('joomla.language.language');
jimport('joomla.utilities.string');
jimport('joomla.factory');       

require_once 'lib'  . DS . 'excavators' . DS . 'joomla_' . 'j' . JVERSION_SHORT . '.php';
require_once 'lib' . DS .'forge' . DS . 'forge.php';