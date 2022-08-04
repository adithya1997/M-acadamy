<?php declare(strict_types=1);

namespace Mysite\Blog\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Mysite\Blog\Model\ResourceModel\Post;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(POST::class,Post::class);
    }
}
