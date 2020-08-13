<?php

namespace App\Controllers;

use App\Models\Project;

class ProjectController extends BaseController{
  public function getAddProjectAction($request){

    if(!empty($request->getMethod() == 'POST')) {
      $postData = $request->getParsedBody();
      $project = new Project();
      $project->title = $postData['title'];
      $project->description = $postData['description'];
      $project->save();
    }

    return $this->renderHTML('addProject.twig');
    // include '../views/addProject.php';
  }
}