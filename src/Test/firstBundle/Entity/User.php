<?php

namespace Test\firstBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/*
 *@ORM\Entity
 * @ORM\Table( name = 'user')
 *@ORM\HasLifeCycleCallbacks()
 */
class User {
    /**
     * @ORM\Id
     * @ORM\Column(name = 'id', type = 'integer')
     * @ORM\GeneratedValue(Strategy = "AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type = "string", length = 30)
     */
    private $name;

    /**
     * @ORM\Column(type = "varchar" , length = 10)
     */
    private $password;

    /**
     * @ORM\Column(type = 'datetime')
     */
    private $created_date_time;

    /**
     * @ORM\PrePersist
     */
    public function beforePersist() {
        $this->created_date_time = new \DateTime();
    }
}