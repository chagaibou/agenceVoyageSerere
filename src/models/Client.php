<?php
// src/models/Client.php
class Client {
    public ?int $id;
    public string $nom;
    public string $prenom;
    public string $email;
    public ?string $telephone;
    public ?string $passeport_ou_piece;
    public string $password_hash;
    public string $user_role;    // Changement de 'role' -> 'user_role'
    public bool $email_verified; // 1 = email confirmé, 0 = non confirmé
    public ?string $email_otp_hash;
    public ?string $email_otp_expires_at;
    public int $email_otp_attempts;
    public ?string $email_otp_last_sent_at;

    public function __construct(array $row) {
        $this->id                     = isset($row['id']) ? (int)$row['id'] : null;
        $this->nom                    = $row['nom'];
        $this->prenom                 = $row['prenom'];
        $this->email                  = $row['email'];
        $this->telephone              = $row['telephone'] ?? null;
        $this->passeport_ou_piece     = $row['passeport_ou_piece'] ?? null;
        $this->password_hash          = $row['password_hash'];
        $this->user_role              = $row['user_role']; // 'client' | 'admin'
        $this->email_verified         = (bool)$row['email_verified'];
        $this->email_otp_hash         = $row['email_otp_hash'] ?? null;
        $this->email_otp_expires_at   = $row['email_otp_expires_at'] ?? null;
        $this->email_otp_attempts     = (int)$row['email_otp_attempts'];
        $this->email_otp_last_sent_at = $row['email_otp_last_sent_at'] ?? null;
    }

    // Méthode pour vérifier si l'email a été vérifié
   public function isEmailVerified(): bool {
    return (bool)$this->email_verified;
    }


    // Méthode pour vérifier si l'utilisateur est un admin
    public function isAdmin(): bool {
        return $this->user_role === 'admin';
    }

    // Méthode pour vérifier si le code OTP est expiré
    public function isOtpExpired(): bool {
        if (!$this->email_otp_expires_at) return true;
        return strtotime($this->email_otp_expires_at) < time();
    }

    // Méthode pour vérifier si l'utilisateur a dépassé le nombre maximal de tentatives de validation OTP
    public function hasMaxOtpAttempts(): bool {
        return $this->email_otp_attempts >= 5;
    }
}
