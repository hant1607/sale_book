<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;

class Category extends Entity {
    protected $_accessible = [
      'name' => true,
      'slug' => true,
      'description' => true
    ];
}
