<?php
class OrderDetailObject
{
    private $order_id;
    private $product_id;
    private $quantity;

    public function __construct($row)
    {
        $this->order_id = $row['bill_id'] ?? '';
        $this->product_id = $row['product_id'] ?? '';
        $this->quantity = $row['quantity'];
    }


    /**
     * Get the value of order_id
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * Set the value of order_id
     */
    public function setOrderId($order_id): self
    {
        $this->order_id = $order_id;

        return $this;
    }

    /**
     * Get the value of product_id
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * Set the value of product_id
     */
    public function setProductId($product_id): self
    {
        $this->product_id = $product_id;

        return $this;
    }

    /**
     * Get the value of quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     */
    public function setQuantity($quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
}