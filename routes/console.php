<?php

use App\Console\Commands\GenerateSitemap;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Schedule::command(GenerateSitemap::class)->everySixHours();
