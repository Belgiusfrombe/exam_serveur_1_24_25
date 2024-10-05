<?php

namespace App\Models\PostsModel;

use \PDO;

function findAll(PDO $connexion): array
{
    $sql = "SELECT posts.*, categories.name AS category_name
            FROM posts
            LEFT JOIN categories ON posts.category_id = categories.id
            ORDER BY created_at DESC;";

    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function findOneById(PDO $connexion, $id): array
{
    $sql = "SELECT posts.*, posts.id AS postID, categories.name AS category_name
           FROM posts
           LEFT JOIN categories ON posts.category_id = categories.id
           WHERE posts.id = :id;";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();

    return $rs->fetch(PDO::FETCH_ASSOC);
}

function insertOne(PDO $connexion, array $data): int
{
    $sql = "INSERT INTO posts
            SET title = :title,
                text = :text,
                category_id = :category_id,
                created_at = NOW();";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':title', $data['title'], PDO::PARAM_STR);
    $rs->bindValue(':text', $data['text'], PDO::PARAM_STR);
    $rs->bindValue(':category_id', $data['category_id'], PDO::PARAM_INT);
    $rs->execute();

    return $connexion->lastInsertId();
}

function deleteOneById(PDO $connexion, int $id): void
{
    $sql = "DELETE FROM posts WHERE id = :id;";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
}

function deletePostHasCategoriesById(PDO $connexion, int $id): void
{
    $sql = "DELETE FROM posts
            WHERE category_id = :id;";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
}
