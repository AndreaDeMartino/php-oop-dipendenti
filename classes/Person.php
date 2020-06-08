<?php
  // Declare Class Person
  class Person {

    // Property
    public $name;
    public $surname;
    public $age;
    public $document;
    public $years_experience;

    // Constructor
    public function __construct($_name, $_surname, $_age, $_document, $_years_experience) {
      $this->name = $_name;
      $this->surname = $_surname;
      $this->age = $_age;
      $this->document = $_document;
      $this->years_experience = $_years_experience;
    }
  }