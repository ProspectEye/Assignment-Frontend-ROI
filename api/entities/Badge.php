<?php

	namespace ROI\Api\Entities;

	class Badge {

		public $id;
		public $accountid;
		public $score;
		public $value;
		
		public function __construct($id = 0, $accountid = 0, $score = 0, $value = 0) {
			$this->id = $id;
			$this->accountid = $accountid;
			$this->score = $score;
			$this->value = $value;
		}

	}

?>