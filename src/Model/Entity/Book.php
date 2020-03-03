<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;

class Book extends Entity {
    protected $_accessible = [
      'category_id' => true,
      'title' => true,
      'slug' => true,
        'image' => true,
        'infor' => true,
        'price' => true,
        'sale_price' => true,
        'pages' => true,
        'publisher' => true,
        'publish_date' => true,
        'link_download' => true,
        'published' => true,
    ];
}
