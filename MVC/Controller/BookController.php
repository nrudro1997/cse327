<?php

namespace eftec\examplebook\controller;

use eftec\examplebook\dao\BookDao;
use eftec\examplebook\factory\BookFactory;

class BookController
{
    public static function HomeAction($id="",$idparent="",$event="") {
        header('Location: Book/List');
    }
    public static function IndexActionGet($id="",$idparent="",$event="") {
        $book=BookFactory::Factory(); // we create a new book.
        blade()->regeneratetoken(); // we create a new token
        echo blade()->run('book.index',['book'=>$book]);
    }
    public static function IndexActionPost($id="",$idparent="",$event="") {
        $book = BookFactory::Fetch(); // we read the information obtained from the user
        if (blade()->csrfIsValid()) {
            if (valid()->messageList->errorcount === 0) {
                if (BookDao::insert($book)) {
                    // book inserted correctly, let's go to the list
                    header('Location: ../../Book/List');
                    exit();
                }
            }
        } else {
            valid()->addMessage('TOKEN','Token invalid','error');
        }
        echo blade()->run('book.index',['book'=>$book]);
    }
    public static function ListAction($id="",$idparent="",$event="") {
        $book=BookDao::list();
        echo blade()->run('book.list',['book'=>$book]);
    }
}