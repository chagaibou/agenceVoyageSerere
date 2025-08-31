<?php
class ReservationVisa {
    public int $reservation_id;
    public string $pays;
    public string $type_visa;

    public function __construct(array $row) {
        $this->reservation_id = (int)$row['reservation_id'];
        $this->pays           = $row['pays'];
        $this->type_visa      = $row['type_visa'];
    }
}
