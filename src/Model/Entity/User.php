<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

class User extends Entity {
    protected $_accessible = [
        'group_id' => true,
        'username' => true,
        'email' => true,
        'password' => true,
        'phone' => true,
        'address' => true
    ];

    protected function _setPASS($password) {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($password);
    }
}
