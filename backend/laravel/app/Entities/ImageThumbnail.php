<?php


namespace App\Entities;

use Doctrine\ORM\Mapping AS ORM;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="image_thumbnails")
 */
class ImageThumbnail
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
     * @ORM\CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidGenerator")
     */
    protected UuidInterface $uuid;

    /**
     * @ORM\ManyToOne(targetEntity="Image", inversedBy="thumbnails")
     * @ORM\JoinColumn(name="image_id", referencedColumnName="id")
     *
     * @var Image
     */
    protected Image $image;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    protected $name;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    protected $size;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @ORM\Column(type="text")
     *
     * @var string
     */
    protected $base64;

    /**
     * ImageThumbnail constructor.
     */
    public function __construct()
    {
        $this->uuid = \Ramsey\Uuid\Uuid::uuid4();
        $this->createdAt = new \DateTime();
    }

    /**
     * @return string
     */
    public function getBase64(): string
    {
        return $this->base64;
    }

    /**
     * @return Image
     */
    public function getImage(): Image
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }


    /**
     * Note constructor.
     */
    public function __constructor()
    {
        $this->uuid = \Ramsey\Uuid\Uuid::uuid4();
        $this->createdAt = new \DateTime();
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $size
     *
     * @return $this
     */
    public function setSize(string $size): self
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @param string $base64
     *
     * @return $this
     */
    public function setBase64(string $base64): self
    {
        $this->base64 = $base64;

        return $this;
    }

    /**
     * @param Image $image
     *
     * @return self
     */
    public function setImage(Image $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return UuidInterface
     */
    public function getUuid(): UuidInterface
    {
        return $this->uuid;
    }
}
