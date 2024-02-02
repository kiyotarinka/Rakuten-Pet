<?php

namespace App\Enums;

enum GenruTypes: int
{
    case DOG = 507513;
    case CAT = 507524;
    case FISH = 203107;
    


    public function getName(): string
    {
        return match ($this) {
            self::DOG => '犬用品',
            self::CAT => '猫用品',
            self::FISH => '熱帯魚・アクアリウム',
        };
    }
}