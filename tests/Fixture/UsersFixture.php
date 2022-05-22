<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'nickname' => 'Lorem ipsum dolor sit amet',
                'is_admin' => 1,
                'prefered_homepage' => 'Lorem ipsum dolor sit amet',
                'security_question' => 'Lorem ipsum dolor sit amet',
                'security_answer' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
