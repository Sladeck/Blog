<?php

class RedirectionController extends AbstractController{

  public function createAction(){
    header("location:/createArticle");
  }
}
