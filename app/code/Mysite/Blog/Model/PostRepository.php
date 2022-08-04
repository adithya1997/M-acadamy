<?php declare(strict_types=1);

namespace Mysite\Blog\Model;

use Mysite\Blog\Api\Data\PostInterface;
use Mysite\Blog\Api\PostRepositoryInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;

class PostRepository implements PostRepositoryInterface
{
    public function save(PostInterface $post): PostInterface
    {
        // TODO: Implement save() method.
    }

    public function deleteById(int $id): bool
    {
        // TODO: Implement deleteById() method.
    }
}
