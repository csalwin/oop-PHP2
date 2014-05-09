<?php
/**
 * Created by PhpStorm.
 * User: designstudio_2
 * Date: 08/05/2014
 * Time: 14:11
 */

namespace test\controllers;
use app\controllers\DefaultController;
include ('app/controllers/DefaultController.php');
class DefaultControllerTest extends \PHPUnit_Framework_TestCase{
    private $test;
    //Setup instance of class to be tested
    protected function setUP(){
        parent::setUp();//This runs setUP in PHPUnit_Framework_test case
        $this->test = new DefaultController();
    }
    //When finished remove instance of class
    protected function tearDown(){
        $this->test = null;
        parent::tearDown();//This runs tearDown
    }
    public function __construct(){
        //this is construct for test class
    }
    public function test__construct(){
        //this test that there are no errors in construct in class under test
        $this->test-> __construct();
    }
    public function testPageIsSet(){

        $this->assertNotEmpty($this->test->page,$message="no page here");
    }
    public function testTitleIsSet(){
        //This test if a title has been set
        $this->assertNotEmpty($this->test->title,$message="No Title Set");
    }
}
 