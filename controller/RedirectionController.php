<?php

class RedirectionController extends AbstractController{

  public function createAction(){
    ?>
    <script type="text/javascript">
      document.location.replace("createArticle.php");
    </script>
    <?php
  }
}
