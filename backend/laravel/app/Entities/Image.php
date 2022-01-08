<?php

namespace App\Entities;

use Doctrine\ORM\Mapping AS ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\PersistentCollection;
use Ramsey\Collection\CollectionInterface;
use Ramsey\Uuid\UuidInterface;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Doctrine\UuidGenerator;

/**
 * Class Image
 *
 * @package App\Entities
 *
 * @ORM\Entity
 * @ORM\Table(name="images")
 */
class Image
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    protected $id;

    /**
     * @var UuidInterface
     *
     * @ORM\Column(type="uuid", unique=true)
     */
    protected UuidInterface $uuid;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    protected $status;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTimeInterface
     */
    protected $updatedAt;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    protected $checksum;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    protected $fileName;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    protected $urlPath;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    protected $filePath;

    /**
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    protected $fileSize;

    /**
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    protected $width;

    /**
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    protected $height;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    protected $mimeType;

    /**
     * @ORM\OneToMany(targetEntity="ImageThumbnail", mappedBy="image", cascade={"persist", "remove"})
     *
     * @var ArrayCollection|ImageThumbnail[]
     */
    protected $thumbnails;

    /**
     * Image constructor.
     */
    public function __construct()
    {
        $this->thumbnails =  new ArrayCollection();
        $this->createdAt = new \DateTime();
        $this->uuid = \Ramsey\Uuid\Uuid::uuid4();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return UuidInterface
     */
    public function getUuid(): UuidInterface
    {
        return $this->uuid;
    }


    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getUpdatedAt(): \DateTimeInterface
    {
        return $this->updatedAt;
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
    public function getUrlPath(): string
    {
        return $this->urlPath;
    }

    /**
     * @return string
     */
    public function getFilePath(): string
    {
        return $this->filePath;
    }

    /**
     * @return int
     */
    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
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
     * @param UuidInterface $uuid
     *
     * @return $this
     */
    public function setUuid(UuidInterface $uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param \DateTime $createdAt
     *
     * @return $this
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param \DateTimeInterface $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @param string $checksum
     *
     * @return $this
     */
    public function setChecksum(string $checksum): self
    {
        $this->checksum = $checksum;

        return $this;
    }

    /**
     * @param string $fileName
     *
     * @return $this
     */
    public function setFileName(string $fileName): self
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * @param string $urlPath
     *
     * @return $this
     */
    public function setUrlPath(string $urlPath): self
    {
        $this->urlPath = $urlPath;

        return $this;
    }

    /**
     * @param string $filePath
     *
     * @return $this
     */
    public function setFilePath(string $filePath): self
    {
        $this->filePath = $filePath;

        return $this;
    }

    /**
     * @param int $fileSize
     *
     * @return $this
     */
    public function setFileSize(int $fileSize): self
    {
        $this->fileSize = $fileSize;

        return $this;
    }

    /**
     * @param int $width
     *
     * @return $this
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @param int $height
     *
     * @return $this
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @param string $mimeType
     *
     * @return $this
     */
    public function setMimeType(string $mimeType): self
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * @param ImageThumbnail $thumbnails
     *
     * @return $this
     */
    public function addThumbnails(ImageThumbnail $thumbnails): self
    {
        if (false === $this->thumbnails->indexOf($thumbnails)) {
            $this->thumbnails->add($thumbnails);
        }

        return $this;
    }

    /**
     * @return ImageThumbnail[]|ArrayCollection
     */
    public function getThumbnails(): \ArrayAccess
    {
        return $this->thumbnails;
    }
}
