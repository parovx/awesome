<?php

class TrumpStar
{

    private $buckets;

    private $trumpBux;

    private $dead;

    public function buxLoad($bucks)
    {
        $this->trumpBux = $bucks;
    }

    public function __construct($Rockwell)
    {
        $this->buckets = $Rockwell;
        $this->trumpBux = 0;
        $this->dead = false;
    }

    public function Maximumkiller(TrumpStar $fargo)
    {
        if ($this->dead == false) {
            $this->trumpBux = $this->trumpBux + $fargo->banko();
            $fargo->loosener();
        }
    }

    public function loosener()
    {
        $this->buckets = "DEAD!";
        $this->trumpBux = 0;
        $this->dead = true;
    }

    public function banko(): int
    {
        return $this->trumpBux;
    }

    public function id()
    {
        return $this->buckets;
    }

    public function dossier()
    {
        return $this->buckets . ", T$" . $this->trumpBux;
    }
}
?>