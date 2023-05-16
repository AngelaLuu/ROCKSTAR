<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Registro de Productos Para ROCKSTAR BOUTIQUE SHOP</title>
  
  <style>
    body {
      font-family: Courier, sans-serif;
      margin: 0;
      padding: 20px;
      background-image: url("img/fondo.jpg");
      
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      max-width: 600px;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    select {
      width: 100%;
      padding: 5px;
    }

    input[type="file"] {
      margin-top: 5px;
    }

    input[type="submit"] {
      padding: 10px 20px;
      background-color: #4494dff1;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      margin-top: 20px;
    }

    table th,
    table td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid rgb(204, 204, 204);
    }

    table th {
      background-color: #4494dff1;
      color: white;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1 style="text-align: center;">Registro de Productos Para ROCKSTAR BOUTIQUE SHOP</h1>
    <a href=catalogoProductos.html>Inicio</a>

    <form action="controlador/controler.registrar.php" method="post">
      <label for="imagen">Imagen:</label>
      <input type="file" id="imagen" name="imagen">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>
      <label for="descripcion">Descripción:</label>
      <input type="text" id="descripcion" name="descripcion" required>
      <label for="precio">Precio:</label>
      <input type="text" id="precio" name="precio" required>
      <label for="cantidad">Cantidad:</label>
      <select id="cantidad" name="cantidad">
        <option value="cantidad">1</option>
        <option value="sueters">2</option>
        <option value="zapatos">3</option>
        <option value="hoddies">4</option>
        <option value="pants">5</option>
        <option value="accesorios">Accesorios</option>
      </select>
      <input type="submit" value="Registrar">
      
    </form>
  </div>
</body>
</html>
