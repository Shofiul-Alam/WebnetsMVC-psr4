<?php

namespace Webnets\controllers; 

use Lib\App;
use Lib\Test;
use Lib\Controller;


class PagesController extends Controller{

    public function index() {
        $this->data['test_content'] = "Here will be a pages list";
        $this->data['test'] = Test::getData();
    }


    public function view() {
        $params = App::getRouter()->getParams();

        if(isset($params[0])){
            $alias = strtolower($params[0]);

            $this->data['content'] = "here will be a page with '{$alias}' alias";
        }
    }
}