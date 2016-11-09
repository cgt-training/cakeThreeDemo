<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Enquiry'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="enquiry form large-9 medium-8 columns content">
    <?= $this->Form->create($enquiry) ?>
    <fieldset>
        <legend><?= __('Add Enquiry') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('phone_no');
            echo $this->Form->input('email');
            echo $this->Form->input('query');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
