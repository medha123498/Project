<?php
class Book {
    // Properties
    private $title;
    private $author;
    private $isbn;
    private $publishedYear;

    // Constructor
    public function __construct($title, $author, $isbn, $publishedYear) {
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
        $this->publishedYear = $publishedYear;
    }

    // Getters
    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getISBN() {
        return $this->isbn;
    }

    public function getPublishedYear() {
        return $this->publishedYear;
    }

    // Setters
    public function setTitle($title) {
        $this->title = $title;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function setISBN($isbn) {
        $this->isbn = $isbn;
    }

    public function setPublishedYear($year) {
        $this->publishedYear = $year;
    }

    // Display book details
    public function displayBookInfo() {
        echo "Title: " . $this->getTitle() . "<br>";
        echo "Author: " . $this->getAuthor() . "<br>";
        echo "ISBN: " . $this->getISBN() . "<br>";
        echo "Published Year: " . $this->getPublishedYear() . "<br>";
    }
}
?>
