<?php


namespace App\Auth\Model;


use Symfony\Component\Validator\Constraints as Assert;

class UserModel
{
    /**
     * @var string
     * @Assert\Length(min="5")
     */
    private $username;
    private $firstName;
    private $email;
    /**
     * @var string
     * @Assert\Length(min="8")
     */
    private $password;

    /**
     * @return string|null
     */
    public function getUsername() : ?string
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        //TODO: Check if user exists
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }


}