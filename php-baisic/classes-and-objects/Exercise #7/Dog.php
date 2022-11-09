<?php

class Dog {

    private $name;
    private $sex;
    private $mother;
    private $father;

    public function __construct(string $name,string $sex, ?string $mother = null, ?string $father = null){
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }

    public function getName(): string{
        return $this->name;
    }

    public function getSex(): string{
        return $this->sex;
    }

    public function getFatherName(): string {

        if ($this->father == null){
            return "Unknown";
        } else{
            return $this->father;
        }
    }

    public function hasSameAsMotherAs(Dog $dog2):bool{
        return $this->mother === $dog2->mother;
    }

}

class DogTest {
    public function mainMethod() {
        $dog1 = new Dog("Max","male","Lady","Rocky");
        $dog2 = new Dog("Rocky","male", "Molly","Sam");
        $dog3 = new Dog("Sparky","male");
        $dog4 = new Dog("Buster","male","Lady","Sparky");
        $dog5 = new Dog("Sam","male");
        $dog6 = new Dog("Lady","female");
        $dog7 = new Dog("Molly","female");
        $dog8 = new Dog("Coco","female","Molly","Buster");

        echo $dog8->getFatherName() == "Buster";
        echo "Reference to Coco Father name: " . $dog8->getFatherName();;
        echo PHP_EOL;

        echo PHP_EOL;
        echo $dog3->getFatherName() == "Unknown";
        echo "Reference to Sparky Father name: " . $dog3->getFatherName();
        echo PHP_EOL;

        echo PHP_EOL;
        echo "Has Coco the same mother as Rocky? ";
        echo $dog8->hasSameAsMotherAs($dog2) == true ? "True" : "False";

    }

}
(new DogTest())->mainMethod();