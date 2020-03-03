<?php
namespace App\Controller;

class BooksController extends AppController
{
    public function index()
    {
        $books = $this->loadModel('Books')->find();
        $this->set(compact('books'));
    }

    public function add() {

    }

    public function view() {

    }

    public function edit() {

    }
}

