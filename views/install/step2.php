<?php
$this->title = 'easyii2CMS installation step 2';
?>

<?= $this->render('_steps', ['currentStep' => 2])?>

<div class="col-md-6 col-md-offset-3">
    <div class="text-center"><h2>Control panel details</h2></div>
    <br/>
    <div class="well">
        <?= $this->render('@easyii2/views/install/_form', ['model' => $model])?>
    </div>
</div>