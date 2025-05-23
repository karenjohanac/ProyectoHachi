FROM php:8.2-cli

# Copia el contenido del proyecto al contenedor
COPY . /app
WORKDIR /app

# Expone el puerto
EXPOSE 10000

# Comando para iniciar el servidor PHP embebido
CMD ["php", "-S", "0.0.0.0:10000"]
