<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Elemento - LabWare</title>
</head>
<body>
  <header>
    <h1>LabWare</h1>
    <p>Precisión en cada registro, control en cada paso</p>
  </header>

  <main>
    <form>
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" placeholder="Ingrese el nombre del elemento" required>

      <label for="material">Material:</label>
      <input type="text" id="material" placeholder="Ingrese el material del elemento" required>

      <label for="tipo">Tipo:</label>
      <input type="text" id="tipo" placeholder="Ingrese el tipo de elemento" required>

      <label for="funcion">Función:</label>
      <input type="text" id="funcion" placeholder="Ingrese la función del elemento" required>

      <label for="tamano">Tamaño:</label>
      <input type="text" id="tamano" placeholder="Ingrese el tamaño del elemento" required>

      <label for="espacio">Espacio curricular:</label>
      <input type="text" id="espacio" placeholder="Ingrese el espacio curricular del elemento" required>

      <label for="codigo">Código:</label>
      <input type="text" id="codigo" placeholder="Ingrese el código del elemento" required>

      <p>Por favor, complete los campos requeridos para registrar un nuevo elemento.</p>

      <button type="submit">Guardar</button>
    </form>
  </main>
</body>
</html>
