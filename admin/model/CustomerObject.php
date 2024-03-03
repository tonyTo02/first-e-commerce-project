<?php
class CustomerObject
{
    private $id;
    private string $name;
    private $gender;
    private $dob;
    private string $email;
    private string $password;
    private string $address;
    private string $phoneNumber;
    private string $token;


    public function __construct($row)
    {
        $this->id = $row['id'] ?? '';
        $this->name = $row['name'];
        $this->gender = $row['gender'];
        $this->dob = $row['dob'];
        $this->email = $row['email'];
        $this->password = $row['password'];
        $this->address = $row['address'] ?? '';
        $this->phoneNumber = $row['phoneNumber'] ?? '';
        $this->token = $row['token'] ?? '';

    }
    /**address
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of address
     *
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @param string $address
     *
     * @return self
     */
    public function setaddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }
    /**
     * Get the value of address
     *
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * Set the value of address
     *
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get the value of token
     *
     * @return string
     */
    public function gettoken(): string
    {
        return $this->token;
    }

    /**
     * Set the value of token
     *
     * @param string $token
     *
     * @return self
     */
    public function settoken(string $token): self
    {
        $this->token = $token;

        return $this;
    }


    /**
     * Get the value of dob
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set the value of dob
     */
    public function setDob($dob): self
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get the value of gender
     *
     * @return int
     */
    public function getGender()
    {
        if ($this->gender == 1) {
            return "Nam";
        } else {
            return "Nữ";
        }
    }

    /**
     * Set the value of gender
     *
     * @param int $gender
     *
     * @return self
     */
    public function setGender($gender): self
    {
        $this->gender = $gender;

        return $this;
    }
}