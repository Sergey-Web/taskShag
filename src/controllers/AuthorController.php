<?php

namespace app\controllers;

class AuthorController extends Controller
{
    /**
     * @return array
     */
    public function indexAction()
    {
        return $this->render('author', ['p' => 'params']);
    }
}