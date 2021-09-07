<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Towns
 *
 * @ORM\Table(name="towns", uniqueConstraints={@ORM\UniqueConstraint(name="towns_name_unique", columns={"name"})}, indexes={@ORM\Index(name="country_id", columns={"country_id"})})
 * @ORM\Entity
 */
class Towns
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=25, nullable=false)
     */
    private $code;

    /**
     * @var int
     *
     * @ORM\Column(name="country_id", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $countryId;

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
