<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person1 = new Person(" Erika","Parapat");

// panggil function
$person1->sayHello("Erika");
