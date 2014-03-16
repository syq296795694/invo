<?php

class IndexController extends ControllerBase
{
    public function initialize()
    {
        Phalcon\Tag::setTitle('Welcome');
        parent::initialize();
    }

    public function indexAction()
    {
    }
}
