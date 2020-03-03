<?php
namespace App\Controller;

class CategoriesController extends AppController {
    public function index()
    {
        $categories = $this->loadModel('Categories')->find();
        $this->set(compact('categories'));
    }

    public function add() {

    }

    public function view() {

    }

    public function edit() {

    }
}
