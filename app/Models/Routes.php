<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Routes
 *
 * @ORM\Table(name="routes", indexes={@ORM\Index(name="routes_ride_id_foreign", columns={"ride_id"})})
 * @ORM\Entity
 */
class Routes
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
     * @var string
     *
     * @ORM\Column(name="condition", type="string", length=255, nullable=false)
     */
    private $condition;

    /**
     * @var string
     *
     * @ORM\Column(name="mileage", type="string", length=255, nullable=false)
     */
    private $mileage;

    /**
     * @var int
     *
     * @ORM\Column(name="ride_id", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $rideId;

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
