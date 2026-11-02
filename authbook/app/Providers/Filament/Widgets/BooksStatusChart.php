<?php

namespace App\Providers\Filament\Widgets;

use App\Models\Book;
use Filament\Widgets\ChartWidget;

class BooksStatusChart extends ChartWidget
{
    protected static ?string $heading = 'Books Available vs Borrowed';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Buku',
                    'data' => [
                        Book::where('status', 'available')->count(),
                        Book::where('status', 'borrowed')->count(),
                    ],
                    'backgroundColor' => [
                        '#22C55E',
                        '#EF4444',
                    ],
                ],
            ],
            'labels' => ['Available', 'Borrowed'],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
