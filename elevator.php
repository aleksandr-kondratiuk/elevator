<?php

class Elevator {

    protected $floors;
    protected $currentFloor = 1;

    protected $maxUsers;
    protected $currentUsers = 0;
    
    public function __construct($floors = 100, $maxUsers = 10)
    {

        if (is_numeric($floors) && $floors > 1) {
            $this->floors = $floors;
        } else {
            echo 'Error: floors must be numeric and have more than 1';
        }

        if (is_numeric($maxUsers) && $maxUsers > 0) {
            $this->maxUsers = $maxUsers;
        } else {
            echo 'Error: maxUsers must be numeric and have more than 0';
        }

    }

    public function goToFloor($floor)
    {
        if (is_numeric($floor) && $floor > 1 && $floor <= $this->floors) {
            if ($this->currentFloor == $floor) {
                echo 'Error: floor number must be different from the current - ' . $this->currentFloor;
            } else {
                $this->currentFloor = $floor;
            }
        } else {
            echo 'Error: floor number must be numeric and be between 1 and ' . $this->floors;
        }
    }

    public function getUsers($users)
    {
        
        if (is_numeric($users) && $users > 0 && $users <= $this->maxUsers) {
            $leftUsers = $this->maxUsers - $this->currentUsers;

            if ($leftUsers > 0) {
                $sumUsers = $this->currentUsers + $users;

                if ($sumUsers <= $this->maxUsers) {
                    $this->currentUsers = $sumUsers;
                } else {
                    echo 'Error: limit users number, only left: ' . $leftUsers;
                }

            } else {
                echo 'Error: limit users number';
            }

        } else {
            echo 'Error: users number must be numeric and be between 1 and ' . $this->maxUsers;
        }

    }

    public function getOutUsers($users)
    {
        
        if (is_numeric($users) && $users > 0 && $users <= $this->currentUsers) {
            $countUsers = $this->currentUsers - $users;

            if ($countUsers < 0) {
                $this->currentUsers = 0;
            } else {
                $this->currentUsers = $countUsers;
            }

        } else {
            echo 'Error: users number must be numeric and be between 1 and ' . $this->maxUsers;
        }

    }

    public function getCurrentFloor()
    {
        return $this->currentFloor;
    }

    public function getCurrentUsers()
    {
        return $this->currentUsers;
    }

}
