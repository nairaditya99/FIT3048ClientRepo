
<?php
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Http\Exception\NotFoundException;

$checkConnection = function (string $name) {
    $error = null;
    $connected = false;
    try {
        $connection = ConnectionManager::get($name);
        $connected = $connection->connect();
    } catch (Exception $connectionError) {
        $error = $connectionError->getMessage();
        if (method_exists($connectionError, 'getAttributes')) {
            $attributes = $connectionError->getAttributes();
            if (isset($attributes['message'])) {
                $error .= '<br />' . $attributes['message'];
            }
        }
    }

    return compact('connected', 'error');
};

$cakeDescription = 'CakePHP: the rapid development PHP framework';

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LandingPage $landingPage
 * @var \App\Model\Entity\Fandom $fandom_info
 * @var \App\Model\Entity\LandingPage $landingPage_info
 */
?>

<!--  * @var \array $e1
 * @var \array $e2
 * @var \array $e3
 * @var \array $v1
 * @var \array $v2
 * @var \array $v3
 -->
<body>

    <!-- SECTION GREY -->
    <section class="background-grey p-b-0">
        <div class="container">
            <div class="row align-items-center" data-animate="fadeInUp">
                <div class="col-lg-7">
                    <div class="heading-text heading-section text-end">
                        <h1>Forum</h1>
                        <p>Meet other BTS Fans from around the world</p>
                    </div>
                </div>
                <div class="col-lg-5"> <img alt="" src="images/other/polo-iphone6-v3.png"> </div>
            </div>
        </div>
    </section>
    <!-- end: SECTION GREY -->
    <section>
        <div class="container">

            <iframe
                src="https://ccxforum.discussion.community"
                frameBorder="0"
                width="100%"
                height="1500px"
                allowtransparency="true"
                overflow="hidden"
                style="-webkit-transform-origin: 130%; overflow: hidden; "
                >
            </iframe>
        </div>
    </section>




</body>
</html>
