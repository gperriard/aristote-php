<?php

namespace Aristote\Bundle\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aristote\Bundle\CoreBundle\Entity\Transaction
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Aristote\Bundle\CoreBundle\Entity\TransactionRepository")
 */
class Transaction
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="text")
     */
    protected $description;

    /**
     * @var float $amount
     *
     * @ORM\Column(name="amount", type="decimal")
     */
    protected $amount;

    /**
     * @var \DateTime $registred_at
     *
     * @ORM\Column(name="registred_at", type="datetime")
     */
    protected $registred_at;

    /**
     * @ORM\ManyToOne(targetEntity="Type", inversedBy="transactions")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id", nullable=false)
     */
    protected $type;

    /**
     * @ORM\ManyToMany(targetEntity="Tag", inversedBy="transactions")
     * @ORM\JoinTable(name="transactions_tags")
     */
    protected $tags;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Transaction
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set amount
     *
     * @param float $amount
     * @return Transaction
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    
        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set registred_at
     *
     * @param \DateTime $registredAt
     * @return Transaction
     */
    public function setRegistredAt(\Datetime $registredAt)
    {
        $this->registred_at = $registredAt;
    
        return $this;
    }

    /**
     * Get registred_at
     *
     * @return \DateTime 
     */
    public function getRegistredAt()
    {
        return $this->registred_at;
    }
    
    /**
     * Set type
     *
     * @param Aristote\Bundle\CoreBundle\Entity\Type $type
     * @return Transaction
     */
    public function setType(\Aristote\Bundle\CoreBundle\Entity\Type $type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return Aristote\Bundle\CoreBundle\Entity\Type 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add tags
     *
     * @param Aristote\Bundle\CoreBundle\Entity\Tag $tags
     * @return Transaction
     */
    public function addTag(\Aristote\Bundle\CoreBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;
    
        return $this;
    }

    /**
     * Remove tags
     *
     * @param Aristote\Bundle\CoreBundle\Entity\Tag $tags
     */
    public function removeTag(\Aristote\Bundle\CoreBundle\Entity\Tag $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }
}
