<?php

namespace Source\Models;

use Source\Core\Model;

class News extends Model
{
    public function __construct()
    {
        parent::__construct(
            "news",
            ["id"],
            ["slug", "title", "image"]
        );
    }
    /**
     * category function
     *
     * @return Category
     */
    public function category(): Category
    {
        return (new Category())->findById($this->category_id);
    }
    public function user(): User
    {
        return (new User())->findById($this->user_id);
    }
}
