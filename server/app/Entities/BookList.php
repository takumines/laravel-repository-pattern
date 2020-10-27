<?php


namespace App\Entities;

use ArrayIterator;
use ArrayObject;
use IteratorAggregate;

class BookList implements IteratorAggregate
{
    private $bookList;

    public function __construct()
    {
        $this->bookList = new ArrayObject();
    }

    public function add(Book $book)
    {
        $this->bookList[] = $book;
    }

    public function getIterator(): ArrayIterator
    {
        return $this->bookList->getIterator();
    }
}