<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders", indexes={@ORM\Index(name="orders_car_id_foreign", columns={"car_id"}), @ORM\Index(name="orders_seat_id_foreign", columns={"seat_id"}), @ORM\Index(name="orders_user_id_foreign", columns={"user_id"}), @ORM\Index(name="orders_driver_id_foreign", columns={"driver_id"})})
 * @ORM\Entity
 */
class Orders
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
     * @ORM\Column(name="amount", type="integer", nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false)
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="car_id", type="string", length=255, nullable=true)
     */
    private $carId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="driver_id", type="string", length=255, nullable=true)
     */
    private $driverId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seat_id", type="string", length=255, nullable=true)
     */
    private $seatId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="provider_approval", type="boolean", nullable=true)
     */
    private $providerApproval;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="customer_approval", type="boolean", nullable=true)
     */
    private $customerApproval;

    /**
     * @var string|null
     *
     * @ORM\Column(name="leaving", type="string", length=100, nullable=true)
     */
    private $leaving;

    /**
     * @var string|null
     *
     * @ORM\Column(name="arrival", type="string", length=100, nullable=true)
     */
    private $arrival;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date", type="string", length=100, nullable=true)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hour", type="string", length=50, nullable=true)
     */
    private $hour;

    /**
     * @var string|null
     *
     * @ORM\Column(name="information", type="string", length=2000, nullable=true)
     */
    private $information;

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
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}
