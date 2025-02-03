<?php

namespace App\Filament\Admin\Pages;

use Filament\Pages\Page;



class About extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $navigationGroup = 'Setting';
    protected static ?string $navigationLabel = 'About';
    protected static ?int $navigationSort = 100; // Atur urutan menu jika perlu

    protected static string $view = 'filament.admin.pages.about';

    public function mount()
    {
        // Anda bisa menambahkan logika tambahan di sini jika diperlukan
    }

}
