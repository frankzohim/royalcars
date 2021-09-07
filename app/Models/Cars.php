<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Cars
 *
 * @ORM\Table(name="cars", uniqueConstraints={@ORM\UniqueConstraint(name="cars_matriculation_unique", columns={"matriculation"}), @ORM\UniqueConstraint(name="cars_chassis_number_unique", columns={"chassis_number"})}, indexes={@ORM\Index(name="cars_user_id_foreign", columns={"user_id"}), @ORM\Index(name="car_type_id", columns={"car_type_id"}), @ORM\Index(name="cars_model_id_foreign", columns={"model_id"}), @ORM\Index(name="cars_car_standing_id_foreign", columns={"car_standing_id"})})
 * @ORM\Entity
 */
class Cars
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
     * @ORM\Column(name="fullname", type="string", length=500, nullable=false)
     */
    private $fullname;

    /**
     * @var string
     *
     * @ORM\Column(name="chassis_number", type="string", length=255, nullable=false)
     */
    private $chassisNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="matriculation", type="string", length=255, nullable=false)
     */
    private $matriculation;

    /**
     * @var int
     *
     * @ORM\Column(name="number_of_places", type="integer", nullable=false)
     */
    private $numberOfPlaces;

    /**
     * @var int
     *
     * @ORM\Column(name="number_of_doors", type="integer", nullable=false)
     */
    private $numberOfDoors;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mileage", type="integer", nullable=true)
     */
    private $mileage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="year", type="integer", nullable=true)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="energy", type="string", length=255, nullable=false)
     */
    private $energy;

    /**
     * @var bool
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type;

    /**
     * @var bool
     *
     * @ORM\Column(name="light_package", type="boolean", nullable=false)
     */
    private $lightPackage;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="air_conditioner", type="boolean", nullable=true)
     */
    private $airConditioner;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="airbag", type="boolean", nullable=true)
     */
    private $airbag;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="gps", type="boolean", nullable=true)
     */
    private $gps;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="traction_control", type="boolean", nullable=true)
     */
    private $tractionControl;

    /**
     * @var string
     *
     * @ORM\Column(name="gearbox", type="string", length=25, nullable=false)
     */
    private $gearbox;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255, nullable=false)
     */
    private $color;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category", type="string", length=255, nullable=true)
     */
    private $category;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="rental_cost", type="integer", nullable=false)
     */
    private $rentalCost;

    /**
     * @var string
     *
     * @ORM\Column(name="achievement", type="decimal", precision=25, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $achievement = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="image_ids", type="string", length=200, nullable=true)
     */
    private $imageIds;

    /**
     * @var int|null
     *
     * @ORM\Column(name="driver_id", type="bigint", nullable=true, options={"unsigned"=true})
     */
    private $driverId;

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
     * @var \CarStandings
     *
     * @ORM\ManyToOne(targetEntity="CarStandings")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="car_standing_id", referencedColumnName="id")
     * })
     */
    private $carStanding;

    /**
     * @var \CarTypes
     *
     * @ORM\ManyToOne(targetEntity="CarTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="car_type_id", referencedColumnName="id")
     * })
     */
    private $carType;

    /**
     * @var \CarModels
     *
     * @ORM\ManyToOne(targetEntity="CarModels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="model_id", referencedColumnName="id")
     * })
     */
    private $model;

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
