<?php

class Programmer {

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer {

}

class FrontendProgrammer extends Programmer {

}

class Company {
    public Programmer $programmer;

}

function sayHelloProgrammer(Programmer $programmer){
    if($programmer instanceof BackendProgrammer){
        echo "$programmer->name Kamu adalah Backend Programmer";
    }else if($programmer instanceof FrontendProgrammer){
        echo "$programmer->name Kamu adalah Frontend Programmer";
    }else if($programmer instanceof Programmer){
        echo "$programmer->name Kamu adalah Programmer";
    }
}