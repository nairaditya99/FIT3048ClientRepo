<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 * @var \Cake\Collection\CollectionInterface|string[] $fandoms
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Events'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="events form content">
            <?= $this->Form->create($event) ?>
            <fieldset>
                <legend><?= __('Add Event') ?></legend>
                <?php
                    echo $this->Form->control('fandom_id', ['options' => $fandoms]);
                    echo $this->Form->control('title');
                    echo $this->Form->control('content');
                    echo $this->Form->control('date');
                    echo $this->Form->control('location');
                    echo $this->Form->control('photo');
                    echo $this->Form->control('link');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
