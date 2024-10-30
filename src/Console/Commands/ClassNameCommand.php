<?php

namespace VendorName\ClassName\Console\Commands;

use Illuminate\Console\Command;

class ClassNameCommand extends Command
{
    protected $signature = 'package_slug_without_prefix';

    protected $description = ':package_description';

    public function handle(): int
    {
        $this->comment(':package_description');

        return self::SUCCESS;
    }
}
