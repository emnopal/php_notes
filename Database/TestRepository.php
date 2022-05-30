<?php

require_once __DIR__ . "/Model/Comment.php";
require_once __DIR__ . "/Connection.php";
require_once __DIR__ . "/Repository/CommentRepository.php";

use Model\Comment;
use Repository\CommentRepositoryImpl;

$conn = getConnection();
$repo = new CommentRepositoryImpl($conn);

// Insert
// $comment = new Comment(email: "testrepo@mail.com", comment: "testrepo comment");
// $newComment = $repo->insert($comment);
// var_dump($newComment->getId());

// Get Comment by ID
// $getCommentByID = $repo->findById(29);
// var_dump($getCommentByID);

// find all comment
$getComment = $repo->findAll();
var_dump($getComment);

$conn = null;
