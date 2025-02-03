<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Category;
use App\Models\Post;
use App\Models\Page;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $countPost = Post::count();
        $countCategory = Category::count();
        $countPage = Page::count();

        return [
            Stat::make('Jumlah Category', $countCategory .' Category'),
            Stat::make('Jumlah Post', $countPost .' Post'),
            Stat::make('Jumlah Page', $countPage .' Page'),
            // Stat::make('2169700001', 'Salsa Dwiyanti'),
            // Stat::make('2169700003', 'Sandy Meliyawan'),
            // Stat::make('2169700006', 'Listiani Lesveva S'),
        ];
    }
}
