<?php
namespace Application\controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel(); // display standard index page
    }

    public function welcomeMessageAction() {
        return 'Hello world!';
    }

    public function __invoke() {
        return 'Hello world!';
    }
}