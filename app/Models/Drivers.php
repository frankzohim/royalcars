<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Drivers
 *
 * @ORM\Table(name="drivers", indexes={@ORM\Index(name="drivers_driver_standing_id_foreign", columns={"driver_standing_id"})})
 * @ORM\Entity
 */
class Drivers
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
     * @ORM\Column(name="lastname", type="string", length=255, nullable=false)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=false)
     */
    private $firstname;

    /**
     * @var int
     *
     * @ORM\Column(name="license_number", type="integer", nullable=false)
     */
    private $licenseNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="profil_picture", type="string", length=255, nullable=true)
     */
    private $profilPicture;

    /**
     * @var bool
     *
     * @ORM\Column(name="avaibility", type="boolean", nullable=false)
     */
    private $avaibility;

    /**
     * @var int
     *
     * @ORM\Column(name="cost", type="bigint", nullable=false)
     */
    private $cost;

    /**
     * @var int
     *
     * @ORM\Column(name="years_of_experience", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $yearsOfExperience;

    /**
     * @var string|null
     *
     * @ORM\Column(name="days", type="string", length=255, nullable=true)
     */
    private $days;

    /**
     * @var string|null
     *
     * @ORM\Column(name="working_hours", type="string", length=255, nullable=true)
     */
    private $workingHours;

    /**
     * @var string
     *
     * @ORM\Column(name="perimeter", type="string", length=255, nullable=false)
     */
    private $perimeter;

    /**
     * @var int
     *
     * @ORM\Column(name="town", type="bigint", nullable=false)
     */
    private $town;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=200, nullable=true)
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_reference", type="string", length=200, nullable=true)
     */
    private $phoneReference;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="bigint", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="reliability_color", type="string", length=30, nullable=false)
     */
    private $reliabilityColor;

    /**
     * @var string
     *
     * @ORM\Column(name="reliability_percent", type="string", length=10, nullable=false)
     */
    private $reliabilityPercent;

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
     * @var \DriverStandings
     *
     * @ORM\ManyToOne(targetEntity="DriverStandings")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="driver_standing_id", referencedColumnName="id")
     * })
     */
    private $driverStanding;


}
