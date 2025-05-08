<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar Espacio Curricular - LabWare</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      background-color: #d2ebf8;
    }
    header {
      text-align: center;
      padding: 30px;
    }
    header h1 {
      font-size: 3em;
      color: #0c0c3e;
    }
    header p {
      font-size: 1.2em;
      color: #3d3d3d;
    }
    .form-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 30px;
    }
    form {
      background-color: #b7def4;
      padding: 30px;
      border-radius: 10px;
      width: 80%;
      max-width: 1000px;
    }
    .form-group {
      margin-bottom: 20px;
    }
    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    input[type="text"] {
      width: 100%;
      padding: 10px;
      border: none;
      background-color: #0c0c3e;
      color: white;
      border-radius: 5px;
    }
    .guardar-btn {
      background-color: #1900ae;
      color: white;
      font-size: 1.5em;
      padding: 10px 40px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      display: block;
      margin: 0 auto;
    }
    .mensaje {
      margin-top: 20px;
      text-align: center;
      font-size: 1.2em;
      color: #0c0c3e;
    }
  </style>
</head>
<body>
  <header>
    <h1>LabWare</h1>
    <p>Precisión en cada registro, control en cada paso</p>
  </header>

  <div class="form-container">
    <form id="espacioCurricularForm">
      <div class="form-group">
        <label>Nombre:</label>
        <input type="text" name="nombreEspacio" placeholder="Ingrese el nombre del espacio curricular" required>
      </div>
      <div class="form-group">
        <label>Código:</label>
        <input type="text" name="codigoEspacio" placeholder="Ingrese el código del espacio curricular" required>
      </div>
      <button type="submit" class="guardar-btn">Guardar</button>
    </form>
    <div class="mensaje">
      Por favor, complete los campos requeridos para registrar un nuevo elemento.
    </div>
  </div>
</body>
</html>
