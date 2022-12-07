<?php

namespace App\Models;

use Illuminate\Support\Facades\Cache;

class Patient {

    private $id;
    private $name;
    private $gender;
    private $email;
    private $born_date;
    private $phone;
    private $start_date;
    private $end_date;
    private $treatment;
    private $report;

    public function __get($property){
        return $this->$property;
    }

    public function __set($property, $value){
        return $this->$property = $value;
    }

    public static function lista(){
        echo "TEste";
        return Cache::get('patients') ?? [];
    }

    public static function get($id){
        return Cache::get($id);
    }

    public function save(){

        $data = Cache::get('patients') ?? [];
        array_push($data, $this);

        Cache::put('patients', $data);
        Cache::put($this->id, $this);
    }

}

$paciente = new Patient();
$paciente->save();
