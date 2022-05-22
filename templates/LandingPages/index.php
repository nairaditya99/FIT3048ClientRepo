<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LandingPage[]|\Cake\Collection\CollectionInterface $landingPages
 */
?>
<div class="landingPages index content">
    <?= $this->Html->link(__('New Landing Page'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Landing Pages') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('subtitle') ?></th>
                    <th><?= $this->Paginator->sort('minititle') ?></th>
                    <th><?= $this->Paginator->sort('photo') ?></th>
                    <th><?= $this->Paginator->sort('bio') ?></th>
                    <th><?= $this->Paginator->sort('copywrite') ?></th>
                    <th><?= $this->Paginator->sort('path') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($landingPages as $landingPage): ?>
                <tr>
                    <td><?= $this->Number->format($landingPage->id) ?></td>
                    <td><?= h($landingPage->title) ?></td>
                    <td><?= h($landingPage->subtitle) ?></td>
                    <td><?= h($landingPage->minititle) ?></td>
                    <td><?= h($landingPage->photo) ?></td>
                    <td><?= h($landingPage->bio) ?></td>
                    <td><?= h($landingPage->copywrite) ?></td>
                    <td><?= h($landingPage->path) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $landingPage->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $landingPage->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $landingPage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $landingPage->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
