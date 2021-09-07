<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * CarImages
 *
 * @ORM\Table(name="car_images")
 * @ORM\Entity
 */
class CarImages
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=1000, nullable=false)
     */
    private $path;

    /**
     * @var int
     *
     * @ORM\Column(name="car_id", type="bigint", nullable=false)
     */
    private $carId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;


}
