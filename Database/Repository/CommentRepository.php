<?php

namespace Repository {

    use Model\Comment;

    interface CommentRepository {
        function insert(Comment $comment): Comment;
        function findById(int $id): ?Comment;
        function findAll(): array;
    }

    class CommentRepositoryImpl implements CommentRepository {

        public function __construct(private \PDO $connection){
            $this->connection = $connection;
        }

        function insert(Comment $comment): Comment {

            $sql = "insert into comments (email, comment) values (?,?)";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$comment->getEmail(), $comment->getComment()]);

            $id = $this->connection->lastInsertId();
            $comment->setId($id);

            return $comment;

        }

        function findById(int $id): ?Comment {

            $sql = "select * from comments where id = ?";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute([$id]);

            $result = $stmt->fetch();

            if ($result) {
                return new Comment(
                    id: $result['id'],
                    email: $result['email'],
                    comment: $result['comment']
                );
            }
            return null;
        }

        function findAll(): array {
            $sql = "select * from comments";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }

}