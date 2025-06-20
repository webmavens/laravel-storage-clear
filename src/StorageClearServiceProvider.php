<?php

declare(strict_types=1);

namespace WebMavens\StorageClear;

use Illuminate\Support\ServiceProvider;

class StorageClearServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            StorageClearCommand::class,
        ]);
    }
}
