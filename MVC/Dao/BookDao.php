<?php

namespace eftec\examplebook\dao;

class BookDao
{
    public static function insert($book) {
        try {
            database()
                ->set('User=?', $book['User'])
                ->set('Type=?', $book['Type'])
                ->set('Description=?', $book['Description'])
                ->from('Book')
                ->insert();
            return true;
        } catch (\Exception $e) {
            valid()->addMessage('ERRORINSERT','Unable to insert. '.database()->lastError(),'error');
        }
        return false;
    }
    public static function list() {
        try {
            $book = database()->select('*')
                ->from('Book')
                ->order('Book_Id desc')
                ->limit('1,20')
                ->toList();
        } catch (\Exception $e) {
            valid()->addMessage('ERRORINSERT','Unable to list. '.database()->lastError(),'error');
            $book=[];
        }
        return $book;
    }
}