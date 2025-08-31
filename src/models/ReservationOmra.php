<?php
class ReservationOmra {
    public int $reservation_id;
    public string $date_aller;   // 'YYYY-MM-DD'
    public string $date_retour;  // 'YYYY-MM-DD'
    public int $nb_personnes;

    public function __construct(array $row) {
        $this->reservation_id = (int)$row['reservation_id'];
        $this->date_aller     = $row['date_aller'];
        $this->date_retour    = $row['date_retour'];
        $this->nb_personnes   = (int)$row['nb_personnes'];
    }
}
