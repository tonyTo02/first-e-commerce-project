<?php

class OrderObject
{
    private $id;
    private $customer_id;
    private $phoneNumber;
    private $order_time;
    private $note;
    private $status;
    private $total;
    private $payment_method;

    public function __construct($row)
    {
        $this->id = $row['id'] ?? '';
        $this->customer_id = $row['customer_id'];
        $this->phoneNumber = $row['phoneNumber'];
        $this->order_time = $row['order_time'] ?? '';
        $this->note = $row['note'];
        $this->status = $row['status'];
        $this->total = $row['total'];
        $this->payment_method = $row['payment_method'] ?? 1;
    }


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of customer_id
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Set the value of customer_id
     */
    public function setCustomerId($customer_id): self
    {
        $this->customer_id = $customer_id;

        return $this;
    }

    /**
     * Get the value of order_time
     */
    public function getOrderTime()
    {
        return $this->order_time;
    }

    /**
     * Set the value of order_time
     */
    public function setOrderTime($order_time): self
    {
        $this->order_time = $order_time;

        return $this;
    }

    /**
     * Get the value of note
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set the value of note
     */
    public function setNote($note): self
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        if ($this->status == 0) {
            return "Đơn hàng mới";
        } else if ($this->status == 1) {
            return "Đang giao hàng";
        } else {
            return "Đã giao hàng";
        }
    }

    /**
     * Set the value of status
     */
    public function setStatus($status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of total
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set the value of total
     */
    public function setTotal($total): self
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get the value of payment_method
     */
    public function getPaymentMethod()
    {
        if ($this->payment_method == 1) {
            return "Thanh toán khi giao hàng";
        } else {
            return "Thanh toán Online";
        }
        // return $this->payment_method;
    }

    /**
     * Set the value of payment_method
     */
    public function setPaymentMethod($payment_method): self
    {
        $this->payment_method = $payment_method;

        return $this;
    }

    /**
     * Get the value of phoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set the value of phoneNumber
     */
    public function setPhoneNumber($phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }
}