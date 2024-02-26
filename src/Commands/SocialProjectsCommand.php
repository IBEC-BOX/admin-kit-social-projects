<?php

namespace AdminKit\SocialProjects\Commands;

use Illuminate\Console\Command;

class SocialProjectsCommand extends Command
{
    public $signature = 'admin-kit-social-projects';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
