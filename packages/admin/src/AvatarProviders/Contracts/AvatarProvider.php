<?php

namespace Filament\AvatarProviders\Contracts;

use Filament\Contracts\FilamentableContract;

interface AvatarProvider
{
    public function get(FilamentableContract $user): string;
}
