<?php

namespace App\Controllers;

use App\Models\{Job, Project};

class indexController extends  BaseController {
  public function indexAction(){

    $jobs = Job::all();
    $projects = Project::all();
//     $project1 = new Project('Project 1', 'Description 1');
//     $projects = [
//       $project1,
// ];

// require_once('jobs.php');

$lastName = 'Pereira';
$name = "Christopher $lastName";
$limitMoths = 2000;

return $this->renderHTML('index.twig',[
  'name' => $name,
  'jobs' => $jobs
]);
// var_dump($jobs); esto es un console.log en js pero en el html
  }
}