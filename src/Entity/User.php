<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\Table(name="`personne`") 
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
    */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
    */
    private $password;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getusername()
    {
        return $this->username;
    }
    public function setusername($username)
    {
        return $this->username = $username;
    }
    public function getpassword()
    {
        return $this->password;
    }
    public function setpassword($password)
    {
        return $this->password = $password;
    }
}
