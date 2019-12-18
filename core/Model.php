<?php 

	class Model extends DB {
		private $_table;

		public function __construct($table) {
			$this->_table = $table;
		}

		public function select($selecting = [], $selector = [], $condition = '') {
			return $this->select($this->_table, $selecting, $selector, $condition);
		}

		public function insert($fields) {
			return $this->insert($this->_table, $fields);
		}

		public function update($id, $param, $select, $selector) {
			return $this->update($this->_table, $id, $param, $select, $selector);
		}

		public function delete($condition, $id) {
			return $this->delete($this->_table, $condition, $id);
		}
	}