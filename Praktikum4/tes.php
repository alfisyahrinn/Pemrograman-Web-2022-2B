<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <label for="inputState" class="form-label">tanggal</label>
  <select id="inputState" name="select" class="form-select">
    <?php for ($i = 1; $i <= 31; $i++) { ?>
      <option value="<?= $i; ?>"><?= $i; ?></option>
    <?php } ?>
  </select>
</body>

</html>