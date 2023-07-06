<?php

require_once "repository-pattern/Entity/Comment.php";
require_once "get-connection/getConnection.php";
require_once "repository-pattern/Repository/CommentRepository.php";

use Repository\CommentRepositoryImpl;
use Entity\Comment;

function insertComment(){
    $connection = getConnection();

    $repository = new CommentRepositoryImpl($connection);

    $comment = new Comment(email:"Farhan@gmail.com", comment:"MAMAN RACING");
    $newComment = $repository->insert($comment);

    var_dump($newComment->getId());
}

function findById(){
    $connection = getConnection();

    $repository = new CommentRepositoryImpl($connection);

    $comment = $repository->findById(15);
    var_dump($comment->getComment());

}

function findAll(){
    $connection = getConnection();

    $repository = new CommentRepositoryImpl($connection);

    $comment = $repository->findAll();
    var_dump($comment);

}

findById();

