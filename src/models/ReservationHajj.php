<?php
class ReservationHajj {
    public int $reservation_id;
    public int $annee;
    public int $nb_personnes;

    public function __construct(array $row) {
        $this->reservation_id = (int)$row['reservation_id'];
        $this->annee          = (int)$row['annee'];
        $this->nb_personnes   = (int)$row['nb_personnes'];
    }
}
