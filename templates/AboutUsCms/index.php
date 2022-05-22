<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AboutUsCm[]|\Cake\Collection\CollectionInterface $aboutUsCms
 */
?>
<div class="aboutUsCms index content">
    <?= $this->Html->link(__('New About Us Cm'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('About Us Cms') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Banner_Photo_1') ?></th>
                    <th><?= $this->Paginator->sort('S2_Sub_Photo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($aboutUsCms as $aboutUsCm): ?>
                <tr>
                    <td><?= $this->Number->format($aboutUsCm->id) ?></td>
                    <td><?= h($aboutUsCm->Banner_Photo_1) ?></td>
                    <td><?= h($aboutUsCm->S2_Sub_Photo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $aboutUsCm->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aboutUsCm->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aboutUsCm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aboutUsCm->id)]) ?>
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
