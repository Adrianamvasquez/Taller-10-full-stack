<?php include "./controller/calculation.php"; ?>
<form method="post">
    <h2>Calculadora de edad por fecha</h2>
    <div class="form__row">

        <div>
            <label for="name">
                Ingrese su nombre
            </label>
            <input id="name" type="text" name="name" placeholder="Jou">
        </div>
        <div>
            <label for="age">
                Ingrese la fecha de nacimiento
            </label>
            <input id="age" type="date" name="age">
        </div>
    </div>
    <button>Enviar</button>
</form>