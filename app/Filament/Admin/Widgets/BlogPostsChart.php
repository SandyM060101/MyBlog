<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BlogPostsChart extends ChartWidget
{
    protected static ?string $heading = 'Blog Posts Created per Day';

    protected function getData(): array
    {
        // Ambil data jumlah post per hari dalam 30 hari terakhir
        $postsPerDay = Post::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->where('created_at', '>=', Carbon::now()->subDays(30)) // Hanya 30 hari terakhir
            ->groupBy('date')
            ->orderBy('date')
            ->pluck('count', 'date')
            ->toArray();

        // Generate label tanggal untuk 30 hari terakhir
        $dates = collect(range(0, 29))->map(function ($day) {
            return Carbon::now()->subDays(29 - $day)->format('Y-m-d');
        });

        // Format data agar sesuai dengan tanggal yang sudah dibuat
        $data = $dates->map(function ($date) use ($postsPerDay) {
            return $postsPerDay[$date] ?? 0; // Jika tidak ada post di tanggal itu, set 0
        });

        return [
            'datasets' => [
                [
                    'label' => 'Blog Posts Created',
                    'data' => $data->values(),
                    'backgroundColor' => 'rgba(75, 192, 192, 0.6)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1,
                ],
            ],
            'labels' => $dates->map(fn($date) => Carbon::parse($date)->format('d M'))->values(), // Format menjadi 01 Jan, 02 Jan, dst.
        ];
    }

    protected function getType(): string
    {
        return 'bar'; // Menggunakan grafik line agar lebih jelas
    }
}
