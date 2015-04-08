<?php

	namespace ROI\Api\Controllers;

	use ROI\Api\Repositories as Repositories;

	class Badge {

		protected $_repo;
		
		public function __construct() {
			$this->_repo = new Repositories\Badge();
		}

		public function getAll() {

			$result = $this->_repo->getAll();

			echo json_encode($result);
		}

		public function getById($id)  {

			$result = $this->_repo->getByItem($id);

			echo json_encode($result);

		}

		public function create() {

		}

		public function update() {

		}

	}

?>