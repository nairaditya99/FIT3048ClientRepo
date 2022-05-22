<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Database\StatementInterface $error
 * @var string $message
 * @var string $url
 */
use Cake\Core\Configure;
use Cake\Error\Debugger;

$this->layout = 'error';

if (Configure::read('debug')) :
    $this->layout = 'dev_error';

    $this->assign('title', $message);
    $this->assign('templateName', 'error400.php');

    $this->start('file');
?>
<?php if (!empty($error->queryString)) : ?>
    <p class="notice">
        <strong>SQL Query: </strong>
        <?= h($error->queryString) ?>
    </p>
<?php endif; ?>
<?php if (!empty($error->params)) : ?>
        <strong>SQL Query Params: </strong>
        <?php Debugger::dump($error->params) ?>
<?php endif; ?>
<?= $this->element('auto_table_warning') ?>
<?php

$this->end();
endif;
?>

<?= $this->Html->css(['/css/plugins.css'])?>
<?= $this->Html->css(['/css/style.css'])?>
<?= $this->Html->css(['https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'])?>
<!-- 404 PAGE -->
<section class="m-t-80 p-b-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-error-404">404</div>
            </div>
            <div class="col-lg-6">
                <div class="text-start">
                    <h1 class="text-medium">Ooops, This Page Could Not Be Found!</h1>
                    <p class="lead">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                    <div class="seperator m-t-20 m-b-20"></div>
                    <div class="search-form">
                        <p>Please try searching again</p>
                        <form action="<?= $this->Url->build(['controller' => 'LandingPages','action' => 'home']) ?>" method="get" class="form-inline">
                            <div class="input-group input-group-lg">
                                <input type="text" aria-required="true" name="q" class="form-control widget-search-form" placeholder="Search for pages...">
                                <button type="submit" id="widget-widget-search-form-button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end:  404 PAGE -->

<?= $this->Html->script('/js/jquery.js'); ?>
<?= $this->Html->script('/js/plugins.js'); ?>
<?= $this->Html->script('/js/functions.js'); ?>

