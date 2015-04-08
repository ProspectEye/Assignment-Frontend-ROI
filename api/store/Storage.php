<?php

	namespace ROI\Api\Store;

	use ROI\Api\Entities as Entities;

	class Storage {

		protected $_store;

		public function __construct($bPersistFromSession = false) {
			
			$this->_store = array(
				"badges" => array(),
				"badgerelation" => array(),
				/* to be implemented */
			);

			if($bPersistFromSession === true) {
				/* fill _store with persisted data from session */
			}
		}

		public function getBadges() {
			return $this->_store["bagdes"];
		}

		public function getBadgeById($id) {
			/* to be implemented */
		}

		public function addBadge(Entities\Badge $badge) {
			$this->_store["bagdes"][] = $badge;
		}

		public function removeBadge($badgeId) {
			/* to be implemented */
		}

		/* to be implemented */

	}

?>