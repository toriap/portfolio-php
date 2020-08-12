<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class job extends Model {
  protected $table = 'jobs';

  public function getDurationAsString(){
    $years = floor($this->months / 12);
    $extraMonths = $this->months % 12;
  
    if($years == 0){
      return "$extraMonths months";
    } else if($extraMonths == 0){
      return "$years years";
    }else{
      return "Job duration $years years $extraMonths months";
    }
  }

}
