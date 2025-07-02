<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Nuevo mensaje de contacto</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; margin:0; padding:0;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f9f9f9; padding: 20px;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); padding: 30px;">
                    <tr>
                        <td style="text-align: center; padding-bottom: 20px;">
                            <h2 style="color: #facc15;">Nuevo mensaje de contacto recibido</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><strong>Nombre:</strong> {{ $datos['nombre'] }}</p>
                            <p><strong>Correo electrónico:</strong> {{ $datos['email'] }}</p>
                            <p><strong>Tipo de mensaje:</strong> {{ ucfirst($datos['tipo']) }}</p>
                            <p><strong>Mensaje:</strong></p>
                            <p style="background-color: #f3f4f6; padding: 15px; border-radius: 5px; white-space: pre-wrap;">{{ $datos['mensaje'] }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center; color: #999999; font-size: 12px; padding-top: 30px;">
                            <p>Este correo fue enviado desde la página de contacto de tu sitio web.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif
</body>
</html>
