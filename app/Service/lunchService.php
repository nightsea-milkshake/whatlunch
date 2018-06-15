<?php
namespace App\Service;
use App\Lunch;
use Illuminate\Support\Facades\DB;

class lunchService
{

    public function GetData()
    {
        $lunch=Lunch::inRandomOrder()->first();
        return $lunch;
    }

    public function GetAllDataList()
    {
        $lunch=Lunch::all();
        return $lunch;
    }


}