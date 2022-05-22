<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LandingPage $landingPage
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Landing Pages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="landingPages form content">
            <?= $this->Form->create($landingPage) ?>
            <fieldset>
                <legend><?= __('Add Landing Page') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('subtitle');
                    echo $this->Form->control('minititle');
                    echo $this->Form->control('photo');
                    echo $this->Form->control('bio');
                    echo $this->Form->control('copywrite');
                    echo $this->Form->control('path');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
