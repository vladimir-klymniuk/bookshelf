<?php

namespace App\Console\Commands;

use App\Services\ImageUploader;
use App\Services\ImageUploaderInterface;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

/**
 * Class SeederImagesCommand.php
 *
 * @package App\Console\Commands
 */
class SeederImagesCommand extends Command
{
    private const DEFAULT_IMAGE_PATH = 'public/taks-images';

    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'app:images:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "This command process unzipped images. Resize, crop and creates thumbnails from fetched images, than storing processed results in database.";

    /**
     * @var ImageUploaderInterface
     */
    private $uploader;

    /**
     * SeederImage constructor.
     *
     * @param ImageUploader $uploader
     */
    public function __construct(ImageUploader $uploader)
    {
        parent::__construct();
        $this->uploader = $uploader;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $all = Storage::disk('local')->allFiles(self::DEFAULT_IMAGE_PATH);
        foreach ($all as $path) {
            $this->uploader->uploadByPath($path);
        }

        return 0;
    }
}
