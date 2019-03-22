<?php

namespace app;

use app\controllers\Controller;
use app\controllers\BookController;
use Exception;

class Router implements IRouter {

    private $page;

    private $params = [];

    private $accessPages = [
        'book' => BookController::class,
//        'authors' => AuthorController::class,
//        'author' => AuthorController::class,
//        'publishers' => PublisherController::class,
//        'publisher' => PublisherController::class,
//        'rubrics' => RubricController::class,
//        'rubric' => AuthorController::class
    ];

    public function __construct(array $page)
    {
        $this->mapper($page);
    }

    /**
     * @return mixed
     * @throws Exception
     */
    public function getController()
    {
        if (array_key_exists($this->page, $this->accessPages) !== false) {
            return new $this->accessPages[$this->page]($this->params);
        }

        throw new Exception('page is invalid');
    }

    /**
     * @param $page
     */
    private function mapper($page)
    {
        if (empty($page['route'])) {
            $this->page = 'book';
            $this->params = ['index'];
            return;
        }
        $request = explode('/', trim($page['route'], '/'));
        array_shift($request);
        $this->params = $request;
    }
}
