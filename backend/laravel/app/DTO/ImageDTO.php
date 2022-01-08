<?php

namespace App\DTO;

/**
 * Class ImageDTO
 *
 * @package App\DTO
 */
final class ImageDTO
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $checksum;

    /**
     * @var string
     */
    private $fileName;

    /**
     * @var string
     */
    private $filePath;

    /**
     * @var string
     */
    private $fileSize;

    /**
     * @var string
     */
    private $width;

    /**
     * @var string
     */
    private $height;

    /**
     * @var string
     */
    private $mimeType;

    /**
     * @var string
     */
    private $encoded;

    /**
     * @param int $id
     * @param string $checksum
     * @param string $fileName
     * @param string $filePath
     * @param string $fileSize
     * @param string $width
     * @param string $height
     * @param string $mimeType
     * @param string $encoded
     */
    public function __constructor(
        int $id,
        string $checksum,
        string $fileName,
        string $filePath,
        string $fileSize,
        string $width,
        string $height,
        string $mimeType,
        string $encoded
    )
    {

    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getChecksum(): string
    {
        return $this->checksum;
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * @return string
     */
    public function getFilePath(): string
    {
        return $this->filePath;
    }

    /**
     * @return string
     */
    public function getFileSize(): string
    {
        return $this->fileSize;
    }

    /**
     * @return string
     */
    public function getWidth(): string
    {
        return $this->width;
    }

    /**
     * @return string
     */
    public function getHeight(): string
    {
        return $this->height;
    }

    /**
     * @return string
     */
    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    /**
     * @return string
     */
    public function getEncoded(): string
    {
        return $this->encoded;
    }
}
