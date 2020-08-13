<?php

namespace App\Controllers;

use App\Models\Job;

class JobsController extends BaseController {
  public function getAddJobAction($request){

    if(!empty($request->getMethod() == 'POST')){
      $postData = $request->getParsedBody();
      $job = new Job();
      $job->title = $postData['title'];
      $job->description = $postData['description'];
      $job->save();
    }
    return $this->renderHTML('addJob.twig');
    // include '../views/addJob.php';
  }
}