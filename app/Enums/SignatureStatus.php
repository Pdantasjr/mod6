<?php

namespace App\Enums;

enum SignatureStatus: Int
{
    case ACTIVE = 1;
    case DESACTIVED = 2;
    case SUSPENDED = 3;
    case CANCELED = 0;
}