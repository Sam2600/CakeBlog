<?php

class PostsController extends AppController
{

     public function index()
     {

          $this->set('posts', $this->Post->find('all'));
     }

     public function add($id = null)
     {
          if ($id) { // checking if there is route parameter or not

               $this->request->data['Post']['topic_id'] = $id;
          }

          // preparing to transfer data to the view
          $topics = $this->Post->Topic->find('list');

          // Now transfer two data to the view
          $this->set(compact('topics', 'id'));

          if ($this->request->is('POST')) {

               $this->Post->create();

               $formData = $this->request->data;

               // var_dump($formData);
               // die();

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

     public function update($id)
     {    
          // Find the post by Id
          $post = $this->Post->findById($id);

          // Fetch the topic list
          $topics = $this->Post->Topic->find('list');
          // Send the fetched list to view
          $this->set(compact('topics'));


          if ($this->request->is(["PUT", "PATCH"])) {

               if (!$post) {
                    $this->Flash->error(__("There is no post with that topic id"));
                    return $this->redirect($this->referer());
               }

               $this->Post->id = $id;

               if ($this->Post->save($this->request->data)) {
                    $this->Flash->success(__("Post updated successfully"));
                    return $this->redirect("index");
               }

               $this->Flash->error(__("Post updated failed"));
               return $this->redirect($this->referer());
          }

          if (!$this->request->data) {
               $this->request->data = $post;
          }
     }

     public function delete($id)
     {

          if (!$id) {
               $this->Flash->error(__("There is no post with that"));
               return $this->redirect($this->referer());
          }

          if ($this->Post->delete($id)) {
               $this->Flash->success(__('The post with id: %s has been deleted.', h($id)));
          } else {
               $this->Flash->error(
                    __('The post with id: %s could not be deleted.', h($id))
               );
          }

          return $this->redirect('index');
     }
}
