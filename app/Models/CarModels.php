<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * CarModels
 *
 * @ORM\Table(name="car_models", uniqueConstraints={@ORM\UniqueConstraint(name="car_models_name_unique", columns={"name"})}, indexes={@ORM\Index(name="car_models_make_id_foreign", columns={"make_id"})})
 * @ORM\Entity
 */
class CarModels
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
     * @var \Makes
     *
     * @ORM\ManyToOne(targetEntity="Makes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="make_id", referencedColumnName="id")
     * })
     */
    private $make;


}
