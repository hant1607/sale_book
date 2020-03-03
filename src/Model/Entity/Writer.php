<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;

class Writer extends Entity {
    protected $_accessible = [
        'name' => true,
        'slug' => true,
        'biography' => true
    ];
}
