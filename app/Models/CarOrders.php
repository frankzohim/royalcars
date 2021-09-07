<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * CarOrders
 *
 * @ORM\Table(name="car_orders", indexes={@ORM\Index(name="car_orders_user_id_foreign", columns={"user_id"}), @ORM\Index(name="car_orders_car_id_foreign", columns={"car_id"})})
 * @ORM\Entity
 */
class CarOrders
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
     * @ORM\Column(name="taking_date", type="date", nullable=false)
     */
    private $takingDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="giving_back_date", type="date", nullable=false)
     */
    private $givingBackDate;

    /**
     * @var int
     *
     * @ORM\Column(name="amount", type="integer", nullable=false)
     */
    private $amount;

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
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}
