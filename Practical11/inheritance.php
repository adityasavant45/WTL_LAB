<?php
class Animal {
    function sound() {
        echo "Animal makes a sound<br>";
    }
}

class Dog extends Animal {
    function bark() {
        echo "Dog barks<br>";
    }
}

$single = new Dog();
$single->sound();
$single->bark();
echo "<br>";



class Puppy extends Dog {
    function play() {
        echo "Puppy plays<br>";
    }
}

$multilevel = new Puppy();
$multilevel->sound();
$multilevel->bark();
$multilevel->play();
echo "<br>";



class Cat extends Animal {
    function meow() {
        echo "Cat meows<br>";
    }
}

$hierarchical = new Cat();
$hierarchical->sound();
$hierarchical->meow();
echo "<br>";



interface Flyable {
    function fly();
}

interface Swimmable {
    function swim();
}

class Duck implements Flyable, Swimmable {
    function fly() {
        echo "Duck flies<br>";
    }

    function swim() {
        echo "Duck swims<br>";
    }
}

$multiple = new Duck();
$multiple->fly();
$multiple->swim();
?>
