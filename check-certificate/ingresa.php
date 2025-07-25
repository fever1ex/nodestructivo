<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../images/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoDestructivo</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li class="title"><a href="#servicio">SERVICIO</a></li>
                <li class="title"><a href="#somos">SOMOS</a></li>
                <li><a href="../index.php"><img src="../images/logo-shiny.png" class="logo-nav"></a></li>
                <li class="title"><a href="#contacto">CONTACTO</a></li>
                <li class="title"><a href="../check-certificate/ingresa.php">INGRESA</a></li>
               </ul>
        </nav>
    </header>
    <section class="ingresa">
        <div class="cert-chk">
            <div class="cert-info">
                <h1>Verifica tu certificado:</h1>
                <img src="../images/logo.png" alt="">
            </div>
            <form action="../check-certificate/cert-chk.php" method="POST">
                <input type="text" name="cert-id" placeholder="Introduce el ID" required>
                <button type="submit" name="submit">Validar</button>
            </form>
        </div>
    </section>
    <footer>
        <div class="footer">
            <div class="footer-left">
                <ul>
                    <li>Celular: <a href="tel:5564904919">5564904919</a></li>
                    <li>Telefono: <a href="tel:3296885962">3296885962</a></li>
                    <li>Correo: <a href="mailto:contacto@nodestructivo.com">contacto@nodestructivo.com</a></li>
                </ul>
            </div>
            <div class="footer-center">
                <ul>
                    <li>TikTok: <a href="https://www.tiktok.com/@nodestructivo">@nodestructivo</a></li>
                    <li>Facebook: <a href="https://www.facebook.com/people/No-Destructivo/100063693472334/">No Destructivo</a></li>
                    <li>Instagram: <a href="https://www.instagram.com/nodestructivo_">nodestructivo_</a></li>
                </ul>
            </div>
            <div class="footer-right">
                <ul class="footer-logo">
                    <li><a href="../index.php"><img src="../images/logo.png" alt=""></a></li>
                </ul>
            </div>
        </div>
        <p>&copy; 2025 Nodestructivo&reg; Todos los derechos reservados.</p>
    </footer>
    <!--<script src="/js/script.js"></script>-->
</body>
</html>