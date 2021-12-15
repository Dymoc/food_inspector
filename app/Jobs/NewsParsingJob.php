<?php

namespace App\Jobs;

use App\Contracts\ParcerContract;
use App\Services\ParcerService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class NewsParsingJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $link;
    public $author;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $link, string $author)
    {
        $this->link=$link;
        $this->author=$author;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(ParcerService $parcer)
    {
        $data=$parcer->saveData($this->link, $this->author);
    }
}