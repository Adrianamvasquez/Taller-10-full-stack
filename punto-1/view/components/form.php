<?php include "./controller/calculationControl.php"; ?>
<form method="post">
    <h2>Calculador operacion</h2>
    <div class="form__row">

        <div>
            <label for="first-number">
                Ingrese el primer numero
            </label>
            <input id="first-number" type="text" name="first_number" placeholder="3">
        </div>
        <div>
            <label for="second-number">
                Ingrese el segundo numero
            </label>
            <input id="second-number" type="text" name="second_number" placeholder="2">
        </div>
        <div>
            <label for="operation">
                Escoger la operacion a realizar
            </label>
            <select name="operation_one" id="operation-one">
                <option value="Suma"> Suma</option>
                <option value="Resta"> Resta</option>
                <option value="Multiplicacion"> Multiplicacion</option>
                <option value="Division"> Division </option>

            </select>
        </div>
    </div>
    <button>Calcular</button>
</form>