<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Nuevo mensaje de contacto</title>
</head>
<body style="font-family: 'Segoe UI', Arial, sans-serif; background-color: #f4f6f8; margin:0; padding:0;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f4f6f8; padding: 40px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="background-color: #fff; border-radius: 12px; box-shadow: 0 4px 24px rgba(0,0,0,0.08); padding: 0 0 30px 0; border: 1px solid #e5e7eb;">
                    <!-- Encabezado con logo y color -->
                    <tr>
                        <td style="background: linear-gradient(90deg, #1e293b 0%, #facc15 100%); border-radius: 12px 12px 0 0; padding: 32px 0 24px 0; text-align: center;">
                            <!-- Si tienes un logo, reemplaza la siguiente línea por una imagen -->
                            <!-- <img src="{{ asset('assets/Voyago.png') }}" alt="Voyago" width="80" style="margin-bottom: 10px;"> -->
                            <h1 style="color: #fff; font-size: 2rem; margin: 0; letter-spacing: 1px;">Voyago</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 32px 40px 0 40px; text-align: left;">
                            <h2 style="color: #1e293b; font-size: 1.4rem; margin-bottom: 24px;">Nuevo mensaje de contacto recibido</h2>
                            <p style="margin: 0 0 12px 0;"><strong>Nombre:</strong> <span style="color: #334155;">{{ $datos['nombre'] }}</span></p>
                            <p style="margin: 0 0 12px 0;"><strong>Correo electrónico:</strong> <span style="color: #334155;">{{ $datos['email'] }}</span></p>
                            <p style="margin: 0 0 12px 0;"><strong>Tipo de mensaje:</strong> <span style="color: #facc15;">{{ ucfirst($datos['tipo']) }}</span></p>
                            <p style="margin: 0 0 8px 0;"><strong>Mensaje:</strong></p>
                            <div style="background-color: #f3f4f6; padding: 18px 20px; border-radius: 6px; color: #334155; font-size: 1rem; white-space: pre-wrap; border: 1px solid #e5e7eb; margin-bottom: 24px;">
                                {{ $datos['mensaje'] }}
                            </div>
                        </td>
                    </tr>
                    <!-- Pie de página -->
                    <tr>
                        <td style="padding: 0 40px; text-align: center; color: #64748b; font-size: 13px; padding-top: 16px;">
                            <hr style="border: none; border-top: 1px solid #e5e7eb; margin: 24px 0 16px 0;">
                            <p style="margin: 0;">Este correo fue enviado desde la página de contacto de <strong>Voyago</strong>.</p>
                            <p style="margin: 8px 0 0 0; color: #94a3b8; font-size: 12px;">&copy; {{ date('Y') }} Voyago. Todos los derechos reservados.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
