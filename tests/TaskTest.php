<?php
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    private $CI;

    // Load CI instance normally
    public function setUp()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('tasks');
        $this->tasks = new Tasks();
    }

    public function testGetPost()
    {
        $_SERVER['REQUEST_METHOD'] = 'GET';
        $_GET['foo'] = 'bar';
        $this->assertEquals('bar', $this->CI->input->get_post('foo'));
    }
}
