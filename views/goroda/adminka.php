<?php
/* @var $this yii\web\View */
/* @var $GorodaList() models\Goroda */

?>
<h1>goroda/adminka</h1>

<?php //foreach ($gorodaList as $goroda): ?>
	<?php echo $goroda -> first_name . ' ' . $goroda -> last_name; ?>

<hr>
<?php //endforeach;	?>
