-- Active: 1698793341748@@127.0.0.1@3306@pasteles
-- Base de Datos de Pasteles :)
-- Avilés Monfil Daniel (21TE0390)

CREATE DATABASE pasteles;
USE pasteles;

-- Crear la tabla Cliente (relación 1:1)
CREATE TABLE Cliente (
    ClienteID INT PRIMARY KEY,
    Nombre VARCHAR(50),
    Direccion VARCHAR(100),
    Telefono VARCHAR(15)
);

-- Crear la tabla Pedido (relación 1:M con Cliente)
CREATE TABLE Pedido (
    PedidoID INT PRIMARY KEY,
    ClienteID INT,
    FechaPedido DATE,
    FOREIGN KEY (ClienteID) REFERENCES Cliente(ClienteID)
);

-- Crear la tabla Ingrediente
CREATE TABLE Ingrediente (
    IngredienteID INT PRIMARY KEY,
    Nombre VARCHAR(50),
    Descripcion VARCHAR(200)
);

-- Crear la tabla Pastel (relación M:M con Ingrediente a través de la tabla PastelIngrediente)
CREATE TABLE Pastel (
    PastelID INT PRIMARY KEY,
    Nombre VARCHAR(50),
    Precio DECIMAL(10, 2)
);

-- Crear la tabla PastelIngrediente para la relación M:M entre Pastel e Ingrediente
CREATE TABLE PastelIngrediente (
    PastelID INT,
    IngredienteID INT,
    Cantidad INT,
    PRIMARY KEY (PastelID, IngredienteID),
    FOREIGN KEY (PastelID) REFERENCES Pastel(PastelID),
    FOREIGN KEY (IngredienteID) REFERENCES Ingrediente(IngredienteID)
);

-- Insertar datos de ejemplo en la tabla Cliente
INSERT INTO Cliente (ClienteID, Nombre, Direccion, Telefono) VALUES
    (1, 'Cliente1', 'Calle A, Ciudad', '123-456-7890'),
    (2, 'Cliente2', 'Calle B, Ciudad', '987-654-3210'),
    (3, 'Cliente3', 'Calle C, Municipio', '387-654-3210'),
    (4, 'Cliente4', 'Calle A, Colonia', '833-654-3210'),
    (5, 'Cliente5', 'Calle A, Ciudad', '177-654-3210'),
    (6, 'Cliente6', 'Calle B, Municipio', '787-654-3210'),
    (7, 'Cliente7', 'Calle C, Colonia', '037-654-3210'),
    (8, 'Cliente8', 'Calle B, Ciudad', '621-654-3210'),
    (9, 'Cliente9', 'Calle C, Colonia', '407-654-3210'),
    (10, 'ClienteA', 'Calle B, Ciudad', '000-654-3210');
    

-- Insertar datos de ejemplo en la tabla Pedido
INSERT INTO Pedido (PedidoID, ClienteID, FechaPedido) VALUES
    (101, 1, '2023-01-15'),
    (102, 2, '2023-02-20'),
    (103, 3, '2023-02-06'),
    (104, 4, '2023-05-20'),
    (105, 5, '2023-09-20'),
    (106, 6, '2023-11-10'),
    (107, 7, '2023-10-27'),
    (108, 8, '2023-12-31'),
    (109, 9, '2023-12-20'),
    (110, 10, '2023-06-20');
    

-- Insertar datos de ejemplo en la tabla Ingrediente
INSERT INTO Ingrediente (IngredienteID, Nombre, Descripcion) VALUES
    (1001, 'Harina', 'Harina para repostería'),
    (1002, 'Azúcar', 'Azúcar refinada'),
    (1003, 'Leche', 'Lácteo deslactosado'),
    (1004, 'Crema', 'Media crema de caja lala'),
    (1005, 'Fresas', 'Fruta para pastel de fresas'),
    (1006, 'Cajeta', 'Dulce para decorar'),
    (1007, 'Carnation', 'Leche evaporada'),
    (1008, 'Pasas', 'Pasitas para decorar'),
    (1009, 'Almendras', 'Almendras que sirven para endulzar'),
    (1010, 'Cerezas', 'El toque final del pastel');
    

-- Insertar datos de ejemplo en la tabla Pastel
INSERT INTO Pastel (PastelID, Nombre, Precio) VALUES
    (501, 'Pastel de Chocolate', 29.99),
    (502, 'Pastel de Fresa', 24.99),
    (503, 'Pastel de Almendra', 30.99),
    (504, 'Pastel de Coco', 55.50),
    (505, 'Pastel de Oreo', 48.39),
    (506, 'Pastel de Cajeta', 37.99),
    (507, 'Pastel de Tres Leches', 46.99),
    (508, 'Pastel de Gansito', 60.00),
    (509, 'Pastel de Limón', 28.37),
    (510, 'Pastel de Piñon', 29.49);

-- Insertar datos de ejemplo en la tabla PastelIngrediente
INSERT INTO PastelIngrediente (PastelID, IngredienteID, Cantidad) VALUES
    (501, 1001, 3),
    (501, 1002, 2),
    (502, 1001, 2),
    (502, 1002, 1),
	(503, 1009, 8),
	(503, 1007, 2),
	(504, 1007, 4),
    (504, 1002, 3),
    (505, 1003, 2),
    (505, 1004, 2),
	(506, 1006, 1),
    (506, 1001, 2),
    (507, 1003, 3),
    (507, 1007, 3),
    (508, 1001, 2),
    (508, 1003, 2),
    (509, 1004, 2),
    (509, 1001, 2),
    (510, 1009, 6),
    (510, 1003, 3);

-- Consulta de todos los pasteles
SELECT * FROM Pastel;

-- Consulta de pasteles con sus ingredientes
SELECT p.Nombre AS Pastel, i.Nombre AS Ingrediente, pi.Cantidad
FROM Pastel p
JOIN PastelIngrediente pi ON p.PastelID = pi.PastelID
JOIN Ingrediente i ON pi.IngredienteID = i.IngredienteID;


-- Consulta para encontrar pasteles que contienen un ingrediente específico
SELECT p.Nombre AS Pastel
FROM Pastel p
JOIN PastelIngrediente pi ON p.PastelID = pi.PastelID
JOIN Ingrediente i ON pi.IngredienteID = i.IngredienteID
WHERE i.Nombre = 'Carnation';

-- Consulta para recuperar los pasteles ordenados por precio de manera descendente
SELECT * FROM Pastel
ORDER BY Precio DESC;

-- Consulta para obtener la cantidad total de cada ingrediente utilizado en todos los pasteles
SELECT i.Nombre AS Ingrediente, SUM(pi.Cantidad) AS CantidadTotal
FROM Ingrediente i
JOIN PastelIngrediente pi ON i.IngredienteID = pi.IngredienteID
GROUP BY i.IngredienteID, i.Nombre;
