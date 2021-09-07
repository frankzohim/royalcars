<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * UserReviews
 *
 * @ORM\Table(name="user_reviews", indexes={@ORM\Index(name="user_reviews_user_id_foreign", columns={"user_id"}), @ORM\Index(name="user_reviews_user_being_review_id_foreign", columns={"user_being_review_id"})})
 * @ORM\Entity
 */
class UserReviews
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
     * @ORM\Column(name="star", type="integer", nullable=false)
     */
    private $star;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=false)
     */
    private $comment;

    /**
     * @var int
     *
     * @ORM\Column(name="user_being_review_id", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $userBeingReviewId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $userId;

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
