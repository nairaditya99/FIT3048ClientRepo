<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fandom[]|\Cake\Collection\CollectionInterface $fandoms
 */
?>
<div class="fandoms index content">
    <?= $this->Html->link(__('New Fandom'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Fandoms') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('Home_Page_Photo') ?></th>
                    <th><?= $this->Paginator->sort('Section_One_Video_URL') ?></th>
                    <th><?= $this->Paginator->sort('Section_Two_Photo') ?></th>
                    <th><?= $this->Paginator->sort('Section_Three_Video_URL') ?></th>
                    <th><?= $this->Paginator->sort('Section_Four_Video_URL') ?></th>
                    <th><?= $this->Paginator->sort('Section_Five_Video_URL') ?></th>
                    <th><?= $this->Paginator->sort('Section_Six_Video_URL') ?></th>
                    <th><?= $this->Paginator->sort('Section_Seven_Photo') ?></th>
                    <th><?= $this->Paginator->sort('Section_Eight_Photo') ?></th>
                    <th><?= $this->Paginator->sort('Section_Nine_Photo') ?></th>
                    <th><?= $this->Paginator->sort('Section_Nine_Video_URL') ?></th>
                    <th><?= $this->Paginator->sort('Section_Ten_Photo') ?></th>
                    <th><?= $this->Paginator->sort('Section_Ten_Video_One_URL') ?></th>
                    <th><?= $this->Paginator->sort('Section_Ten_Video_Two_URL') ?></th>
                    <th><?= $this->Paginator->sort('Section_Eleven_Photo') ?></th>
                    <th><?= $this->Paginator->sort('Section_Twelve_Photo') ?></th>
                    <th><?= $this->Paginator->sort('Section_Thirteen_Photo') ?></th>
                    <th><?= $this->Paginator->sort('Section_Fourteen_Photo') ?></th>
                    <th><?= $this->Paginator->sort('Section_Fifteen_Photo') ?></th>
                    <th><?= $this->Paginator->sort('Section_Fifteen_Video_URL') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fandoms as $fandom): ?>
                <tr>
                    <td><?= $this->Number->format($fandom->id) ?></td>
                    <td><?= h($fandom->name) ?></td>
                    <td><?= h($fandom->Home_Page_Photo) ?></td>
                    <td><?= h($fandom->Section_One_Video_URL) ?></td>
                    <td><?= h($fandom->Section_Two_Photo) ?></td>
                    <td><?= h($fandom->Section_Three_Video_URL) ?></td>
                    <td><?= h($fandom->Section_Four_Video_URL) ?></td>
                    <td><?= h($fandom->Section_Five_Video_URL) ?></td>
                    <td><?= h($fandom->Section_Six_Video_URL) ?></td>
                    <td><?= h($fandom->Section_Seven_Photo) ?></td>
                    <td><?= h($fandom->Section_Eight_Photo) ?></td>
                    <td><?= h($fandom->Section_Nine_Photo) ?></td>
                    <td><?= h($fandom->Section_Nine_Video_URL) ?></td>
                    <td><?= h($fandom->Section_Ten_Photo) ?></td>
                    <td><?= h($fandom->Section_Ten_Video_One_URL) ?></td>
                    <td><?= h($fandom->Section_Ten_Video_Two_URL) ?></td>
                    <td><?= h($fandom->Section_Eleven_Photo) ?></td>
                    <td><?= h($fandom->Section_Twelve_Photo) ?></td>
                    <td><?= h($fandom->Section_Thirteen_Photo) ?></td>
                    <td><?= h($fandom->Section_Fourteen_Photo) ?></td>
                    <td><?= h($fandom->Section_Fifteen_Photo) ?></td>
                    <td><?= h($fandom->Section_Fifteen_Video_URL) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $fandom->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fandom->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fandom->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fandom->id)]) ?>
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
