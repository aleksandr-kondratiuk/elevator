# elevator

```php

$elevator = new Elevator(10, 5);

$elevator->getUsers(2);

$elevator->goToFloor(5);

$elevator->getOutUsers(1);

$elevator->goToFloor(7);

$elevator->getOutUsers(1);

echo $elevator->getCurrentUsers();
echo $elevator->getCurrentFloor();