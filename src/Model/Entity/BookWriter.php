<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;

class BookWriter extends Entity {
    protected $_accessible = [
      'book_id' => true,
      'writer_id' => true
    ];
}
