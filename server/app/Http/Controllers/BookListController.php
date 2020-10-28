<?php

namespace App\Http\Controllers;

use App\Services\BookService;
use Illuminate\Http\Request;

class BookListController extends Controller
{
    private $BookService;

    public function __construct(BookService $BookService)
    {
        $this->BookService = $BookService;
    }

    public function index()
    {
        $list = $this->BookService->getList();

        foreach ($list->getIterator() as $d) {
            echo $d->getTitle();
        }
    }
}
