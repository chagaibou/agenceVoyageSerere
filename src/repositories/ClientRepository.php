<?php
// src/repositories/ClientRepository.php
require_once __DIR__.'/../config/db.php';
require_once __DIR__.'/../models/Client.php';

final class ClientRepository {

    public static function create(array $data): ?Client {
        $nom = $data["nom"] ?? null;
        $prenom = $data["prenom"] ?? null;
        $email = strtolower(trim($data["email"] ?? ''));
        $telephone = $data["telephone"] ?? null;
        $passeport_ou_piece = $data["passeport_ou_piece"] ?? null;
        $password = $data["password"] ?? null;

        if (!$nom || !$prenom || !$email || !$password) {
            return null;
        }

        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $pdo = db();

        try {
           $stmt = $pdo->prepare(
            "INSERT INTO clients 
            (nom, prenom, email, telephone, passeport_ou_piece, password_hash)
            VALUES (:nom, :prenom, :email, :telephone, :passeport_ou_piece, :password_hash)"
           );
            $stmt->bindParam(":nom", $nom);
            $stmt->bindParam(":prenom", $prenom);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":telephone", $telephone);
            $stmt->bindParam(":passeport_ou_piece", $passeport_ou_piece);
            $stmt->bindParam(":password_hash", $password_hash);
            $stmt->execute();

            $clientId = $pdo->lastInsertId();
            $stmt = $pdo->prepare("SELECT * FROM clients WHERE id = :id");
            $stmt->execute([':id' => $clientId]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!$row) return null;

            // 👉 Assure-toi que ton modèle Client a un constructeur qui accepte un tableau
            return new Client($row);

        } catch (Throwable $e) {
            error_log($e->getMessage());
            return null;
        }
    }

    public static function findByEmail(string $email): ?Client {
        $stmt = db()->prepare("SELECT * FROM clients WHERE email = ?");
        $stmt->execute([strtolower(trim($email))]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ? new Client($row) : null;
    }

    
}
