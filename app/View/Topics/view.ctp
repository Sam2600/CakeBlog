<div class="container col-md-10 offset-md-1 my-5">

     <div class="card">
          <div class="card-header">
               Details for this topic
          </div>
          <div class="card-body">
               <h5 class="card-title"><?php echo $topic['Topic']['title'] ?></h5>
               <hr />
               <button class="btn btn-primary btn-sm my-2"><?php echo $this->Html->link("To Home", ["controller" => "topics", "action" => "index"], ["style" => "text-decoration:none; color: white"]) ?></button>

               <?php $count = 1; ?>
               <table class="table table-bordered table-hover border border-primary my-4">
                    <thead>
                         <tr>
                              <th scope="col">Id</th>
                              <th scope="col">Posts</th>
                              <th scope="col">Created</th>
                              <th scope="col">Modified</th>

                         </tr>
                    </thead>

                    <tbody>
                         <?php foreach ($topic["Post"] as $topic) : ?>
                              <tr>
                                   <td><?php echo $count ?></td>
                                   <td><?php echo $topic['body'] ?></td>
                                   <td><?php echo $topic['created'] ?></td>
                                   <td><?php echo $topic['modified'] ?></td>
                              </tr>
                              <?php $count++; ?>
                         <?php endforeach ?>
                    </tbody>

               </table>
          </div>
     </div>

</div>