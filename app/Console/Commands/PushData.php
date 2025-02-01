<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class PushData extends Command
{
    protected $signature = 'push:data';
    protected $description = 'Call the Push API if type is 1';

    public function handle()
    {
        $type = 1;

        if ($type === 1) {
            $response = Http::get('http://127.0.0.1:3000/Push');

            if ($response->successful()) {
                $this->info('Push API called successfully.');
            } else {
                $this->error('Failed to call Push API.');
            }
        }
    }
}
