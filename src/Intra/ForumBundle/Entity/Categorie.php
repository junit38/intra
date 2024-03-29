<?php

namespace Intra\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Intra\ForumBundle\Entity\CategorieRepository")
 */
class Categorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text")
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Intra\ForumBundle\Entity\Categorie", mappedBy="sur_categorie", cascade={"persist", "remove"})
     */
    protected $sous_categories;

    /**
     * @ORM\ManyToOne(targetEntity="Intra\ForumBundle\Entity\Categorie", inversedBy="sous_categories")
     */
    protected $sur_categorie;

    /**
     * @ORM\OneToMany(targetEntity="Intra\ForumBundle\Entity\Thread", mappedBy="categorie", cascade={"persist", "remove"})
     */
    protected $threads;

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
     * Set name
     *
     * @param string $name
     * @return Categorie
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->threads = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add threads
     *
     * @param \Intra\ForumBundle\Entity\Thread $threads
     * @return Categorie
     */
    public function addThread(\Intra\ForumBundle\Entity\Thread $threads)
    {
        $this->threads[] = $threads;

        return $this;
    }

    /**
     * Remove threads
     *
     * @param \Intra\ForumBundle\Entity\Thread $threads
     */
    public function removeThread(\Intra\ForumBundle\Entity\Thread $threads)
    {
        $this->threads->removeElement($threads);
    }

    /**
     * Get threads
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getThreads()
    {
        return $this->threads;
    }

    /**
     * Set sur_categorie
     *
     * @param \Intra\ForumBundle\Entity\Categorie $surCategorie
     * @return Categorie
     */
    public function setSurCategorie(\Intra\ForumBundle\Entity\Categorie $surCategorie = null)
    {
        $this->sur_categorie = $surCategorie;

        return $this;
    }

    /**
     * Get sur_categorie
     *
     * @return \Intra\ForumBundle\Entity\Categorie 
     */
    public function getSurCategorie()
    {
        return $this->sur_categorie;
    }

    /**
     * Add sous_categories
     *
     * @param \Intra\ForumBundle\Entity\Categorie $sousCategories
     * @return Categorie
     */
    public function addSousCategory(\Intra\ForumBundle\Entity\Categorie $sousCategories)
    {
        $this->sous_categories[] = $sousCategories;

        return $this;
    }

    /**
     * Remove sous_categories
     *
     * @param \Intra\ForumBundle\Entity\Categorie $sousCategories
     */
    public function removeSousCategory(\Intra\ForumBundle\Entity\Categorie $sousCategories)
    {
        $this->sous_categories->removeElement($sousCategories);
    }

    /**
     * Get sous_categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSousCategories()
    {
        return $this->sous_categories;
    }
}
