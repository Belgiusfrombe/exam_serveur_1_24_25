<?php
namespace App\Models\CategoriesModel;

use \PDO;

function findAll(PDO $connexion): array
{
    $sql = "SELECT * FROM categories ORDER BY created_at DESC;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function findAllByPostId(PDO $connexion, int $postId): array
{
    $sql = "SELECT c.* FROM categories c
            JOIN posts_categories pc ON c.id = pc.category_id
            WHERE pc.post_id = :post_id;";
    $stmt = $connexion->prepare($sql);
    $stmt->bindValue(':post_id', $postId, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}