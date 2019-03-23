<?php

namespace app\controllers;

class BookController extends Controller
{
    /**
     * @return array
     */
    public function indexAction()
    {
        return $this->render('index', ['p' => 'params']);
    }

    public function createAction()
    {
        var_dump('create');die;
    }
}