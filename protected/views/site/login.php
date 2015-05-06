<div id="window" caption="Login">
<div class="form">
<?php 
	$form=$this->beginWidget('CActiveForm', array(
		'id'=>'login-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); 
?>
    <p>กรุณากรอกข้อมูลต่อไปนี้ เพื่อการเข้าสู่ระบบ:</p>
	<p>โปรดระบุ <font style="color:red">*</font> ให้ครบถ้วน</p>
<table>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'username', array('label' => 'ชื่อผู้ใช้งาน')); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'username', array('id' => 'edit2','placeholder' => 'Enter Username')); ?>
			<?php echo $form->error($model,'username'); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $form->labelEx($model,'password', array('label' => 'รหัสผ่าน')); ?>
		</td>
		<td>
			<?php echo $form->passwordField($model,'password', array('id' => 'edit1','placeholder' => 'Password')); ?>
			<?php echo $form->error($model,'password'); ?>
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<?php echo CHtml::submitButton('Login', array('id' => 'submit')); ?>
		</td>
	</tr>
</table>

<?php 
	$this->endWidget(); 
?>
</div>
</div>
<script>
    $(document).ready(function () {
    	var theme = "ui-redmond";
        $('#window').jqxWindow({ theme: theme, width: 400, height: 250, isModal: true, modalOpacity: 0 });
        $("#edit2").jqxInput({ height: 23, width: 270, theme: theme });
        $("#edit1").jqxInput({ height: 23, width: 270, theme: theme });
        $("#submit").jqxButton({ height: 23, width: 270,theme: theme });
		$('#edit2').keyup(function(){
		    this.value = this.value.toUpperCase();
		});
    });
</script>
