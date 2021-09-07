<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Subcribers
 *
 * @ORM\Table(name="subcribers", indexes={@ORM\Index(name="payment_id", columns={"payment_id"}), @ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class Subcribers
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
     * @ORM\Column(name="user_id", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="payment_id", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $paymentId;

    /**
     * @var int
     *
     * @ORM\Column(name="remaining_days", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $remainingDays;

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
