<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>

</head>
 
<body>
    <!--$ERROR MUESTRA LOS ERRORES QUE PUEDAN HABER AL SUBIR LA IMAGEN-->
    <?=@$error?>
<div id="formulario_imagenes">
    <span><?php echo validation_errors(); ?></span>
<?=form_open_multipart(base_url()."index.php/upload/do_upload")?>
    <label>Título:</label><input type="text" name="titulo" />
    <label>Imagen 1:</label><input type="file" name="userfile" /><br /><br />
    <input type="submit" value="Subir imágenes" />
<?=form_close()?>
</div>
</body>
</html>