<?php
// index.php — simple PHP page for listing books

require_once 'Book.php';

// For demo purposes, create some books
$book1 = new Book("1984", "George Orwell", "9780451524935", 1949);
$book2 = new Book("Brave New World", "Aldous Huxley", "9780060850524", 1932);

$books = [$book1, $book2];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Book List</title>
</head>
<body>
    <h1>Books</h1>
    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <strong><?php echo $book->getTitle(); ?></strong> by <?php echo $book->getAuthor(); ?> (<?php echo $book->getPublishedYear(); ?>) - ISBN: <?php echo $book->getISBN(); ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
