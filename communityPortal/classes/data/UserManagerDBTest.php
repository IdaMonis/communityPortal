<?php
require_once 'classes/data/UserManagerDB.php';

/**
 * UserManagerDB test case.
 */
class UserManagerDBTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var UserManagerDB
     */
    private $userManagerDB;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated UserManagerDBTest::setUp()
        
        $this->userManagerDB = new UserManagerDB(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated UserManagerDBTest::tearDown()
        $this->userManagerDB = null;
        
        parent::tearDown();
    }

    /**
     * Constructs the test case.
     */
    public function __construct()
    {
        // TODO Auto-generated constructor
    }

    /**
     * Tests UserManagerDB::fillUser()
     */
    public function testFillUser()
    {
        // TODO Auto-generated UserManagerDBTest::testFillUser()
        $this->markTestIncomplete("fillUser test not implemented");
        
        UserManagerDB::fillUser(/* parameters */);
    }

    /**
     * Tests UserManagerDB::getUserByEmailPassword()
     */
    public function testGetUserByEmailPassword()
    {
        // TODO Auto-generated UserManagerDBTest::testGetUserByEmailPassword()
        $this->markTestIncomplete("getUserByEmailPassword test not implemented");
        
        UserManagerDB::getUserByEmailPassword(/* parameters */);
    }

    /**
     * Tests UserManagerDB::getUserByEmail()
     */
    public function testGetUserByEmail()
    {
        // TODO Auto-generated UserManagerDBTest::testGetUserByEmail()
        $this->markTestIncomplete("getUserByEmail test not implemented");
        
        UserManagerDB::getUserByEmail(/* parameters */);
    }

    /**
     * Tests UserManagerDB::saveUser()
     */
    public function testSaveUser()
    {
        // TODO Auto-generated UserManagerDBTest::testSaveUser()
        $this->markTestIncomplete("saveUser test not implemented");
        
        UserManagerDB::saveUser(/* parameters */);
    }

    /**
     * Tests UserManagerDB::getAllUsers()
     */
    public function testGetAllUsers()
    {
        // TODO Auto-generated UserManagerDBTest::testGetAllUsers()
        $this->markTestIncomplete("getAllUsers test not implemented");
        
        UserManagerDB::getAllUsers(/* parameters */);
    }

    /**
     * Tests UserManagerDB::getUserById()
     */
    public function testGetUserById()
    {
        // TODO Auto-generated UserManagerDBTest::testGetUserById()
        $this->markTestIncomplete("getUserById test not implemented");
        
        UserManagerDB::getUserById(/* parameters */);
    }

    /**
     * Tests UserManagerDB::getUserByName()
     */
    public function testGetUserByName()
    {
        // TODO Auto-generated UserManagerDBTest::testGetUserByName()
        $this->markTestIncomplete("getUserByName test not implemented");
        
        UserManagerDB::getUserByName(/* parameters */);
    }

    /**
     * Tests UserManagerDB::getUserByCity()
     */
    public function testGetUserByCity()
    {
        // TODO Auto-generated UserManagerDBTest::testGetUserByCity()
        $this->markTestIncomplete("getUserByCity test not implemented");
        
        UserManagerDB::getUserByCity(/* parameters */);
    }

    /**
     * Tests UserManagerDB::getUserByCountry()
     */
    public function testGetUserByCountry()
    {
        // TODO Auto-generated UserManagerDBTest::testGetUserByCountry()
        $this->markTestIncomplete("getUserByCountry test not implemented");
        
        UserManagerDB::getUserByCountry(/* parameters */);
    }

    /**
     * Tests UserManagerDB::searchUser()
     */
    public function testSearchUser()
    {
        // TODO Auto-generated UserManagerDBTest::testSearchUser()
        $this->markTestIncomplete("searchUser test not implemented");
        
        UserManagerDB::searchUser(/* parameters */);
    }

    /**
     * Tests UserManagerDB::updatePassword()
     */
    public function testUpdatePassword()
    {
        // TODO Auto-generated UserManagerDBTest::testUpdatePassword()
        $this->markTestIncomplete("updatePassword test not implemented");
        
        UserManagerDB::updatePassword(/* parameters */);
    }
}

