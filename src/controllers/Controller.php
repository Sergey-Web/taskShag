<?php

namespace app\controllers;

use Exception;

abstract class Controller implements IController
{
    public $layout = 'layout';
    protected $view = 'index';
    protected $content = [];
    protected $params;
    protected $actionName = [];

    /**
     * @param $params
     * @throws Exception
     */
    public function __construct($params)
    {
        $this->checkAction($params);
    }

    function render(string $view, array $params = []): array
    {
        return [
            'view' => $view,
            'params' => $params
        ];
    }

    /**
     * @return array
     */
    public function getAction(): array
    {
        return call_user_func([$this, $this->actionName], $this->params);
    }

    /**
     * @param $params
     * @throws Exception
     */
    protected function checkAction($params)
    {
        if (empty($params)) {
            throw new Exception('page is wrong', 404);
        }

        $actionName = mb_convert_case($params[0], MB_CASE_TITLE,  "UTF-8") . 'Action';

        if (!method_exists($this,  $actionName) || count($params) > 3) {
            throw new Exception('page is wrong', 404);
        }

        $this->actionName = $actionName;
        $this->params = !empty($params[1]) ? $params[1] : null;
    }
}