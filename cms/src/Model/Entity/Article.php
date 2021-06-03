<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Article extends Entity
{
    protected $_accessiable = [
        '*' => true,
        'id' => false,
        'slug' => false
    ];
}
