<?php
class ProductObject
{
    private $id;
    private string $name;
    private string $description;
    private float $price;
    private string $image;
    private int $manufacturer_id;
    private string $name_manufacturer;



    public function __construct($row)
    {
        $this->id = $row['id'] ?? '';
        $this->name = $row['name'];
        $this->description = $row['description'];
        $this->price = $row['price'];
        $this->image = $row['image'];
        $this->manufacturer_id = $row['manufacturer_id'];
        $this->name_manufacturer = $row['name_manufacturer'] ?? '';


    }
    /**image
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
     * Get the value of description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of price
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @param float $price
     *
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of image
     *
     * @return int
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @param int $image
     *
     * @return self
     */
    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of manufacturer_id
     *
     * @return int
     */
    public function getManufacturerId(): int
    {
        return $this->manufacturer_id;
    }

    /**
     * Get the value of name_manufacturer
     *
     * @return string
     */
    public function getNameManufacturer(): string
    {
        return $this->name_manufacturer;
    }

}