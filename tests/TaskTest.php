<?php
 class TaskTest extends PHPUnit_Framework_TestCase
  {
    private $task;
    public function setUp()
    {
      // Load CI instance normally
      $this->task = &get_instance();
    }
    public function testGetPost()
    {
      $_SERVER['REQUEST_METHOD'] = 'GET';
      $_GET['foo'] = 'bar';
      $this->assertEquals('bar', $this->task->input->get_post('foo'));
    }
  }
