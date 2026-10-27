CREATE DATABASE IF NOT EXISTS proyecto_grupo CHARACTER SET utf8mb4;
USE proyecto_grupo;

CREATE TABLE integrantes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  carrera VARCHAR(100),
  descripcion TEXT
);

CREATE TABLE mensajes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  correo VARCHAR(100) NOT NULL,
  mensaje TEXT NOT NULL,
  creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO integrantes (nombre, carrera, descripcion) VALUES
('nelsi delgado ', 'APSTI', 'Coordina el proyecto y diseñó la página de inicio y la base de datos. Le gusta la programación web.'),
('jayro vera ', 'APSTI', 'Se encarga de la sección Nosotros y de redactar la misión y visión del grupo.'),
('katy butista', 'APSTI', 'Desarrolló el formulario de contacto y su validación.');