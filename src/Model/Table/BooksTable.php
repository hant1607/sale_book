<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class BooksTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config); // TODO: Change the autogenerated stub
        $this->setTable('books');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id'
        ]);

        $this->belongsToMany('Writers', [
            'foreignKey' => 'book_id',
            'targetForeignKey' => 'writer_id',
            'joinTable' => 'books_writers'
        ]);

        $this->hasMany('Comments', [
            'foreignKey' => 'book_id'
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator->notEmptyString('title');
        $validator->notEmptyFile('image');
        $validator->notEmptyString('price');
        $validator->notEmptyString('pages');
        $validator->notEmptyString('publisher');
        $validator->notEmptyDate('publish_date');

        return $validator;
    }
}
