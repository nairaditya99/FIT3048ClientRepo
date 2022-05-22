<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AboutUsCm $aboutUsCm
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List About Us Cms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aboutUsCms form content">
            <?= $this->Form->create($aboutUsCm) ?>
            <fieldset>
                <legend><?= __('Add About Us Cm') ?></legend>
                <?php
                    echo $this->Form->control('Banner_Photo_1');
                    echo $this->Form->control('S1_Title');
                    echo $this->Form->control('S1_Body');
                    echo $this->Form->control('S1_Sub_Title_1');
                    echo $this->Form->control('S1_Sub_Body_1');
                    echo $this->Form->control('S1_Sub_Title_2');
                    echo $this->Form->control('S1_Sub_Body_2');
                    echo $this->Form->control('S1_Sub_Title_3');
                    echo $this->Form->control('S1_Sub_Body_3');
                    echo $this->Form->control('S2_Title');
                    echo $this->Form->control('S2_Body');
                    echo $this->Form->control('S2_Sub_Title');
                    echo $this->Form->control('S2_Sub_Body');
                    echo $this->Form->control('S2_Sub_Photo');
                    echo $this->Form->control('S3_Title');
                    echo $this->Form->control('S3_Sub_Title_1');
                    echo $this->Form->control('S3_Sub_Body_1');
                    echo $this->Form->control('S3_Sub_Title_2');
                    echo $this->Form->control('S3_Sub_Body_2');
                    echo $this->Form->control('S3_Photo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
