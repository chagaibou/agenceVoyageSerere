<?php
require_once __DIR__.'/../config/db.php';
require_once __DIR__.'/../models/Reservation.php';
require_once __DIR__.'/../models/ReservationHajj.php';
require_once __DIR__.'/../models/ReservationOmra.php';
require_once __DIR__.'/../models/ReservationVoyage.php';
require_once __DIR__.'/../models/ReservationTourisme.php';
require_once __DIR__.'/../models/ReservationVisa.php';

final class ReservationRepository {

    // ---------- Créations ---------- //
    public static function createHajj(int $client_id, int $annee, int $nb_personnes=1, float $prix_total=0.0): ?int {
        $pdo = db();
        try {
            $pdo->beginTransaction();

            $pdo->prepare("INSERT INTO reservations (client_id, type_reservation, prix_total)
                           VALUES (?, 'HAJJ', ?)")
                ->execute([$client_id, $prix_total]);
            $id = (int)$pdo->lastInsertId();

            $pdo->prepare("INSERT INTO reservation_hajj (reservation_id, annee, nb_personnes)
                           VALUES (?,?,?)")->execute([$id, $annee, $nb_personnes]);

            $pdo->commit();
            return $id;
        } catch (Throwable $e) {
            $pdo->rollBack();
            return null;
        }
    }

    public static function createOmra(int $client_id, string $date_aller, string $date_retour, int $nb_personnes=1, float $prix_total=0.0): ?int {
        if (strtotime($date_retour) <= strtotime($date_aller)) return null;
        $pdo = db();
        try {
            $pdo->beginTransaction();

            $pdo->prepare("INSERT INTO reservations (client_id, type_reservation, prix_total)
                           VALUES (?, 'OMRA', ?)")
                ->execute([$client_id, $prix_total]);
            $id = (int)$pdo->lastInsertId();

            $pdo->prepare("INSERT INTO reservation_omra (reservation_id, date_aller, date_retour, nb_personnes)
                           VALUES (?,?,?,?)")
                ->execute([$id, $date_aller, $date_retour, $nb_personnes]);

            $pdo->commit();
            return $id;
        } catch (Throwable $e) {
            $pdo->rollBack();
            return null;
        }
    }

    public static function createVoyage(int $client_id, string $destination, string $date_aller, string $date_retour, int $nb_personnes=1, float $prix_total=0.0): ?int {
        if (strtotime($date_retour) <= strtotime($date_aller)) return null;
        $pdo = db();
        try {
            $pdo->beginTransaction();

            $pdo->prepare("INSERT INTO reservations (client_id, type_reservation, prix_total)
                           VALUES (?, 'VOYAGE', ?)")
                ->execute([$client_id, $prix_total]);
            $id = (int)$pdo->lastInsertId();

            $pdo->prepare("INSERT INTO reservation_voyage (reservation_id, destination, date_aller, date_retour, nb_personnes)
                           VALUES (?,?,?,?,?)")
                ->execute([$id, $destination, $date_aller, $date_retour, $nb_personnes]);

            $pdo->commit();
            return $id;
        } catch (Throwable $e) {
            $pdo->rollBack();
            return null;
        }
    }

    public static function createTourisme(int $client_id, string $pays, string $date_aller, string $date_retour, int $nb_personnes=1, float $prix_total=0.0): ?int {
        if (strtotime($date_retour) <= strtotime($date_aller)) return null;
        $pdo = db();
        try {
            $pdo->beginTransaction();

            $pdo->prepare("INSERT INTO reservations (client_id, type_reservation, prix_total)
                           VALUES (?, 'TOURISME', ?)")
                ->execute([$client_id, $prix_total]);
            $id = (int)$pdo->lastInsertId();

            $pdo->prepare("INSERT INTO reservation_tourisme (reservation_id, pays, date_aller, date_retour, nb_personnes)
                           VALUES (?,?,?,?,?)")
                ->execute([$id, $pays, $date_aller, $date_retour, $nb_personnes]);

            $pdo->commit();
            return $id;
        } catch (Throwable $e) {
            $pdo->rollBack();
            return null;
        }
    }

    public static function createVisa(int $client_id, string $pays, string $type_visa, float $prix_total=0.0): ?int {
        $pdo = db();
        try {
            $pdo->beginTransaction();

            $pdo->prepare("INSERT INTO reservations (client_id, type_reservation, prix_total)
                           VALUES (?, 'VISA', ?)")
                ->execute([$client_id, $prix_total]);
            $id = (int)$pdo->lastInsertId();

            $pdo->prepare("INSERT INTO reservation_visa (reservation_id, pays, type_visa)
                           VALUES (?,?,?)")
                ->execute([$id, $pays, $type_visa]);

            $pdo->commit();
            return $id;
        } catch (Throwable $e) {
            $pdo->rollBack();
            return null;
        }
    }

    // ---------- Lecture ---------- //
    public static function findReservation(int $id): ?Reservation {
        $stmt = db()->prepare("SELECT * FROM reservations WHERE id=?");
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        return $row ? new Reservation($row) : null;
    }

    public static function listByClient(int $client_id): array {
        $stmt = db()->prepare("SELECT * FROM reservations WHERE client_id=? ORDER BY date_creation DESC");
        $stmt->execute([$client_id]);
        $out = [];
        foreach ($stmt->fetchAll() as $r) $out[] = new Reservation($r);
        return $out;
    }

    public static function loadDetails(Reservation $r) {
        $pdo = db();
        switch ($r->type_reservation) {
            case 'HAJJ':
                $q = $pdo->prepare("SELECT * FROM reservation_hajj WHERE reservation_id=?");
                $q->execute([$r->id]);
                $row = $q->fetch();
                return $row ? new ReservationHajj($row) : null;

            case 'OMRA':
                $q = $pdo->prepare("SELECT * FROM reservation_omra WHERE reservation_id=?");
                $q->execute([$r->id]);
                $row = $q->fetch();
                return $row ? new ReservationOmra($row) : null;

            case 'VOYAGE':
                $q = $pdo->prepare("SELECT * FROM reservation_voyage WHERE reservation_id=?");
                $q->execute([$r->id]);
                $row = $q->fetch();
                return $row ? new ReservationVoyage($row) : null;

            case 'TOURISME':
                $q = $pdo->prepare("SELECT * FROM reservation_tourisme WHERE reservation_id=?");
                $q->execute([$r->id]);
                $row = $q->fetch();
                return $row ? new ReservationTourisme($row) : null;

            case 'VISA':
                $q = $pdo->prepare("SELECT * FROM reservation_visa WHERE reservation_id=?");
                $q->execute([$r->id]);
                $row = $q->fetch();
                return $row ? new ReservationVisa($row) : null;
        }
        return null;
    }

    // ---------- Mise à jour ---------- //
    public static function updateStatut(int $reservation_id, string $statut): bool {
        if (!in_array($statut, ['EN_COURS','CONFIRMEE','ANNULEE'], true)) return false;
        $stmt = db()->prepare("UPDATE reservations SET statut=? WHERE id=?");
        return $stmt->execute([$statut, $reservation_id]);
    }

    public static function updatePrix(int $reservation_id, float $prix): bool {
        $stmt = db()->prepare("UPDATE reservations SET prix_total=? WHERE id=?");
        return $stmt->execute([$prix, $reservation_id]);
    }
}
