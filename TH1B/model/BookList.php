<?php
class BookList {
    private $books = array();

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function getBooks() {
        return $this->books;
    }

    public function sortBooksByAuthor() {
        usort($this->books, function($a, $b) {
            return strcmp($a->getBookInfo()['author'], $b->getBookInfo()['author']);
        });
    }

    public function sortBooksByTitle() {
        usort($this->books, function($a, $b) {
            return strcmp($a->getBookInfo()['title'], $b->getBookInfo()['title']);
        });
    }

    public function sortBooksByPublicationYear() {
        usort($this->books, function($a, $b) {
            return $a->getBookInfo()['publicationYear'] - $b->getBookInfo()['publicationYear'];
        });
    }
}
?>
