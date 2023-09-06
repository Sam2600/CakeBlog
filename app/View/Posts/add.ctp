<div class="container col-md-6 offset-md-3 my-5">

     <div class="d-flex">
          <h2>Create Post</h2>

          <button class="btn btn-success btn-sm ms-4">
               <?php echo $this->Html->link("To Home", ["controller" => "posts", "action" => "index"], ["style" => "text-decoration:none; color:white"]) ?>
          </button>
     </div>

     <?= $this->Flash->render(); ?>

     <?php
     echo $this->Form->create("Post", ["class" => "form my-4"]);
     //$users = array("Sam", "James", "Leo");
     //echo $this->Form->input("user_id", ["class" => "form-select mb-3", "options" => $users]);
     echo $this->Form->input("body", ["class" => "form-control mb-3"]);
     echo $this->Form->button(__("Save post"), ["class" => "btn btn-primary -btn-sm ", "type" => "submit"]);
     echo $this->Form->end();
     ?>
</div>