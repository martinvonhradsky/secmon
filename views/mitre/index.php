<?php
use Yii;

$mitreModuleAddress = Yii::$app->params['mitreModuleAddress'];

$this->params['title'] = 'Mitre module';
?>
<iframe src='<?= $mitreModuleAddress ?>'  width='100%' height='90%' style="border:none"></iframe>


