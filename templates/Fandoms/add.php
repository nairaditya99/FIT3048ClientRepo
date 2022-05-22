<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fandom $fandom
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Fandoms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="fandoms form content">
            <?= $this->Form->create($fandom) ?>
            <fieldset>
                <legend><?= __('Add Fandom') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('Home_Page_Title');
                    echo $this->Form->control('Home_Page_Subheading');
                    echo $this->Form->control('Home_Page_Photo');
                    echo $this->Form->control('Section_One_Title');
                    echo $this->Form->control('Section_One_Body');
                    echo $this->Form->control('Section_One_Video_URL');
                    echo $this->Form->control('Section_Two_Title');
                    echo $this->Form->control('Section_Two_Body');
                    echo $this->Form->control('Section_Two_Photo');
                    echo $this->Form->control('Section_Three_Title');
                    echo $this->Form->control('Section_Three_Body');
                    echo $this->Form->control('Section_Three_Video_URL');
                    echo $this->Form->control('Section_Four_Title');
                    echo $this->Form->control('Section_Four_Body');
                    echo $this->Form->control('Section_Four_Video_URL');
                    echo $this->Form->control('Section_Five_Title');
                    echo $this->Form->control('Section_Five_Body');
                    echo $this->Form->control('Section_Five_Video_URL');
                    echo $this->Form->control('Section_Six_Title');
                    echo $this->Form->control('Section_Six_Body');
                    echo $this->Form->control('Section_Six_Video_URL');
                    echo $this->Form->control('Section_Seven_Title');
                    echo $this->Form->control('Section_Seven_Body');
                    echo $this->Form->control('Section_Seven_Photo');
                    echo $this->Form->control('Section_Eight_Title');
                    echo $this->Form->control('Section_Eight_Photo');
                    echo $this->Form->control('Section_Eight_Body');
                    echo $this->Form->control('Section_Nine_Title');
                    echo $this->Form->control('Section_Nine_Photo');
                    echo $this->Form->control('Section_Nine_Body');
                    echo $this->Form->control('Section_Nine_Video_URL');
                    echo $this->Form->control('Section_Ten_Title');
                    echo $this->Form->control('Section_Ten_Photo');
                    echo $this->Form->control('Section_Ten_Body_One');
                    echo $this->Form->control('Section_Ten_Video_One_URL');
                    echo $this->Form->control('Section_Ten_Video_Two_URL');
                    echo $this->Form->control('Section_Ten_Body_Two');
                    echo $this->Form->control('Section_Eleven_Title');
                    echo $this->Form->control('Section_Eleven_Photo');
                    echo $this->Form->control('Section_Eleven_Body');
                    echo $this->Form->control('Section_Twelve_Title');
                    echo $this->Form->control('Section_Twelve_Photo');
                    echo $this->Form->control('Section_Twelve_Body');
                    echo $this->Form->control('Section_Thirteen_Title');
                    echo $this->Form->control('Section_Thirteen_Photo');
                    echo $this->Form->control('Section_Thirteen_Body');
                    echo $this->Form->control('Section_Fourteen_Title');
                    echo $this->Form->control('Section_Fourteen_Photo');
                    echo $this->Form->control('Section_Fourteen_Body');
                    echo $this->Form->control('Section_Fifteen_Title');
                    echo $this->Form->control('Section_Fifteen_Photo');
                    echo $this->Form->control('Section_Fifteen_Body');
                    echo $this->Form->control('Section_Fifteen_Video_URL');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
