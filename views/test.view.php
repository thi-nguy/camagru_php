<?php require "partials/header.php"; ?>
<?php require "partials/navbar.php"; ?>
<!-- using autoLoader allows us to access to every classes inside the folder classes -->
<?php include "includes/autoLoader.inc.php" ?>

<div>This is Test page</div>
<?php

$person1 = new Person("Meo", "blue", "21");
echo $person1->getPersonName()  . "</br>";

echo Person::$drinkingAge . "</br>"; # Khong can create object van access vao static property duoc.
Person::setDrinkingAge(18);
echo Person::$drinkingAge  . "</br>";

$person2 = new Person("Daniel", "blue", "20");
echo $person2->getDrinkingAge()  . "</br>";
?>

<?php require "partials/footer.php"; ?>