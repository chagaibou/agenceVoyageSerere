<?php
// src/controllers/AuthController.php
require_once __DIR__.'/../repositories/ClientRepository.php';
require_once __DIR__.'/../helpers/session.php';
require_once __DIR__.'/../helpers/sendOtpEmail.php';

class AuthController {
    // ----- Inscription -----
    public static function auth_register(array $data): array {
        $errors = [];

        // Normalisation légère
        $data['nom'] = trim($data['nom'] ?? '');
        $data['prenom'] = trim($data['prenom'] ?? '');
        $data['email'] = strtolower(trim($data['email'] ?? ''));
        $data['telephone'] = trim($data['telephone'] ?? '');
        $data['passeport_ou_piece'] = trim($data['passeport_ou_piece'] ?? '');
        $data['password'] = $data['password'] ?? '';

        // Validations
        if ($data['nom'] === '') $errors[] = "Le nom est obligatoire.";
        if ($data['prenom'] === '') $errors[] = "Le prénom est obligatoire.";
        if ($data['email'] === '' || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Email invalide.";
        }
        if ($data['password'] === '') $errors[] = "Le mot de passe est obligatoire.";

        // Email déjà utilisé ?
        if (!$errors) {
            $existing = ClientRepository::findByEmail($data['email']);
            if ($existing) $errors[] = "Cet email est déjà utilisé.";
        }

        if ($errors) {
            return [null, $errors];
        }

        // Insertion
        $client = ClientRepository::create($data);

        if (!$client) {
            return [null, ["Erreur interne lors de la création du compte."]];
        }

        // (optionnel) envoyer OTP si tu en as besoin :
        // sendOtpEmail($client->email, $otpCode);

        return [$client, []];
    }
}
