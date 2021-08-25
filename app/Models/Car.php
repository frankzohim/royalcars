<?php

namespace app\Models;

/**
 * Class Car 
 * This class describe all the properties and behaviors of a car
 * created : 21-08-2021
 * updated : 21-08-2021
 * @author Lord Byron
 */

class Car {
    protected $id;
    protected $fullname;
    protected $chassisNumber;
    protected $matriculation;
    protected $numberOfPlaces;
    protected $numberOfDoors;
    protected $mileage;
    protected $year;
    protected $energy;
    protected $type;
    protected $lightPackage;
    protected $airConditioner;
    protected $airBag;
    protected $gps;
    protected $tractionControl;
    protected $gearbox;
    protected $color;
    protected $category;
    protected $status;
    protected $rentalCost;
    protected $achievement;
    protected $imageIds;
    protected $modelId;
    protected $userId;
    protected $carStandingId;
    protected $carTypeId;
    protected $driverId;
    protected $createdAt;
    protected $updatedAt;
    
    public function __construct() {
        ;
    }
    
    public function save(){
        
    }
    
    public function getCarById(){
        
    }
}
