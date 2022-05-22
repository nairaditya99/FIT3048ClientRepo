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
    $this->assign('templateName', 'error500.php');

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
<?php if ($error instanceof Error) : ?>
    <strong>Error in: </strong>
    <?= sprintf('%s, line %s', str_replace(ROOT, 'ROOT', $error->getFile()), $error->getLine()) ?>
<?php endif; ?>
<?php
    echo $this->element('auto_table_warning');

    $this->end();
endif;
?>

<?= $this->Html->css(['https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'])?>
<?= $this->Html->css(['/css/plugins.css'])?>
<?= $this->Html->css(['/css/style.css'])?>

<!-- 500 PAGE -->
<section class="m-t-80 p-b-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-error-404 text-center">500</div>
            </div>
            <div class="col-lg-6">
                <div class="text-start">
                    <h1 class="text-medium">Server Error!</h1>
                    <p class="lead">We're sorry, something is wrong on our server.</p>
                    <div class="seperator m-t-20 m-b-20"></div><button onclick="window.location.reload()" class="btn btn-primary" type="button">Reload Page</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end:  500 PAGE -->

<?= $this->Html->script('/js/jquery.js'); ?>
<?= $this->Html->script('/js/plugins.js'); ?>
<?= $this->Html->script('/js/functions.js'); ?>
