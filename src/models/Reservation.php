<?php
class Reservation {
    public ?int $id;
    public int $client_id;
    public string $type_reservation; // 'HAJJ' | 'OMRA' | 'VOYAGE' | 'TOURISME' | 'VISA'
    public string $statut;           // 'EN_COURS' | 'CONFIRMEE' | 'ANNULEE'
    public float $prix_total;
    public string $date_creation;
    public string $updated_at;

    public function __construct(array $row) {
        $this->id               = isset($row['id']) ? (int)$row['id'] : null;
        $this->client_id        = (int)$row['client_id'];
        $this->type_reservation = $row['type_reservation'];
        $this->statut           = $row['statut'] ?? 'EN_COURS';
        $this->prix_total       = isset($row['prix_total']) ? (float)$row['prix_total'] : 0.0;
        $this->date_creation    = $row['date_creation'] ?? date('Y-m-d H:i:s');
        $this->updated_at       = $row['updated_at'] ?? date('Y-m-d H:i:s');
    }

    public function isConfirmee(): bool { return $this->statut === 'CONFIRMEE'; }
}
