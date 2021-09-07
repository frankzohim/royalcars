<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Quarters
 *
 * @ORM\Table(name="quarters", indexes={@ORM\Index(name="quarters_town_id_foreign", columns={"town_id"})})
 * @ORM\Entity
 */
class Quarters
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
     * @var \Towns
     *
     * @ORM\ManyToOne(targetEntity="Towns")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="town_id", referencedColumnName="id")
     * })
     */
    private $town;


}
