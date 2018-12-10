<?php
/**
 * WolvForms class.
 *
 * @package Wolvforms
 */

/**
 * WolvForms class.
 */
class WF_Test_WolvForms extends WP_UnitTestCase {

	/**
	 * WolvForms instance.
	 *
	 * @var \WolvForms instance
	 */
	protected $wf;

	/**
	 * Setup test.
	 */
	public function setUp() {
		parent::setUp();
		$this->wf = wf();
	}

	/**
	 * Test WF has static instance.
	 */
	public function test_wf_instance() {
		$this->assertClassHasStaticAttribute( '_instance', 'WolvForms' );
	}
}
