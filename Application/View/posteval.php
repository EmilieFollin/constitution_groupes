<style>
    form.form-example {
        display: table;
    }

    div.form-example {
        display: table-row;
    }

    label, input {
        display: table-cell;
        margin-bottom: 10px;
    }

    label {
        padding-right: 10px;
    }
</style>

<form action="" method="get" class="form-example">
  <div class="form-example">
    <label for="name">CSS : </label>
    <input type="text" name="CSS" id="CSS" required>
  </div>
  <div class="form-example">
    <label for="email">Php : </label>
    <input type="text" name="php" id="php" required>
  </div>
  <div class="form-example">
    <input type="submit" value="modifier">
  </div>
</form>