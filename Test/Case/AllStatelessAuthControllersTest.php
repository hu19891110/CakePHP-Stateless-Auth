<?php
/*
 * Custom test suite to execute all StatelessAuth Plugin controller tests.
 */
class AllStatelessAuthControllersTest extends PHPUnit_Framework_TestSuite {
	public static function suite() {
		$suite = new CakeTestSuite('All StatelessAuth Plugin Controller Tests');
		$suite->addTestDirectory(dirname(__FILE__) . '/Controller/');
		return $suite;
	}
}
