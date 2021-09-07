<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * DriverOrders
 *
 * @ORM\Table(name="driver_orders", indexes={@ORM\Index(name="driver_orders_user_id_foreign", columns={"user_id"}), @ORM\Index(name="driver_orders_driver_id_foreign", columns={"driver_id"})})
 * @ORM\Entity
 */
class DriverOrders
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
     * @var bool
     *
     * @ORM\Column(name="out_of_town", type="boolean", nullable=false)
     */
    private $outOfTown;

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
     * @ORM\Column(name="route", type="string", length=255, nullable=false)
     */
    private $route;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="starting_date", type="date", nullable=false)
     */
    private $startingDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ending_date", type="date", nullable=false)
     */
    private $endingDate;

    /**
     * @var int
     *
     * @ORM\Column(name="amount", type="integer", nullable=false)
     */
    private $amount;

    /**
     * @var bool
     *
     * @ORM\Column(name="avaibility", type="boolean", nullable=false)
     */
    private $avaibility;

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
     * @var \Drivers
     *
     * @ORM\ManyToOne(targetEntity="Drivers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="driver_id", referencedColumnName="id")
     * })
     */
    private $driver;

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
