<?php
App::uses('AppModel', 'Model');
/**
 * Topic Model
 *
 * @property User $User
 * @property Post $Post
 */

class Post extends AppModel
{
     /**
      * Use table
      *
      * @var mixed False or table name
      */
     public $useTable = 'posts';

     /**
      * Display field
      *
      * @var string
      */
     public $displayField = 'body';

     /**
      * Validation rules
      *
      * @var array
      */
     public $validate = array(
          'id' => array(
               'notBlank' => array(
                    'rule' => array('notBlank'),
                    //'message' => 'Your custom message here',
                    //'allowEmpty' => false,
                    //'required' => false,
                    //'last' => false, // Stop validation after this rule
                    //'on' => 'create', // Limit validation to 'create' or 'update' operations
               ),
          ),
          'topic_id' => array(
               'notBlank' => array(
                    'rule' => array('notBlank'),
                    'message' => 'Your custom message here',
                    //'allowEmpty' => false,
                    //'required' => false,
                    //'last' => false, // Stop validation after this rule
                    //'on' => 'create', // Limit validation to 'create' or 'update' operations
               ),
               'numeric' => array(
                    'rule' => array('numeric'),
                    //'message' => 'Your custom message here',
                    //'allowEmpty' => false,
                    //'required' => false,
                    //'last' => false, // Stop validation after this rule
                    //'on' => 'create', // Limit validation to 'create' or 'update' operations
               ),
          ),
          'user_id' => array(
               'notBlank' => array(
                    'rule' => array('notBlank'),
                    'message' => 'Your custom message here',
                    //'allowEmpty' => false,
                    //'required' => false,
                    //'last' => false, // Stop validation after this rule
                    //'on' => 'create', // Limit validation to 'create' or 'update' operations
               ),
               'numeric' => array(
                    'rule' => array('numeric'),
                    //'message' => 'Your custom message here',
                    //'allowEmpty' => false,
                    //'required' => false,
                    //'last' => false, // Stop validation after this rule
                    //'on' => 'create', // Limit validation to 'create' or 'update' operations
               ),
          ),
          'body' => array(
               'notBlank' => array(
                    'rule' => array('notBlank'),
                    'message' => 'Your custom message here',
                    //'allowEmpty' => false,
                    //'required' => false,
                    //'last' => false, // Stop validation after this rule
                    //'on' => 'create', // Limit validation to 'create' or 'update' operations
               ),
          ),
     );


     /**
      * belongsTo associations
      *
      * @var array
      */
     public $belongsTo = array(
          'Topic' => array(
               'className' => 'Topic',
               'foreignKey' => 'topic_id',
               'conditions' => '',
               'fields' => '',
               'order' => ''
          )
     );
}
