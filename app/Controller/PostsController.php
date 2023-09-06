<?php

class PostsController extends AppController
{

     public function index()
     {

          $this->set('posts', $this->Post->find('all'));
     }

     public function add()
     {    
          $id = $this->request->param('pass')[0];

          if ($this->request->is('POST')) {

               $this->Post->create();

               $this->request->data['Post']['topic_id'] = $id;
               $formData = $this->request->data;

              
               if ($this->Post->save($formData)) {

                    $this->Flash->success(__('Post created successfully'));
                    return $this->redirect("index");
               }

               $this->Flash->error(__('Post create failed'));
               return $this->redirect($this->referer());
          }
     }

     public function view($id)
     {
          if (!$id) {
               $this->Flash->error(__("There is no post with that ID"));
               return $this->redirect($this->referer());
          }
          $post = $this->Post->findById($id);
          $this->set('post', $post);
     }

     public function update()
     {
     }

     public function delete()
     {
     }
}
