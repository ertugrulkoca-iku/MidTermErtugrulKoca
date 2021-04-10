<?php
class Automobile {

public $licencePlate;
public $brand;
public $model;
public $modelYear;
public $color;

function __construct($licencePlate, $brand, $model, $modelYear, $color){
    $this->licencePlate=$licencePlate;
    $this->brand = $brand;
    $this->model = $model;
    $this->modelYear = $modelYear;
    $this->color = $color;

}

function __toString() {
    return $this->licencePlate . " :" .$this->brand . " " . $this->model. " " . $this->modelYear. " " . $this->color;
}

}
