<?php

namespace App\Enums;

enum ManeyTypes: int
{
    case MANEY1 = 1;
    case MANEY2 = 2;
    case MANEY3 = 3;

    public function getParams(): array
    {
        return match ($this) {
            self::MANEY1 => [
                'minPrice' => 500,
                'maxPrice' => 1000,
            ],
            self::MANEY2 => [
                'minPrice' => 1000,
                'maxPrice' => 3000,

            ],
            self::MANEY3 => [
                'minPrice' => 3000,
                'maxPrice' => 5000,
            ],
        };
    }

    public function getName(): string
    {
        return match ($this) {
            self::MANEY1 => '500 ~ 1000',
            self::MANEY2 => '1000 ~ 3000',
            self::MANEY3 => '3000 ~ 5000',
        };
    }
}