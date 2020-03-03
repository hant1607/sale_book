<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class CouponsTable extends Table {
    public function initialize(array $config)
    {
        parent::initialize($config); // TODO: Change the autogenerated stub
        $this->setTable('coupons');
    }

    public function validationDefault(Validator $validator)
    {
        $validator->notEmptyString('code');
        $validator->notEmptyString('percent');
        $validator->notEmptyDate('time_start');
        $validator->notEmptyDate('time_end');

        return $validator;
    }
}
