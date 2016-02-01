<?php

/**
 * {@inheritdoc}
 */
class Api_IndexController extends Benri_Rest_Controller
{
    public function indexAction()
    {
        $this->_data = 'This is the default API action';
    }
}
