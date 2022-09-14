<?php

namespace Filament\AvatarProviders;

use Filament\Contracts\FilamentableContract;
use Filament\Facades\Filament;
use Illuminate\Support\Str;

class UiAvatarsProvider implements Contracts\AvatarProvider
{
    public function get(FilamentableContract $user): string
    {
        $name = Str::of(Filament::getUserName($user))
            ->trim()
            ->explode(' ')
            ->map(fn (string $segment): string => filled($segment) ? mb_substr($segment, 0, 1) : '')
            ->join(' ');

        return 'https://ui-avatars.com/api/?name=' . urlencode($name) . '&color=FFFFFF&background=111827';
    }
}
