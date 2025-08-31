<?php
class ReservationTourisme {
    public int $reservation_id;
    public string $pays;
    public string $date_aller;
    public string $date_retour;
    public int $nb_personnes;

    public function __construct(array $row) {
        $this->reservation_id = (int)$row['reservation_id'];
        $this->pays           = $row['pays'];
        $this->date_aller     = $row['date_aller'];
        $this->date_retour    = $row['date_retour'];
        $this->nb_personnes   = (int)$row['nb_personnes'];
    }
}
