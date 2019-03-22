<?php

namespace app\controllers;

class BookController extends Controller
{
    /**
     * @return array
     */
    public function indexAction()
    {
        return $this->render('índex', ['p' => 'params']);
    }
}