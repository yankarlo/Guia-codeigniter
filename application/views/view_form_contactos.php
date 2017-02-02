<h1>Nuevo contactos</h1>

<br>
<? 
	$input_email = array(
        'name'          => 'con_email',
        'id'            => 'con_email',
        'maxlength'     => '120',
        'size'          => '100'
	);

	$input_nombre = array(
        'name'          => 'con_nombre',
        'id'            => 'con_nombre',
        'maxlength'     => '60',
        'size'          => '50'
	);

	$input_telefono = array(
        'name'          => 'con_telefono',
        'id'            => 'con_telefono',
        'maxlength'     => '20',
        'size'          => '18'
	);

	$input_edad = array(
        'name'          => 'con_edad',
        'id'            => 'con_edad',
        'maxlength'     => '3',
        'size'          => '4'
	);

	$opciones =  array('0' => "Inactivo ",
					   '1' => "Activo" );

?>
<? //echo validation_errors(); ?>
<? echo form_open() ?>
	<? echo form_label('Email','') ?><br>
	<? echo form_input($input_email)?><? echo form_error('con_email') ?> <br></br>

	<? echo form_label('Nombre','') ?><br>
	<? echo form_input($input_nombre)?> <? echo form_error('con_nombre') ?><br></br>

	<? echo form_label('Telefono','') ?><br>
	<? echo form_input($input_telefono)?> <? echo form_error('con_telefono') ?><br></br>

	<? echo form_label('Edad','') ?><br>
	<? echo form_input($input_edad)?> <? echo form_error('con_edad') ?><br></br>

	<? echo form_label('Status','') ?><br>
	<? echo form_dropdown('con_status', $opciones, 'default');?><br><br>

	<? echo form_submit('btn_enviar', 'guardar');?>
<? echo form_close() ?>