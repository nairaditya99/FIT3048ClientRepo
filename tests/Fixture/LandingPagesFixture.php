<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LandingPagesFixture
 */
class LandingPagesFixture extends TestFixture
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
                'title' => 'Lorem ipsum dolor sit amet',
                'subtitle' => 'Lorem ipsum dolor sit amet',
                'minititle' => 'Lorem ipsum dolor sit amet',
                'photo' => 'Lorem ipsum dolor sit amet',
                'bio' => 'Lorem ipsum dolor sit amet',
                'copywrite' => 'Lorem ipsum dolor sit amet',
                'path' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
