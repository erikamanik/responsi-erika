<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$esra = new Person("Erika", "Parapat");

// tambahkan value nama di object
$esra->nama = "Erika";

// panggil function sayHelloNull dengan parameter
$esra->sayHelloNull("Kic");

// buat object dari kelas person
$tasya = new Person("Putri", "Jambi");

// tambahkan value nama di object
$tasya->nama = "Putri";

// panggil function sayHelloNull dengan parameter null
$tasya->sayHelloNull(null);
