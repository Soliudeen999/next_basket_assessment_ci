<?php

use App\Listeners\UserCreatedListener;
use App\Service\UserService;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\ControllerTester;
use CodeIgniter\Test\DatabaseTestTrait;
use Config\Services;

/**
 * @internal
 */
final class UserServiceTest extends CIUnitTestCase
{
    use DatabaseTestTrait;

    protected $migrate     = true;
    protected $refresh     = true;

    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    public function testStoreUserLogsMessage()
    {
        // Mock the UserRepository and log_message function
        $userRepository = $this->getMockBuilder(\App\Repositories\UserRepository::class)
                                ->disableOriginalConstructor()
                                ->getMock();

        // Create an instance of the UserService with the mocked UserRepository
        $userService = new UserService($userRepository);

        // Call the storeUser method with sample user data
        $userData = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'johndoe@example.com',
        ];

        $user = $userService->createUser($userData);

        $this->seeInDatabase('users', $user);
    }
}
