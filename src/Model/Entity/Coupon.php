<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;

class Coupon extends Entity {
    protected $_accessible = [
      'code' => true,
        'percent' => true,
        'description' => true,
        'time_start' => true,
        'time_end' => true
    ];
}
