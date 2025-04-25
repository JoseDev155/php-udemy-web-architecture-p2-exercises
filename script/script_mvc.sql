-- Create database mvc
CREATE DATABASE mvc;
USE mvc;

-- Create table libros
CREATE TABLE libros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    autor VARCHAR(100) NOT NULL,
    editorial VARCHAR(100) NOT NULL,
    url VARCHAR(100) NOT NULL
);

-- Proof data
-- Amazon books
-- url in format <a rel="nofollow" href="" />
INSERT INTO libros(titulo, autor, editorial, url) VALUES
('El dinero es mi amigo', 'Phil Laut', 'Grupo Editorial Pomo', '<a rel="nofollow" href="https://www.amazon.es/dp/B003X2W4QK" />'),
('Saber Gastar', 'Gianco Abundiz Cabrero', 'Aguilar', '<a rel="nofollow" href="https://www.amazon.es/dp/B003X2W4QK" />'),
('Tu primer mill&oacute;n', 'Pedro Osvaldo Ramirez', 'Porrua', '<a rel="nofollow" href="https://www.amazon.es/dp/B003X2W4QK" />'),
('Los diez secretos de la riqueza abundante', 'Adam J. Jackson', 'Sirio', '<a rel="nofollow" href="https://www.amazon.es/dp/B003X2W4QK" />'),
('El millonario instant&aacute;neo', 'Mark Fisher', 'Empresa Activa', '<a rel="nofollow" href="https://www.amazon.es/dp/B003X2W4QK" />'),
('Piense y h&aacute;gase rico', 'Napoleon Hill', 'Amazon', '<a rel="nofollow" href="https://www.amazon.es/dp/B003X2W4QK" />'),
('El hombre m&aacute;s rico de Babilonia', 'George Samuel Clason', 'Obelisco', '<a rel="nofollow" href="https://www.amazon.es/dp/B003X2W4QK" />'),
('Padre rico, padre pobre', 'Robert Kiyosaki', 'Aguilar', '<a rel="nofollow" href="https://www.amazon.es/dp/B003X2W4QK" />');