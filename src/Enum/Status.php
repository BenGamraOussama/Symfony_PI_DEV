<?php

namespace App\Enum;

enum ExerciceStatus: string
{
    case NOT_STARTED = 'Pas commencé';
    case IN_PROGRESS = 'En cours';
    case COMPLETED = 'Complété';
}
