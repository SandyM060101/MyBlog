<?php
namespace App\Filament\Admin\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Category;

class BlogCategoryChart extends ChartWidget
{
    protected static ?string $heading = 'Posts per Category';

    protected function getData(): array
    {
        // Ambil semua kategori beserta jumlah post dalam kategori tersebut
        $categories = Category::select('title')
            ->withCount('posts') // Menghitung jumlah post dalam setiap kategori
            ->orderByDesc('posts_count') // Urutkan dari yang terbanyak
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Number of Posts',
                    'data' => $categories->pluck('posts_count')->toArray(), // Jumlah post dalam kategori
                    'backgroundColor' => '#36A2EB',
                    'borderColor' => '#1E3A8A',
                    'borderWidth' => 1,
                ],
            ],
            'labels' => $categories->pluck('name')->toArray(), // Nama kategori sebagai label
        ];
    }

    protected function getType(): string
    {
        return 'bar'; // Gunakan grafik batang
    }
}
