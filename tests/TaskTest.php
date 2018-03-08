<?php
class TaskTest extends PHPUnit\Framework\TestCase
{
    private $CI;

    // Setup
    public function setUp()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('task');
        $this->task = new Task();
    }

    // Check if task is valid.
    function testSetTask()
    {
        $expected = "Title must be 64 characters or less.";
        $this->task->setTask($expected);
        $this->assertEquals($expected, $this->task->task);
    }

    // testing empty set task.
    public function testSetTaskEmpty()
    {        
        $expected = "";
        $this->task->setTask($expected);
        $this->assertEquals($expected, $this->task->task);
    }  
      
    // Test task too long.
    public function testSetTaskTooLong()
    {        
        $expected = "EXAMPLETASK EXAMPLETASK EXAMPLETASK EXAMPLETASK EXAMPLETASK EXAMPLETASK EXAMPLETASK EXAMPLETASK EXAMPLETASK";
        $this->task->setTask($expected);
        $this->assertNotEquals($expected, $this->task->task);
    }    
    
    // Test priority min.
    public function testSetPriorityValidMin()
    {        
        $priority = 0;
        $this->task->setPriority($priority);
        $this->assertEquals( $priority, $this->task->priority );
    }  
    
    // Test priority max.
    public function testSetPriorityValidMax()
    {        
        $priority = 3;
        $this->task->setPriority($priority);
        $this->assertEquals( $priority, $this->task->priority );
    } 
    
    // Test priority non numeric.
    public function testSetPriorityNonNumeric()
    {        
        $priority = 'x';
        $this->task->setPriority($priority);
        $this->assertNotEquals( $priority, $this->task->priority );
    }  
    
    // Test priority too high.
    public function testSetPriorityTooHigh()
    {        
        $priority = 5;
        $this->task->setPriority($priority);
        $this->assertNotEquals( $priority, $this->task->priority );
    }  
    
    // Test set size min.
    public function testSetSizeValidMin()
    {        
        $size = 0;
        $this->task->setSize($size);
        $this->assertEquals( $size, $this->task->size );
    }  
    
    public function testSetSizeValidMax()
    {      
        $size = 3;
        $this->task->setSize($size);
        $this->assertEquals( $size, $this->task->size );
    } 
    
    public function testSetSizeNonNumeric()
    {        
        $size = 'x';
        $this->task->setSize($size);
        $this->assertNotEquals( $size, $this->task->size );
    }  
    
    public function testSetSizeTooHigh()
    {        
        $size = 5;
        $this->task->setSize($size);
        $this->assertNotEquals( $size, $this->task->size );
    }  
    
    // set group
    public function testSetGroupValidMin()
    {        
        $group = 0;
        $this->task->setGroup($group);
        $this->assertEquals( $group, $this->task->group );
    }  
    
     public function testSetGroupValidMax()
    {      
        $group = 4;
        $this->task->setGroup($group);
        $this->assertEquals( $group, $this->task->group );
    } 
    
    public function testSetGroupNonNumeric()
    {        
        $group = 'x';
        $this->task->setGroup($group);
        $this->assertNotEquals( $group, $this->task->group );
    }  
    
    public function testGroupSizeTooHigh()
    {
        $group = 5;
        $this->task->setGroup($group);
        $this->assertNotEquals( $group, $this->task->group );
    }
}
