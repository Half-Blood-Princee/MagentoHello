<?php

namespace Learning\HelloModule\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;

class Index extends Action implements HttpGetActionInterface
{
    public function execute()
    {
        echo "Hello Daniil";
    }
}
