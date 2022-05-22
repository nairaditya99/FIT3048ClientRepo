<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactUsCm $contactUsCm
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Contact Us Cms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contactUsCms form content">
            <?= $this->Form->create($contactUsCm) ?>
            <fieldset>
                <legend><?= __('Add Contact Us Cm') ?></legend>
                <?php
                    echo $this->Form->control('Banner_photo_1');
                    echo $this->Form->control('Title_1');
                    echo $this->Form->control('Body_21');
                    echo $this->Form->control('IG_1');
                    echo $this->Form->control('IG_2');
                    echo $this->Form->control('IG_3');
                    echo $this->Form->control('IG_4');
                    echo $this->Form->control('IG_5');
                    echo $this->Form->control('IG_6');
                    echo $this->Form->control('Title_2');
                    echo $this->Form->control('Body_2');
                    echo $this->Form->control('Address');
                    echo $this->Form->control('Phone');
                    echo $this->Form->control('Email');
                    echo $this->Form->control('Website');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
