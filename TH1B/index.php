<?php
    require 'model/Book.php';
    require 'model/BookList.php';

    
    $bookList = new BookList();

    
    $book1 = new Book();
    $book1->setBookInfo('Book A', 'Mr.A', 'Publisher X', 2022, 'ISBN-2468', array('Chapter 1', 'Chapter 2'));
    $bookList->addBook($book1);

    $book2 = new Book();
    $book2->setBookInfo('Book B', 'Mr.B', 'Publisher Y', 2020, 'ISBN-5652', array('Chapter 1', 'Chapter 2', 'Chapter 3'));
    $bookList->addBook($book2);

    $book3 = new Book();
    $book3->setBookInfo('Book C', 'Mr.C', 'Publisher Z', 2021, 'ISBN-6578', array('Chapter 1'));
    $bookList->addBook($book3);

    if (isset($_GET['sort'])) {
        $sort = $_GET['sort'];
        switch ($sort) {
            case 'author':
                $bookList->sortBooksByAuthor();
                break;
            case 'title':
                $bookList->sortBooksByTitle();
                break;
            case 'publicationYear':
                $bookList->sortBooksByPublicationYear();
                break;
            default:
   
                $bookList->sortBooksByAuthor();
                break;
        }
    } else {

        $bookList->sortBooksByAuthor();
    }
    $books = $bookList->getBooks();
    require 'view/view.php';
?>

