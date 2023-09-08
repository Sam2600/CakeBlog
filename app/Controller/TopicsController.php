<?php

class TopicsController extends AppController
{
     public function index()
     {
          # Normal Find methods
          //debug($this->Topic->find('all'));
          //debug($this->Topic->find('list'));
          //debug($this->Topic->find('first'));
          //debug($this->Topic->find('count'));

          # Normal Query
          //debug($this->Topic->query('SELECT * FROM topics'));

          # Normal Join Queries
          //debug($this->Topic->query('SELECT * FROM topics LEFT JOIN posts ON topics.id = posts.topic_id WHERE topics.id > 6'));
          //debug($this->Topic->query("SELECT * FROM topics LEFT JOIN posts ON topics.id = posts.topic_id WHERE topics.title LIKE CONCAT('%', 'p', '%') "));
          //debug($this->Topic->query("SELECT * FROM topics WHERE topics.title LIKE CONCAT('p', '%') AND topics.id > 5"));

          # ORM ***In OR NotIn*** Condition
          //$inCondition = array('Topic.title' => array('Politic', 'Weather'));
          //$notInCondition = array("NOT" => array('Topic.title' => array('Politic', 'Weather')));

          # ORM ***In OR NotIn + AND *** Condition
          //$inCondition = array('Topic.title' => array('Politic', 'Weather'), 'Topic.id >' => 5);
          //$notInCondition = array("NOT" => array('Topic.title' => array('Politic', 'Weather')), 'Topic.id >' => 5);

          # ORM ***OR*** Condition
          //$orCondition = array("OR" => array('Topic.title' => array('Politic', 'Weather'), 'Topic.id >' => 10));
          
          //debug($this->Topic->query("SELECT title, visible FROM topics WHERE topics.id > 6 GROUP BY topics.title"));

          $this->set('topics', $this->Topic->find('all'));
     }

     public function view($id)
     {
          if (!$id) {
          }

          $topic = $this->Topic->findById($id);
          // var_dump($topic);
          // die();

          if (!$topic) {
               return $this->redirect($this->referer());
          }

          $this->set('topic', $topic);
     }

     public function add()
     {
          // if ($this->request->is('POST')) {

          //      $formData = $this->request->data;

          //      $this->Topic->create();

          //      if ($this->Topic->save($formData)) {

          //           $this->Flash->success(__('Topic created successfully'));
          //           return $this->redirect("index");
          //      }

          //      $this->Flash->error(__('Topic create failed'));
          //      return $this->redirect($this->referer());
          // }
     }

     public function formAdd()
     {
          pr("Ok");
          die;
     }

     public function update($id)
     {

          $topic = $this->Topic->findById($id);

          if ($this->request->is(["PUT", "PATCH"])) {

               if (!$topic) {
                    $this->Flash->error(__("There is no topic with that topic id"));
                    return $this->redirect($this->referer());
               }

               $this->Topic->id = $id;

               if ($this->Topic->save($this->request->data)) {
                    $this->Flash->success(__("Topic updated successfully"));
                    return $this->redirect("index");
               }

               $this->Flash->error(__("Topic updated failed"));
               return $this->redirect($this->referer());
          }

          if (!$this->request->data) {
               $this->request->data = $topic;
          }
     }

     public function delete($id)
     {

          if (!$id) {
               $this->Flash->error(__("There is no topic with that topic id"));
               return $this->redirect($this->referer());
          }

          if ($this->Topic->delete($id)) {
               $this->Flash->success(__('The topic with id: %s has been deleted.', h($id)));
          } else {
               $this->Flash->error(
                    __('The topic with id: %s could not be deleted.', h($id))
               );
          }

          return $this->redirect('index');
     }
}
