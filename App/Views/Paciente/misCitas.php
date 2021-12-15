<header>
		<?php require_once('Views/Layouts/menuPaciente.php'); ?>
</header>
<div style="height:95%; width:100%" >
<div style="display: table; width:100%;  height:15%;" >
            <div  style="display: table-cell; background: #fff; width:100%; height:100%; color: #ffffff; text-align:center; vertical-align:middle">


    <div class="col">
    <h1>Mis Citas</h1>
    </div>


</div>
</div>
<div style="padding:2%">
    <table class="table table-hover" >
    <thead>
        <tr>
        <th >ID</th>
        <th >Fecha</th>
        <th >Médico</th>
        <th >Hora</th>
        <th ></th>
        <th ></th>
        </tr>
    </thead>
    <tbody>
    
    
    <?php 
    foreach($dataCitasP as $dataCita){
        $medicoNombre = $cita->obtenerNombreMedico($dataCita["id_medico"]);
        $medicoApellido = $cita->obtenerApellidoMedico($dataCita["id_medico"]);
        $medico = $medicoNombre.' '.$medicoApellido;
        $hora = $cita->obtenerNombreHora($dataCita["id_horario"]);
        ?>

        <tr>
        <td><?php echo $dataCita['id']?></td>
        <th><?php echo $dataCita["fecha"] ?></th>
        <th><?php echo $medico ?></th>
        <td><?php echo $hora ?></td>
    
        <td><a href="?controller=Cita&&action=datosReprogramar&&id=<?php echo $dataCita['id'];?>" class="btn btn-primary btn-sm">Reprogramar</a></td>
        <td><a href="?controller=Cita&&action=cancelar&&id=<?php echo $dataCita['id'];?>" class="btn btn-danger btn-sm">Eliminar</a></td>
        </tr>
    
    <?php
    }
    ?>

    </tbody>
    </table>
</div>
</div>
<?php require_once('Views/Layouts/footer.php');?>