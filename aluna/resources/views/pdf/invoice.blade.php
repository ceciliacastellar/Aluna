
<html lang="en">
  <head>
    <link href="css/pdf.css" type="text/css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Alumnos</title>

  </head>
  <body>

    <main>
      <div id="details" class="clearfix">
        <div id="invoice">
          <h1>Lista de alumnos{{ $invoice }}</h1>
          <div class="date">Fecha: {{ $date }}</div>
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th><i class="service"></i> Numero Documento</th>
            <th><i class="service"></i> Nombres</th>
            <th><i class="service"></i> Apellidos</th>
            <th><i class="service"></i> Edad</th>
            <th><i class="service"></i> Convenio</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $datas)
          <tr>
            <td class="service"> {{ $datas->numero_documento }}</td>
            <td class="service"> {{ $datas->nombres }}</td>
            <td class="service"> {{ $datas->apellidos }}</td>
            <td class="service"> {{ $datas->edad }}</td>
            <td class="service"> {{ $datas->convenio }} </td>
          </tr>
          @endforeach

        </tbody>

      </table>
  </body>
</html>
