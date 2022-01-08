<?php

namespace App\DTO;

use App\Entities\Type\ImageStatusType;

/**
 * Class CreateImageDTO
 *
 * @package App\DTO
 */
final class CreateImageDTO
{
    public string $checksum = '';
    public string $fileName = '';
    public string $filePath = '';
    public int $fileSize = 0;
    public string $urlPath = '';
    public int $width = 0;
    public int $height = 0;
    public string $mimeType = '';
    public string $status = ImageStatusType::STATUS_NEW;
    public \DateTimeInterface $createdAt;
    public ?\DateTimeInterface $updatedAt = null;
}
