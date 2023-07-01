<?php include "./controller/userController.php"; ?>

<div class="table__container">
    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cedula</th>
        </tr>
        <?php
        $users = getUsers();
        foreach ($users as $user) {
            ?>
            <tr>
                <td>
                    <?php echo $user->getid(); ?>
                </td>
                <td>
                    <?php echo $user->getname(); ?>
                </td>
                <td>
                    <?php echo $user->getlastName(); ?>
                </td>
                <td>
                    <?php echo $user->getidNumber(); ?>
                </td>
            </tr>
        <?php } ?>

    </table>

</div>