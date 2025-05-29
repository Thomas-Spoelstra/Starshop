<?php

namespace App\Model;

enum StarshipStatusEnum: string
{
    CASE WAITING = 'waiting';
    CASE IN_PROGRESS = 'in progress';
    CASE COMPLETED = 'completed';
}
