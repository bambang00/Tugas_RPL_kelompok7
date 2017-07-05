
	<div class="form">
	<?php $form=$this->beginWidget('CActiveForm'); ?>
			<?php echo $form->errorSummary($model); ?>
			
			<div class="row">
				<?php echo $form->labelEx($model, 'panjang'); ?>
				<?php echo $form->textField($model, 'panjang'); ?>
			</div>
			
			<div class="row">
				<?php echo $form->labelEx($model, 'lebar'); ?>
				<?php echo $form->textField($model, 'lebar'); ?>
			</div>
			
			<div class="row">
				<?php echo $form->labelEx($model, 'alas'); ?>
				<?php echo $form->textField($model, 'alas'); ?>
			</div>
			
			<div class="row">
				<?php echo $form->labelEx($model, 'tinggi'); ?>
				<?php echo $form->textField($model, 'tinggi'); ?>
			</div>
			
			<div class="row">
				<?php echo $form->labelEx($model, 'jari'); ?>
				<?php echo $form->textField($model, 'jari'); ?>
			</div>
			
			<div class="row buttons">
				<?php echo CHtml::submitbutton('SUBMIT'); ?>
			</div>
			
	<?php $this->endWidget(); ?>

	</div><!-- form -->