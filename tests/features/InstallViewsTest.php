<?php

namespace ShawnSandy\Jarvis\Test;


class InstallViewsTest Extends TestCase

{


	/**
	* Test that true does in fact equal true
			*/
		public function testInstallViewsClass() {
		$this->assertTrue(true);
	}



	/**
	* @test
	     */
	    public function testIfDefaultViewIsInstalled() {
        dump($views);
		$this->assertEquals('Views/',$views);

	}


}
