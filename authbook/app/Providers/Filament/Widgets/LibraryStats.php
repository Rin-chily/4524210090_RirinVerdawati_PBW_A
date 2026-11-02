<?php

namespace App\Providers\Filament\Widgets;

use App\Models\Book;
use App\Models\Author;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class LibraryStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Books', Book::count())
                ->description('Jumlah seluruh buku')
                ->icon('heroicon-o-book-open'),

            Stat::make('Total Authors', Author::count())
                ->description('Jumlah seluruh penulis')
                ->icon('heroicon-o-users'),
        ];
    }
}