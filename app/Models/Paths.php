<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Paths
 *
 * @ORM\Table(name="paths")
 * @ORM\Entity
 */
class Paths
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
     * @ORM\Column(name="leaving", type="string", length=255, nullable=false)
     */
    private $leaving;

    /**
     * @var string
     *
     * @ORM\Column(name="arrival", type="string", length=255, nullable=false)
     */
    private $arrival;

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
