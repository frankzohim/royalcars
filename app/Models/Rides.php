<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Rides
 *
 * @ORM\Table(name="rides", indexes={@ORM\Index(name="path_id", columns={"path_id"}), @ORM\Index(name="car_id", columns={"car_id"}), @ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class Rides
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
     * @var int
     *
     * @ORM\Column(name="number_of_seats", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $numberOfSeats;

    /**
     * @var int
     *
     * @ORM\Column(name="remaining_seats", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $remainingSeats;

    /**
     * @var int
     *
     * @ORM\Column(name="estimated_duration", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $estimatedDuration;

    /**
     * @var string
     *
     * @ORM\Column(name="hour", type="string", length=50, nullable=false)
     */
    private $hour;

    /**
     * @var int
     *
     * @ORM\Column(name="cost", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $cost;

    /**
     * @var bool
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="pickup_point", type="string", length=255, nullable=false)
     */
    private $pickupPoint;

    /**
     * @var bool
     *
     * @ORM\Column(name="light_package", type="boolean", nullable=false)
     */
    private $lightPackage;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stopover", type="string", length=255, nullable=true)
     */
    private $stopover;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=50, nullable=false)
     */
    private $date;

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

    /**
     * @var \Cars
     *
     * @ORM\ManyToOne(targetEntity="Cars")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="car_id", referencedColumnName="id")
     * })
     */
    private $car;

    /**
     * @var \Paths
     *
     * @ORM\ManyToOne(targetEntity="Paths")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="path_id", referencedColumnName="id")
     * })
     */
    private $path;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}
