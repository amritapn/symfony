<?php

namespace Mindfire\MagazineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Issue
 *
 * @ORM\Table(name="issues")
 * @ORM\Entity(repositoryClass="Mindfire\MagazineBundle\Repository\IssueRepository")
 */
class Issue
{
    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToOne(targetEntity="Publication", inversedBy="issues")
     * @ORM\JoinColumn(name="publication_id", referencedColumnName="id")
     */
    private $publication;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_publication", type="datetime")
     */
    private $datePublication;

    /**
     * @var string
     *
     * @ORM\Column(name="cover", type="string", length=255)
     */
    private $cover;


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
     * Set number
     *
     * @param integer $number
     * @return Issue
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set datePublication
     *
     * @param \DateTime $datePublication
     * @return Issue
     */
    public function setDatePublication($datePublication)
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    /**
     * Get datePublication
     *
     * @return \DateTime 
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * Set cover
     *
     * @param string $cover
     * @return Issue
     */
    public function setCover($cover)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get cover
     *
     * @return string 
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Set publication
     *
     * @param \Mindfire\MagazineBundle\Entity\Publication $publication
     * @return Issue
     */
    public function setPublication(\Mindfire\MagazineBundle\Entity\Publication $publication = null)
    {
        $this->publication = $publication;

        return $this;
    }

    /**
     * Get publication
     *
     * @return \Mindfire\MagazineBundle\Entity\Publication 
     */
    public function getPublication()
    {
        return $this->publication;
    }

    public function __toString() {
        return $this->getCover();
    }

    /**
     * Get web path to the upload directory
     * @return string
     *  relative path
     */
    protected function getUploadPath()
    {
        return 'upload/covers';
    }

    /**
     * Get absolute path to the upload directory
     *
     * @return string
     *  Absolute path
     */
    protected function getUploadAbsolutePath() {
        return  __DIR__  . '/../../../../web/' . $this->getUploadPath();
    }

    /**
     * get web path to a cover
     * @return null|string
     *  Relative path
     */
    public function getCoverWeb()
    {
        return NULL === $this.getCover()
            ? NULL
            : $this->getUploadPath() .'/'. $this->getCover();
    }

    /**
     * get web path on disk a cover
     * @return null|string
     *  Absolute path
     */
    public function getCoverAbsolute()
    {
        return NULL === $this.getCover()
            ? NULL
            : $this->getUploadAbsolutePath() .'/'. $this->getCover();
    }

    /**
     * @Assert\File(maxSize = "1000000")
     */
    private $file;

    /**
     *set file
     *
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $file
     */
    public function setFile(UploadedFile $file = NULL)
    {
       $this->file = $file;
    }

    /**
     * get file
     *
     * @return uploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Upload to cover file
     */
    public function upload()
    {
        // File property can be empty
        if(NULL == $this->getFile()) {
            return NULL;
        }
        $filename = $this->getFile()->getClientOriginalName();

        // Move upload file to target directory using original name
        $this->getFile()->move(
            $this->getUploadAbsolutePath(),
            $filename);

        //set the cover
        $this->setCover($filename);

        // Cleanup
        $this->setFile();
    }

}
