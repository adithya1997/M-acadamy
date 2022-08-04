<?php declare(strict_types=1);

namespace Mysite\Blog\Controller\Post;


use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class ListAction implements HttpGetActionInterface
{
    public function __construct(
        private PageFactory $pageFactory
    ){}

    public function execute(): Page
    {
        // TODO: Implement execute() method.
        return $this->pageFactory->create();
    }
}

