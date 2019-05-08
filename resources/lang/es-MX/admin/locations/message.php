<?php

return array(

    'does_not_exist' => 'Ubicación no existente.',
    'assoc_users'	 => 'Esta ubicación está asignada al menos a un usuario y no puede ser eliminada. ',
    'assoc_assets'	 => 'Esta ubicación se encuentra actualmente asociada con por lo menos un activo y no puede ser eliminada. Por favor, actualice sus activos para no referenciar esta ubicacion e intentelo de nuevo. ',
    'assoc_child_loc'	 => 'Esta ubicacion actualmente esta asociada con al menos una ubicacion hija y no puede ser eliminada. Por favor, actualice sus ubicaciones para no referenciar esta ubicacion e intentelo de nuevo. ',


    'create' => array(
        'error'   => 'Ubicación no creada, Intentalo de nuevo.',
        'success' => 'Ubicación creada.'
    ),

    'update' => array(
        'error'   => 'Ubicación no actualizada, Intentalo de nuevo',
        'success' => 'Ubicación actualizada.'
    ),

    'delete' => array(
        'confirm'   	=> '¿Está seguro que desea eliminar esta ubicación?',
        'error'   => 'Ubicación no eliminada por un problema. Intentalo de nuevo.',
        'success' => 'Ubicación eliminada.'
    )

);
