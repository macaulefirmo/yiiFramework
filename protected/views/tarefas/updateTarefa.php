<h1>Editar Tarefa - <?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
    $this->renderPartial('_form', array(
      'model' => $model));
?>