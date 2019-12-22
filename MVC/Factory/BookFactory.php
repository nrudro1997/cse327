<?php

namespace eftec\examplebook\factory;

class BookFactory
{
    public static function Factory() {
        return ['Book_Id'=>0,'User'=>'','Type'=>'','Description'=>''];
    }
    public static function Fetch() {
        $book=self::Factory(); // we start creating an empty book
        $book['Book_Id']=Valid()
            ->type('integer')
            ->required(false)
            ->def(0)
            ->condition('gte','The id can\'t be negative',0)
            ->fetch(INPUT_POST,'Book_Id');        
        $book['User']=Valid()
            ->type('varchar')
            ->required(true)
            ->condition('maxlen','The name must not have than 50 characters',50)
            ->condition('minlen','The name must have at least 3 characters',3)
            ->fetch(INPUT_POST,'User');
        $book['Type']=Valid()
            ->type('varchar')
            ->required(true)
            ->condition('maxlen','The type must not have more than 50 characters',50)
            ->condition('minlen','The type must have at least 3 characters',3)
            ->fetch(INPUT_POST,'Type');
        $book['Description']=Valid()
            ->type('varchar')
            ->required(true)
            ->condition('maxlen','The Description not have more than 200 characters',200)
            ->condition('minlen','The Description must have at least 3 characters',3)
            ->fetch(INPUT_POST,'Description');
        return $book;
    }
}