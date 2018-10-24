<?php

	use PHPUnit\Framework\TestCase;
	require 'welcome.php';
	class welcomeTest extends TestCase{
		protected function setUp(){
			$this->welcome = new welcome();
		}

		protected function tearDown(){
			$this->welcome = NULL;
		}

		public function testGreet(){

			$result = $this->welcome->greet();
			$this->assertEquals("welcome to Devops on AWS !",$result);
		}
	}

?>
