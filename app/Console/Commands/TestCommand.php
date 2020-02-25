<?php

namespace App\Console\Commands;

use App\SampleInterface;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    protected $signature = 'command:test';

    protected $description = 'Command description';

    public function __construct(SampleInterface $sample)
    {
        //working fine
        parent::__construct();
    }

    public function handle(SampleInterface $sample)
    {
        //working fine
    }
}
