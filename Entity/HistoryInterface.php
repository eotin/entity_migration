<?php

namespace App\Entity;

interface HistoryInterface
{
    public function getHistory();

    public function getEnabled();

    public function setEnabled(bool $enable);
}
