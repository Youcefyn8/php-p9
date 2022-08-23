<?php declare(strict_types = 1);

namespace App\Blog;

use App\Blog\Traits\Articlable;
use App\Blog\ANamedObject;

class Tag extends ANamedObject
{
    use Articlable;

    public function __construct(int $id, string $name, ?string $description, array $articles = [])
    {
        parent::__construct($id, $name, $description);
        $this->articles = $articles;
    }
}