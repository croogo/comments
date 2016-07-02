<?php
$captcha = (isset($captcha)) ? $captcha : false;
?>
<div class="comment-form">
	<h3><?= h(__d('croogo', 'Add new comment')); ?></h3>
    <?php if ($this->request->params['controller'] == 'comments'): ?>
        <p class="back">
            <?= $this->Html->link(__d('croogo', 'Go back to original post: {s}', $node->title), $node->url); ?>
        </p>
    <?php endif; ?>
    <?= $this->Form->create(false, ['url' => $formUrl]); ?>
    <?php if (!$loggedInUser): ?>
        <?= $this->Form->input('name', ['label' => __d('croogo', 'Name')]); ?>
        <?= $this->Form->input('email', ['label' => __d('croogo', 'Email')]); ?>
        <?= $this->Form->input('website', ['label' => __d('croogo', 'Website')]); ?>
    <?php endif; ?>
    <?= $this->Form->input('body'); ?>
    <?php if ($captcha): ?>
        <?= $this->Recaptcha->display(); ?>
    <?php endif; ?>
    <?= $this->Form->submit(__d('croogo', 'Post comment')); ?>
    <?= $this->Form->end(); ?>
</div>
