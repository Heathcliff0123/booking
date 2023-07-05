<?php
class Hotel{
    public $name;
    public $price;
    public $rating;
    public $beds;
    public $bar;
    public $pool;
    public $sea;
    public $activity;
    public $address;

    function __construct($name, $price, $rating, $beds, $bar, $pool, $sea, $activity, $address)
    {
        $this->name = $name;
        $this->price = $price;
        $this->rating = $rating;
        $this->beds = $beds;
        $this->bar = $bar;
        $this->pool = $pool;
        $this->sea = $sea;
        $this->activity = $activity;
        $this->address = $address;
    }

    function getName(){
        return $this->name;
    }

    function getPrice(){
        return $this->price;
    }

    function getRating(){
        return $this->rating;
    }

    function getBeds(){
        return $this->beds;
    }

    function getBar(){
        return $this->bar;
    }

    function getPool(){
        return $this->pool;
    }

    function getSea(){
        return $this->sea;
    }

    function getActivity(){
        return $this->activity;
    }

    function getAddress(){
        return $this->address;
    }

    function getTotal($diff)
    {
       return $diff*$this->price;
    }

}
?>