<?php

	use ROI\Api\Store as Store;
	use ROI\Api\Entities as Entities;

    class StorageTest extends \PHPUnit_Framework_TestCase {

    	protected $_storage;

    	public function setUp() {
    		$this->_storage = new Store\Storage();
    	}

        public function testAddBadge() {
        	$badge = new Entities\Badge(1,12,2,3);

        	$this->_storage->addBadge($badge);

        	$badges = $this->_storage->getBadges();
        	$this->assertEquals(1, count($badges));
        }

        /* to be implemented */
        
    }

?>