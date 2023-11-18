<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!-- Agrega enlaces a los estilos de Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</head>
<body class="bg-gray-100 mx-auto">
    <!-- Navbar -->
    <nav class="Navbar mx-auto" style="width: 1280px; height: 77px; position: relative; background: rgba(64, 64, 64, 0); border-radius: 2px; overflow: hidden; border: 1px rgba(255, 255, 255, 0.10) solid">
        <div class="Icon Person" style="width: 59px; height: 58px; left: 1201px; top: 12px; position: absolute">
            <div class="Vector" style="width: 44.25px; height: 48.33px; left: 7.38px; top: 4.83px; position: absolute; background: #FFFF;">
                <!-- Cambié background a background-image para cargar la imagen -->
                <img src="{{ asset('images/iconperson.png') }}" style="width: 100%; height: 100%;" alt="Icono de Persona">
            </div>
        </div>
        <div class="ContainerLogo" style="width: 265px; height: 71px; left: 0px; top: 6px; position: absolute"></div>
        <img class="Logo" style="width: 240px; height: 131px; left: -20px; top: -34px; position: absolute; border-radius: 19px" src="{{ asset('images/logo.png') }}" alt="Logo de la aplicación">
    </nav>



    <!-- --footer -->
    <footer class="Footer min-h-screen mx-auto" style="width: 1280px; height: 254px; position: relative; background: rgba(64, 64, 64, 0); border-radius: 2px; overflow: hidden; border: 1px rgba(255, 255, 255, 0.10) solid">
        <div class="Rectangle2" style="width: 1280px; height: 253px; left: 0px; top: 1px; position: absolute; background: #484BB4"></div>
        <div class="Contacto" style="left: 30px; top: 12px; position: absolute; color: #FFD14C; font-size: 20px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Contacto</div>
        <div class="Servicios" style="left: 237px; top: 12px; position: absolute; color: #FFD14C; font-size: 20px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Servicios</div>
        <div class="Cuenta" style="left: 458px; top: 12px; position: absolute; color: #FFD14C; font-size: 20px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Cuenta</div>
        <div class="PoliticasDePrivacidad" style="left: 677px; top: 105px; position: absolute; color: #CFCFCF; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Politicas de privacidad</div>
        <img class="LogoWhite" style="width: 291px; height: 109px; left: 962px; top: 33px; position: absolute" src="{{ asset('images/logo.png') }}" />
        <div class="IniciarSesiN" style="left: 458px; top: 49px; position: absolute; color: #CFCFCF; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Iniciar sesión</div>
        <div class="TerminosYCondiciones" style="left: 676px; top: 49px; position: absolute; color: #CFCFCF; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Terminos y condiciones</div>
        <div class="MisAsignaturas" style="left: 237px; top: 105px; position: absolute; color: #CFCFCF; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Mis asignaturas</div>
        <div class="Inicio" style="left: 237px; top: 49px; position: absolute; color: #CFCFCF; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Inicio</div>
        <div class="Whatsapp" style="left: 30px; top: 49px; position: absolute; color: #CFCFCF; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Whatsapp</div>
        <div class="MiPerfil" style="left: 237px; top: 77px; position: absolute; color: #CFCFCF; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Mi perfil</div>
        <div class="Contrato" style="left: 677px; top: 77px; position: absolute; color: #CFCFCF; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Contrato</div>
        <div class="CopyrightAppbook2023" style="left: 559px; top: 233px; position: absolute; color: #CFCFCF; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">© copyright | Appbook 2023</div>
        <div class="CambioDeContraseA" style="left: 458px; top: 77px; position: absolute; color: #CFCFCF; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Cambio de contraseña</div>
        <div class="CambioDeCorreo" style="left: 458px; top: 105px; position: absolute; color: #CFCFCF; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Cambio de correo</div>
        <div class="MisProfesores" style="left: 237px; top: 133px; position: absolute; color: #CFCFCF; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Mis profesores</div>
        <div class="Correo" style="left: 30px; top: 77px; position: absolute; color: #CFCFCF; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Correo</div>
        <div class="Telefono" style="left: 30px; top: 105px; position: absolute; color: #CFCFCF; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Telefono</div>
        <div class="PedirCambioDeInformaciN" style="left: 458px; top: 133px; position: absolute; color: #CFCFCF; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Pedir cambio de información</div>
        <div class="Legalidades" style="left: 676px; top: 12px; position: absolute; color: #FFD14C; font-size: 20px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Legalidades</div>
    </footer>
</body>
</html>