<?php
interface IBook {
    public function setBookInfo($title, $author, $publisher, $publicationYear, $isbn, $chapters);
    public function getBookInfo();
}
?>

<?php
class Book implements IBook {
    private $title;
    private $author;
    private $publisher;
    private $publicationYear;
    private $isbn;
    private $chapters;

    public function setBookInfo($title, $author, $publisher, $publicationYear, $isbn, $chapters) {
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->publicationYear = $publicationYear;
        $this->isbn = $isbn;
        $this->chapters = $chapters;
    }

    public function getBookInfo() {
        return array(
            'title' => $this->title,
            'author' => $this->author,
            'publisher' => $this->publisher,
            'publicationYear' => $this->publicationYear,
            'isbn' => $this->isbn,
            'chapters' => $this->chapters
        );
    }
}
?>
