<?php

class Empresa{
    protected $id;
    protected $company;
    protected $investment;
    protected $date;
    protected $active;

    function __construct($id, $company, $investment, $date, $active){
        $this->id = $id;
        $this->company = $company;
        $this->investment = $investment;
        $this->date = $date;
        $this->active =$active;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function setCompany($company)
    {
        $this->company = $company;
    }
    public function getInvestment()
    {
        return $this->investment;
    }
    public function setInvestment($investment)
    {
        $this->investment = $investment;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    } 
    public function getActive()
    {
        return $this->active;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }

}

?>