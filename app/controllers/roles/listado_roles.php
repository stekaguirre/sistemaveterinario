
<!-- BUSCAR TODOS LOS ROLES -->
<?php
    
    $sql_roles = "SELECT * FROM roles";
    $query_roles = $pdo->prepare($sql_roles);
    $query_roles->execute();
    $roles_datos = $query_roles->fetchAll(PDO::FETCH_ASSOC);

?>
<!-- ////BUSCAR TODOS LOS ROLES -->