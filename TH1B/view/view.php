<!DOCTYPE html>
<html>
<head>
    <title>Quản lý sách</title>
</head>
<body>
    <?php
    $books = $bookList->getBooks();
    foreach ($books as $book) {
        $bookInfo = $book->getBookInfo();
        echo '<p>';
        echo 'Title: ' . $bookInfo['title'] . '<br>';
        echo 'Author: ' . $bookInfo['author'] . '<br>';
        echo 'Publisher: ' . $bookInfo['publisher'] . '<br>';
        echo 'Publication Year: ' . $bookInfo['publicationYear'] . '<br>';
        echo 'ISBN: ' . $bookInfo['isbn'] . '<br>';
        echo 'Chapters: ' . implode(', ', $bookInfo['chapters']);
        echo '</p>';
    }
    ?>

    <form action="" method="get">
        <label for="sort">Sắp xếp theo:</label>
        <select name="sort" id="sort">
            <option value="author">Tên tác giả</option>
            <option value="title">Tên sách</option>
            <option value="publicationYear">Năm xuất bản</option>
        </select>
        <input type="submit" value="Sắp xếp">
    </form>
</body>
</html>
