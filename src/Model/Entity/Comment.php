<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;

class Comment extends Entity {
    protected $_accessible = [
        'user_id' => true,
        'book_id' => true,
        'content' => true
    ];
}
