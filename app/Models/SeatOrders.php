<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SeatOrders
 *
 * @ORM\Table(name="seat_orders", indexes={@ORM\Index(name="seat_orders_user_id_foreign", columns={"user_id"}), @ORM\Index(name="seat_orders_seat_id_foreign", columns={"seat_id"})})
 * @ORM\Entity
 */
class SeatOrders
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
     * @ORM\Column(name="route", type="string", length=255, nullable=false)
     */
    private $route;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="amount", type="integer", nullable=false)
     */
    private $amount;

    /**
     * @var int
     *
     * @ORM\Column(name="seat_id", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $seatId;

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
