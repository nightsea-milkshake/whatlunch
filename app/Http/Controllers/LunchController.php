<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lunch;
use App\Service\lunchService;

class LunchController extends Controller
{

    public function __construct(){
        $this->lunchService = new lunchService();
    }

    public function Index()
    {
        return View('lunch.index');
    }
    
    public function RandomLunch()
    {
        $data=$this->lunchService->GetData();
        return View('lunch.randomlunch',['data'=>$data]);
    }

    public function Create()
    {
        return View('lunch.create');
    }

    public function Update(Request $newData)
    {
        $lunch = new Lunch();
        $lunch->StoreName=$newData->newMeal;
        $lunch->Class=$newData->lunchclass;
        $lunch->save();
        
        return View('lunch.update');
    }

    public function ShowAllData()
    {
        $data=$this->lunchService->GetAllDataList();
        return View('lunch.showdata',[
            'alldata'=>$data
            ]);
    }
}
