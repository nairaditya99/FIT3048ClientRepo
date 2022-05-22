<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Events'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Event'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="events view content">
            <h3><?= h($event->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Fandom') ?></th>
                    <td><?= $event->has('fandom') ? $this->Html->link($event->fandom->name, ['controller' => 'Fandoms', 'action' => 'view', $event->fandom->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Content') ?></th>
                    <td><?= h($event->content) ?></td>
                </tr>
                <tr>
                    <th><?= __('Location') ?></th>
                    <td><?= h($event->location) ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($event->photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Link') ?></th>
                    <td><?= h($event->link) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($event->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= $this->Number->format($event->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($event->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
