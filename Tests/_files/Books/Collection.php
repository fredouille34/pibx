<?php
class Collection {
	private $books;

	public function setBooks($books) {
		$this->books = $books;
	}
	public function getBooks() {
		return $this->books;
	}
}