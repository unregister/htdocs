<<<<<<< HEAD
<?php
	$xcrud = Xcrud::get_instance();
    $xcrud->table('employees');
    $xcrud->join('officeCode','offices','officeCode'); // ... INNER JOIN offices ON employees.officeCode = offices.officeCode ...
    echo $xcrud->render();
=======
<?php
	$xcrud = Xcrud::get_instance();
    $xcrud->table('employees');
    $xcrud->join('officeCode','offices','officeCode'); // ... INNER JOIN offices ON employees.officeCode = offices.officeCode ...
    echo $xcrud->render();
>>>>>>> 5caa52047a26555b6f56377f2cfd640af1be1198
?>