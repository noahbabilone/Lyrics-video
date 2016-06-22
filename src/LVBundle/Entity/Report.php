<?php

namespace LVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Report
 *
 * @ORM\Table(name="report")
 * @ORM\Entity(repositoryClass="LVBundle\Repository\ReportRepository")
 */
class Report
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
     * @ORM\ManyToOne(targetEntity="LVBundle\Entity\User")
     */
    private $user;
    /**
     * @ORM\ManyToOne(targetEntity="LVBundle\Entity\Video")
     */
    private $video;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


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
     * @return Report
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
     * Set user
     *
     * @param User $user
     * @return Report
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

    /**
     * Set video
     *
     * @param \LVBundle\Entity\Video $video
     * @return Report
     */
    public function setVideo(\LVBundle\Entity\Video $video = null)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return \LVBundle\Entity\Video
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Comment
     */
    public function setDate($date)
    {
        if (is_a($date, 'DateTime')) {
            $this->date = $date;
        } else {
            $this->date = new \DateTime((string)$date);
        }
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

}
