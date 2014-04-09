<?php
require_once "home/bigc/composer/vendor/autoload.php";
require_once "sample.php";
 
class UserTest extends PHPUnit_Framework_TestCase
{
	// test the talk method
    public function testTalk()
	 {
        // make an instance of the user
        $user = new User();
		
		/* protected function setUp() 
		 {
        $this->user = new User();
        $this->user->setName("Tom");
        }
				
		protected function tearDown()
		 {
        unset($this->user);
         }*/
 
        // use assertEquals to ensure the greeting is what you
        $expected = "Hello world!";
        $actual = $user->talk();
        $this->assertEquals($expected, $actual);
	  }
}
?>