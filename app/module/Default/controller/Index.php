<?php

/**
 * Class Default_Controller_Index
 */
class Default_Controller_Index extends BaseController
{
    public function indexAction()
    {
        $this->view->offsetSet('testik', 12345);
    }
}