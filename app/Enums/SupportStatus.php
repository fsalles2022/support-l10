<?php

namespace App\Enums;

enum SupportStatus: string
{
    case O = 'open';
    case C = 'closed';
    case P = 'pending';
}
