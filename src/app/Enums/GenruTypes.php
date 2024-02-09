<?php

namespace App\Enums;

enum GenruTypes: int
{
    case DOG = 507513;
    case CAT = 507524;
    case FISH = 203107;
    case MINI = 565699;
    case BIRD = 204183;
    case CARE = 215298;
    case DISH = 206139;
    case HOME = 206213;
    case MEDICINE = 566240;

    public function getParams(): array
    {
        return match ($this) {
            self::DOG => [
                'genruId' => '犬用品',
            ],
            self::CAT => [
                'genruId' => '猫用品',
            ],
            self::FISH => [
                'genruId' => '熱帯魚・アクアリウム',
            ],
            self::MINI => [
                'genruId' => '小動物用品',
            ],
            self::BIRD => [
                'genruId' => '鳥用品',
            ],
            self::CARE => [
                'genruId' => 'ペット用お手入れ用品',
            ],
            self::DISH => [
                'genruId' => 'ペット用食器・給水器・給餌器',
            ],
            self::HOME => [
                'genruId' => '室内ペット用家電',
            ],
            self::MEDICINE => [
                'genruId' => '動物用医薬品',
            ],
        };
    }

    public function getName(): string
    {
        return match ($this) {
            self::DOG => '犬用品',
            self::CAT => '猫用品',
            self::FISH => '熱帯魚・アクアリウム',
            self::MINI => '小動物用品',
            self::BIRD => '鳥用品',
            self::CARE => 'ペット用お手入れ用品',
            self::DISH => 'ペット用食器・給水器・給餌器',
            self::HOME => '室内ペット用家電',
            self::MEDICINE => '動物用医薬品',
        };
    }
}