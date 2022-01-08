<?php

namespace App\Console\Commands;

use App\Services\UnzipFileInterface;
use Illuminate\Console\Command;

/**
 * Class UnzipSeedImagesCommand
 *
 * @package App\Console\Commands
 */
class UnzipSeedImagesCommand extends Command
{
    private const DEFAULT_ARCHIVE_PATH = 'task-images.zip';

    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'app:images:unzip
                {--archPath= : The database connection to use}
                {--extractTo= : The path where the schema dump file should be stored}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Unzip providen archive with photos for seeding.';

    /**
     * @var UnzipFileInterface
     */
    private $fileService;

    /**
     * UnzipSeedImagesCommand constructor.
     *
     * @param UnzipFileInterface $fileService
     */
    public function __constructor(UnzipFileInterface $fileService)
    {
        $this->fileService = $fileService;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $pathToFile = $this->input->getOption('archPath') ?? self::DEFAULT_ARCHIVE_PATH;
        $extractTo = $this->input->getOption('extractTo');

        $this->fileService->unzip($pathToFile, $extractTo);

        return 0;
    }

}
