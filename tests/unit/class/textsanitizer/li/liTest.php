<?php
require_once(dirname(__FILE__).'/../../../init.php');

require_once(XOOPS_ROOT_PATH.'/class/textsanitizer/li/li.php');

/**
* PHPUnit special settings :
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/
class MytsLiTest extends \PHPUnit_Framework_TestCase
{
	protected $myclass = 'MytsLi';
	
    public function test___construct()
	{
		$ts = new MyTextSanitizer();
		$instance = new $this->myclass($ts);
		$this->assertInstanceOf($this->myclass, $instance);
		$this->assertInstanceOf('MyTextSanitizerExtension', $instance);
    }
	
    function test_load()
    {
    }
}