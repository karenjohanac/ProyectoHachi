<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Hachi</title>
    <link rel="stylesheet" href="css/estilos.css" />
  </head>
  <body>
    <header>
      <div class="logo-container">
        <img src="img/logo hachi.png" alt="Logo de Hachi" class="logo" />
        <div class="titulo">
          <h1>¡Hola, soy Hachi! 🐾</h1>
          <p>Tu perrito criollo con cara de Schnauzer más tierno del mundo</p>
        </div>
      </div>

      <nav class="nav">
        <ul>
          <li><a href="#sobre-mi">Sobre mí</a></li>
          <li><a href="#galeria">Mis fotos</a></li>
          <li><a href="#juguetes">Juguetes favoritos</a></li>
          <li><a href="#datos-curiosos">Datos curiosos</a></li>
          <li><a href="#contacto">Contacto</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <section id="sobre-mi">
        <h2>Hachi</h2>
        <div class="sobre-mi-content">
          <div class="texto-sobre-mi">
            <p>
              ¡Hola! Me llamo Hackicko, aunque también me dicen Hachi,
              Hachirama, Hachibi, Salchibi y muchos otros apodos más. Soy un
              perrito rescatado del municipio de Cogua, Cundinamarca. Me
              encontraron cuando aún era un cachorro. Desde pequeño he sido muy
              inquieto y juguetón, aunque también un poquito malgeniado.
            </p>

            <p>
              Nací en una camada de siete perritos: tres hembras y cuatro
              machos. A diferencia de mis hermanos, que nacieron rubios, yo nací
              completamente negro. Era el más tímido del grupo, pero fue
              precisamente esa timidez la que me ayudó a encontrar una familia
              amorosa... ¡y a salvarme la vida!
            </p>
          </div>
          <div class="imagen-hachi">
            <img src="img/hachi-bebe.jpg" alt="Hachi cuando era bebé" />
          </div>
        </div>
      </section>

      <section id="galeria">
        <h2>Galería de fotos</h2>
        <div class="gallery">
          <img src="img/hachi.jpg" alt="" />
          <img src="img/hachi2.jpg" alt="" />
          <img src="img/hachi3.jpg" alt="" />
        </div>
      </section>

      <section id="juguetes">
        <h2>Juguetes favoritos</h2>
        <ul>
          <li>🎾 Pelota de tenis</li>
          <li>🦴 Hueso de goma</li>
          <li>🪢 Cuerda para tirar</li>
        </ul>
      </section>

      <section id="datos-curiosos">
        <h2>Datos curiosos</h2>
        <p>🍽️ Me gusta comer de todo, desde croquetas hasta un poquito de fruta y carne.</p>
        <p>💤 Duermo mucho, pero cuando estoy despierto, ¡soy un torbellino de energía!</p>
        <p>🐕 Soy muy cariñoso, aunque a veces parezca malgeniado, en el fondo soy un amor.</p>
      </section>

      <section id="contacto">
        <h2>Contacto</h2>
        
        <form id="formContacto" action="procesar.php" method="POST">
          <input type="text" name="nombre" placeholder="Tu nombre" required />
          <input type="email" name="correo" placeholder="Tu correo" required />
          <textarea name="mensaje" placeholder="Tu mensaje" required></textarea>
          <button type="submit">Enviar</button>
        </form>

        
        
      </section>
    </main>
    <script src="js/script.js"></script> <!-- Asegúrate de que esté al final -->
    
  </body>
</html>

