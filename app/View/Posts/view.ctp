<div class="container col-md-6 offset-md-3 my-5">

     <div class="card">
          <div class="card-header">
               Details for this topic
          </div>
          <div class="card-body">

               <?php print_r($post, true) ?>

               <h5 class="card-title"><?php echo $post['Post']['body'] ?></h5>
               <hr />
               <p class="card-text"><?php echo $post['Post']['body'] ?></p>
               <div class="d-flex">
                    <button class="btn btn-primary btn-sm my-2"><?php echo $this->Html->link("To Home", ["controller" => "posts", "action" => "index"], ["style" => "text-decoration:none; color: white"]) ?></button>
                    <button class="btn btn-primary btn-sm my-2 ms-auto">
                         <?php echo $this->Html->link("Add topic", ["controller" => "posts", "action" => "add", $post['Post']['topic_id']], ["style" => "text-decoration:none; color:white"]) ?>
                    </button>
               </div>
          </div>
     </div>

</div>