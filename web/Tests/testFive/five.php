<?php
/**
 * Conexion a base de datos.
 */
require __DIR__.'../../modules/db/db.php';

/**
 * Consulta estudiante #1
 */
$squery = $db->query("select count(*) from estudiantes est left join inscripcion ins on est.id_estudiante = ins.id_estudiante left join materia mt on ins.id_materia = mt.id_materia where mt.nombre_materia like '%Historia%' and ins.anyo = 2018 and ins.semestre = 2");
$students = $squery->fetch_array(MYSQLI_BOTH);
print_r($students);

/**
 * Consulta estudiante #2
 */
$squery = $db->query("select count(*) from estudiantes est left join inscripcion ins on est.id_estudiante = ins.id_estudiante and ins.anyo = 2017 and ins.semestre = 1;");
$students = $squery->fetch_array(MYSQLI_BOTH);
print_r($students);

/**
 * Consulta estudiante #2
 */
$squery = $db->query("select mt.nombre_materia, count(*) from inscripcion ins left join materia mt on ins.id_materia = mt.id_materia where ins.anyo = 2018 group by nombre_materia");
$students = $squery->fetch_array(MYSQLI_BOTH);
print_r($students);