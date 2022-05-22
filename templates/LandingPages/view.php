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
            <?= $this->Html->link(__('Edit Landing Page'), ['action' => 'edit', $landingPage->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Landing Page'), ['action' => 'delete', $landingPage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $landingPage->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Landing Pages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Landing Page'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="landingPages view content">
            <h3><?= h($landingPage->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($landingPage->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subtitle') ?></th>
                    <td><?= h($landingPage->subtitle) ?></td>
                </tr>
                <tr>
                    <th><?= __('Minititle') ?></th>
                    <td><?= h($landingPage->minititle) ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($landingPage->photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bio') ?></th>
                    <td><?= h($landingPage->bio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Copywrite') ?></th>
                    <td><?= h($landingPage->copywrite) ?></td>
                </tr>
                <tr>
                    <th><?= __('Path') ?></th>
                    <td><?= h($landingPage->path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($landingPage->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
