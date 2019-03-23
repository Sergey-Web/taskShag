<?php

namespace app\controllers;

class PublisherController extends Controller
{
    /**
     * @return array
     */
    public function indexAction()
    {
        return $this->render('publisher', ['p' => 'params']);
    }
}