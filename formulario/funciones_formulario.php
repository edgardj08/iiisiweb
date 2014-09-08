<!-- 
Evalua la seleccion del Radio Button del archivo form_busquedageneral.php
y muestra el formulario adecuado, ocultando los demas
-->

<script type="text/javascript">
    function formulario_busqueda() {
        switch (document.frmBusqueda.buscar.value) {
            case "1":
                document.getElementById('div_proyecto').style.display = 'block';
                document.getElementById('div_programa').style.display = 'none';
                document.getElementById('div_publicacion').style.display = 'none';
                document.getElementById('div_usuario').style.display = 'none';
                break;
            case "2":
                document.getElementById('div_proyecto').style.display = 'none';
                document.getElementById('div_programa').style.display = 'block';
                document.getElementById('div_publicacion').style.display = 'none';
                document.getElementById('div_usuario').style.display = 'none';
                break;

            case "3":
                document.getElementById('div_proyecto').style.display = 'none';
                document.getElementById('div_programa').style.display = 'none';
                document.getElementById('div_publicacion').style.display = 'block';
                document.getElementById('div_usuario').style.display = 'none';
                break;

            case "4":
                document.getElementById('div_proyecto').style.display = 'none';
                document.getElementById('div_programa').style.display = 'none';
                document.getElementById('div_publicacion').style.display = 'none';
                document.getElementById('div_usuario').style.display = 'block';
                break;
            default:
                break;

        }
    }

</script>
