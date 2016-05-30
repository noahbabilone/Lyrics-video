<?php

namespace LVBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use LVBundle\Entity\SubTitle;
use LVBundle\Entity\User;

/**
 * Video
 *
 * @ORM\Table(name="video")
 * @ORM\Entity(repositoryClass="LVBundle\Repository\VideoRepository")
 */
class Video
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="idVideo", type="string", length=255)
     */
    private $idVideo;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="lyrics", type="text")
     */
    private $lyrics;


    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="LVBundle\Entity\User")
     */
    private $user;

    private $subTitle;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subTitle = new ArrayCollection();
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
     * Set title
     *
     * @param string $title
     * @return Video
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set idVideo
     *
     * @param string $idVideo
     * @return Video
     */
    public function setIdVideo($idVideo)
    {
        $this->idVideo = $idVideo;

        return $this;
    }

    /**
     * Get idVideo
     *
     * @return string 
     */
    public function getIdVideo()
    {
        return $this->idVideo;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Video
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set lyrics
     *
     * @param string $lyrics
     * @return Video
     */
    public function setLyrics($lyrics)
    {
        $this->lyrics = $lyrics;

        return $this;
    }

    /**
     * Get lyrics
     *
     * @return string 
     */
    public function getLyrics()
    {
        return $this->lyrics;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Video
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
     * Add subTitle
     *
     * @param SubTitle $subTitle
     * @return Video
     */
    public function addSubTitle(SubTitle $subTitle)
    {
        $this->subTitle[] = $subTitle;

        return $this;
    }

    /**
     * Remove subTitle
     *
     * @param SubTitle $subTitle
     */
    public function removeSubTitle(SubTitle $subTitle)
    {
        $this->subTitle->removeElement($subTitle);
    }

    /**
     * Get subTitle
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * Set user
     *
     * @param User $user
     * @return Video
     */
    public function setUser(User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
