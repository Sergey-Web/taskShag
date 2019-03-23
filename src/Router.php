<?php

namespace app;

use app\controllers\BookController;
use app\controllers\AuthorController;
use app\controllers\PublisherController;
use Exception;

class Router implements IRouter {

    private $page;

    private $params = [];

    private $accessPages = [
        'book' => BookController::class,
        'author' => AuthorController::class,
        'publisher' => PublisherController::class,
        'rubric' => RubricController::class
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
        if (empty($page['route']) || $page['route'] === 'book') {
            $this->page = 'book';
            $this->params = ['index'];
            return;
        }
        $request = explode('/', trim($page['route'], '/'));
        $this->page = $request[0];
        array_shift($request);
        $this->params = !empty($request) ? $request : ['index'];
    }
}
