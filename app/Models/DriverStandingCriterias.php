<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * DriverStandingCriterias
 *
 * @ORM\Table(name="driver_standing_criterias")
 * @ORM\Entity
 */
class DriverStandingCriterias
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
     * @ORM\Column(name="criteria", type="string", length=55, nullable=false)
     */
    private $criteria;

    /**
     * @var bool
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="coefficient", type="integer", nullable=false)
     */
    private $coefficient;

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
