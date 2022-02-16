<?php

namespace Filament\Commands\Aliases;

use Filament\Commands;

class MakeWidgetCommand extends Commands\MakeWidgetCommand
{
    protected $hidden = true;

    protected $signature = 'filament:widget {name?} {--R|resource=} {--F|force} {--C|chart-widget} {--S|stats-widget}';
}
