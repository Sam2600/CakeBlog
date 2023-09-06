<div class="container col-md-6 offset-md-3 my-5">

     <div class="card">
          <div class="card-header">
               Details for this topic
          </div>
          <div class="card-body">
               <h5 class="card-title"><?php echo $topic['Topic']['title'] ?></h5>
               <hr />
               <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo illum molestias quaerat sequi dolor quisquam officia modi dolores, nesciunt qui voluptates reprehenderit delectus soluta nobis, adipisci, corporis nemo dolorem eligendi!</p>
               <button class="btn btn-primary btn-sm my-2"><?php echo $this->Html->link("To Home", ["controller" => "topics", "action" => "index"], ["style" => "text-decoration:none; color: white"]) ?></button>
          </div>
     </div>

</div>