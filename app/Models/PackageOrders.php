<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * PackageOrders
 *
 * @ORM\Table(name="package_orders")
 * @ORM\Entity
 */
class PackageOrders
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
     * @ORM\Column(name="packages", type="string", length=255, nullable=false)
     */
    private $packages;

    /**
     * @var string
     *
     * @ORM\Column(name="departure", type="string", length=30, nullable=false)
     */
    private $departure;

    /**
     * @var string
     *
     * @ORM\Column(name="arrival", type="string", length=30, nullable=false)
     */
    private $arrival;

    /**
     * @var int
     *
     * @ORM\Column(name="carrier_id", type="bigint", nullable=false)
     */
    private $carrierId;

    /**
     * @var bool
     *
     * @ORM\Column(name="carrier_type", type="boolean", nullable=false)
     */
    private $carrierType;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var bool
     *
     * @ORM\Column(name="state", type="boolean", nullable=false)
     */
    private $state = '0';

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
