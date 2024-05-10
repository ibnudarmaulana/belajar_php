<?php

require_once "data/Programmer.php";

// $company = new Company;

// $company->programmer = new Programmer("Ibnu");
// var_dump($company);

// $company->programmer = new BackendProgrammer("Ibnu");
// var_dump($company);

// $company->programmer = new FrontendProgrammer("Ibnu");
// var_dump($company);

sayHelloProgrammer(new Programmer("Ibnu"));

sayHelloProgrammer(new BackendProgrammer("Ibnu"));

sayHelloProgrammer(new FrontendProgrammer("ibnu"));
