<?php
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    private $task;

    // Load CI instance normally
    public function setUp()
    {
        $this->task = &get_instance();
    }

    public function testGetPost()
    {
        $_SERVER['REQUEST_METHOD'] = 'GET';
        $_GET['foo'] = 'bar';
        $this->assertEquals('bar', $this->task->input->get_post('foo'));
    }
}
