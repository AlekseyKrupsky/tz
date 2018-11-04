<?php
/**
 * Created by PhpStorm.
 * User: LORD
 * Date: 28.10.2018
 * Time: 16:00
 */

namespace Test\Form\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{

    protected $_pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    )
    {
        $this->_pageFactory = $pageFactory;

        return parent::__construct($context);
    }

    public function execute()
    {
//        echo '123';
        return $this->_pageFactory->create();
    }
}
