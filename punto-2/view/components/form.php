<?php include "./controller/calculationController.php"; ?>
<form method="post">
    <h2>Calculadora de edad</h2>
    <div class="form__row">

        <div>
            <label for="name">
                Ingrese su nombre
            </label>
            <input id="name" type="text" name="name_name" placeholder="Jou">
        </div>
        <div>
            <label for="age">
                Ingrese su edad
            </label>
            <input id="age" type="text" name="age_age" placeholder="25">
        </div>
    </div>
    <button>Calcular</button>
</form>