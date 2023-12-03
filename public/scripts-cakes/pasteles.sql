----- Base de Datos de Pasteles :) / Avilés Monfil Daniel (21TE0390) -----
CREATE DATABASE pasteles;
USE pasteles;

----- CREACIÓN DE TABLAS -----
CREATE TABLE Cliente (
    ClienteID INT PRIMARY KEY,
    Nombre VARCHAR(50),
    Direccion VARCHAR(100),
    Telefono VARCHAR(15)
);

CREATE TABLE Pedido (
    PedidoID INT PRIMARY KEY,
    ClienteID INT,
    FechaPedido DATE,
    FOREIGN KEY (ClienteID) REFERENCES Cliente(ClienteID)
);

CREATE TABLE Ingrediente (
    IngredienteID INT PRIMARY KEY,
    Nombre VARCHAR(50),
    Descripcion VARCHAR(200)
);

CREATE TABLE Pastel (
    PastelID INT PRIMARY KEY,
    Nombre VARCHAR(50),
    Precio DECIMAL(10, 2)
);

CREATE TABLE PastelIngrediente (
    PastelID INT,
    IngredienteID INT,
    Cantidad INT,
    PRIMARY KEY (PastelID, IngredienteID),
    FOREIGN KEY (PastelID) REFERENCES Pastel(PastelID),
    FOREIGN KEY (IngredienteID) REFERENCES Ingrediente(IngredienteID)
);

CREATE TABLE Pastelero (
    PasteleroID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    Nombre VARCHAR (50) NOT NULL,
    Apellido VARCHAR (50) NOT NULL,
    Alias VARCHAR (10) NOT NULL,
    Telefono VARCHAR (10) NOT NULL,
    AñosTrabajados INT NOT NULL
);

CREATE TABLE SucursalesPasteleria (
    SucursalID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    NombrePastelero INT NOT NULL,
    Nombre VARCHAR (50) NOT NULL,
    Direccion VARCHAR (150) NOT NULL,
    NombreRecepcionista VARCHAR (150),
    CONSTRAINT Nombre
    FOREIGN KEY (NombrePastelero) REFERENCES Pastelero(PasteleroID)
);

CREATE TABLE PedidoEspecial (
    PedidoEspecialID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    DescripcionPastel VARCHAR (250),
    SaborPastel VARCHAR (40) NOT NULL,
    FechaYHoraPedido DATETIME NOT NULL,
    Cliente INT,
    AliasPastelero INT,
    FOREIGN KEY (Cliente) REFERENCES Cliente(ClienteID),
    FOREIGN KEY (AliasPastelero) REFERENCES Pastelero(PasteleroID)
);





----- INSERCIONES A TABLAS CREADAS -----
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

INSERT INTO Pastelero (Nombre, Apellido, Alias, Telefono, AñosTrabajados) VALUES
('Eduardo', 'González', 'El mono', '123-456-7890', 3),
('Kevin', 'García', 'Capitán', '113-456-7890', 7),
('Xiao', 'Gómez', 'Chimez', '133-456-7890', 3),
('Lorenzo', 'Flores', 'Lenchillo', '223-456-7890', 1),
('Aguardino', 'Pérez', 'Agujero', '323-456-7890', 8),
('Fernando', 'Gutiérrez', 'El waffle', '423-456-7890', 7),
('Casimiro', 'Castillo', 'El cascas', '523-456-7890', 5),
('Panfilo', 'Badillo', 'Pantuflillo', '623-456-7890', 5),
('Alejandro', 'Romero', 'La reliquia', '723-456-7890', 9),
('Giovanni', 'Jiménez', 'El pato', '823-456-7890', 2);
        
INSERT INTO SucursalesPasteleria (NombrePastelero, Nombre, Direccion, NombreRecepcionista) VALUES
    (1, 'La exquisita cereza', 'Calle Felipe Pescador #7, Teziutlán', 'Enrique'),
    (3, 'La exquisita cereza', 'Calle Nigromante #105, Teziutlán', 'Epiclides'),
    (5, 'El manjar azul', 'Barrio de Ahuateno S/N, Teziutlán', 'Eliasaf'),
    (6, 'La bola de vainilla', 'Entrada de Xoloco #708, Teziutlán', 'Elías'),
    (7, 'La exquisita cereza', 'Centro Número #305, Tlapacoyan', 'Eliud');

INSERT INTO PedidoEspecial (DescripcionPastel, SaborPastel, FechaYHoraPedido, Cliente, AliasPastelero) VALUES
    ('Pastel con trozos de fresa y adornos de flores a los extremos 15*29 con nombre Rosa Itzel y el número 16',
    'Chocolate', '2023/08/20 12:30:00', 1, 3),
    ('Pastel de dos pisos decorado con hojuelas de cereal y adornos de estrella al centro 20*30 con nombre Mario y el número 4',
    'Vainilla', '2023/10/17 15:40:00', 3, 1),
    ('Pastel con dibujo de angry birds del pajarito rojo con frase "Felicidades Dania" y el número 12 de colores azul y blanco',
    'Oreo', '2023/01/09 11:15:30', 2, 5);




----- CONSULTAS -----
-- Consulta de pasteles
SELECT * FROM Pastel;

-- Consulta de pasteles con sus ingredientes
SELECT p.Nombre AS Pastel, i.Nombre AS Ingrediente, pi.Cantidad
FROM Pastel p
JOIN PastelIngrediente pi ON p.PastelID = pi.PastelID
JOIN Ingrediente i ON pi.IngredienteID = i.IngredienteID;

-- Consulta de pasteles que contienen el ingrediente de Carnation
SELECT p.Nombre AS Pastel
FROM Pastel p
JOIN PastelIngrediente pi ON p.PastelID = pi.PastelID
JOIN Ingrediente i ON pi.IngredienteID = i.IngredienteID
WHERE i.Nombre = 'Carnation';

-- Consulta de pasteles ordenados por precio descendente
SELECT * FROM Pastel
ORDER BY Precio DESC;

-- Consulta para obtener la cantidad total de cada ingrediente utilizado en todos los pasteles
SELECT i.Nombre AS Ingrediente, SUM(pi.Cantidad) AS CantidadTotal
FROM Ingrediente i
JOIN PastelIngrediente pi ON i.IngredienteID = pi.IngredienteID
GROUP BY i.IngredienteID, i.Nombre;





----- TRANSACCIONES DE PASTELES -----
-- Cambios de datos del primer cliente o Cliente con id= 1
start transaction;
update Cliente set Nombre = 'Alberto' where ClienteID= 1;
update Cliente set Direccion = 'Calle Principal, Puebla' where ClienteID= 1;
update Cliente set Telefono = '231-100-2478' where ClienteID= 1;
commit;

-- Cambios de datos del primer cliente o Cliente con id= 2
start transaction;
update Cliente set Nombre = 'Roberto' where ClienteID= 2;
update Cliente set Direccion = 'Calle de las Flores, Michoacán' where ClienteID= 2;
update Cliente set Telefono = '231-103-4732' where ClienteID= 2;
commit;

-- Cambios de datos del primer cliente o Cliente con id= 3
start transaction;
update Cliente set Nombre = 'Ernesto' where ClienteID= 3;
update Cliente set Direccion = 'Calle Cerezos, Colima' where ClienteID= 3;
update Cliente set Telefono = '231-297-4201' where ClienteID= 3;
commit;

-- Cambios de datos del primer cliente o Cliente con id= 4
start transaction;
update Cliente set Nombre = 'Heriberto' where ClienteID= 4;
update Cliente set Direccion = 'Callejón de Tavira, Monterrey' where ClienteID= 4;
update Cliente set Telefono = '231-962-9716' where ClienteID= 4;
commit;

-- Cambios de datos del primer cliente o Cliente con id= 5
start transaction;
update Cliente set Nombre = 'Adolfo' where ClienteID= 5;
update Cliente set Direccion = 'Calle Ñandu, Veracruz' where ClienteID= 5;
update Cliente set Telefono = '231-371-2814' where ClienteID= 5;
commit;

-- Actualizar precios de los primeros 3 pasteles de su precio actual más un 30%, 50% y 15% respectivamente
start transaction;
update Pastel set precio = (precio * 1.3) where PastelID= 501;
update Pastel set precio = (precio * 1.5) where PastelID= 502;
update Pastel set precio = (precio * 1.15) where PastelID= 503;
commit;

-- Aplicar descuentos a los ultimos 3 pasteles de su precio actual un 20%, 10% y 25% respectivamente
start transaction;
update Pastel set precio = (precio - (precio * 0.20)) where PastelID= 508;
update Pastel set precio = (precio - (precio * 0.10)) where PastelID= 509;
update Pastel set precio = (precio - (precio * 0.25)) where PastelID= 510;
commit;

-- Modificar descripción de los 3 primeros ingredientes y agregar 3 ingredientes más a la tabla
start transaction;
update Ingrediente set descripcion = 'Polvo para que la masa del pastel no se pegue' where IngredienteID= 1001;
update Ingrediente set descripcion = 'Azúcar mascabada recomendada para el endulzamiento del pan' where IngredienteID= 1002;
update Ingrediente set descripcion = 'Marca Lala deslactosada, verificar caducidad' where IngredienteID= 1003;
insert into Ingrediente(IngredienteID, Nombre, Descripcion)
values (1, 'Cacao', 'Cacao molido para darle sabor al merengue');
insert into Ingrediente(IngredienteID, Nombre, Descripcion)
values (2, 'Galletas Marias', 'Galletas marca Gamesa para pastel de limón');
insert into Ingrediente(IngredienteID, Nombre, Descripcion)
values (3, 'Galletas Oreo', 'Galletas tipo sandwich sabor chocolate con vainilla para pastel oreo');
commit;





----- VISTAS PASTELES -----
-- Vista del total de pasteles registrados
create view pasteles_totales as
select count(*) as "totalPastelitos" from Pastel;

-- Vista de los nombres de los clientes
create view clientes_pasteles as
select Nombre as "Clientela de Pastelería" from Cliente;

-- Vista de pasteles cuyo nombre termina con una "n"
create view pasteles_con_terminacion_n as
select nombre
from Pastel as p 
where p.Nombre like '%n';

-- Vista de la información de los ingredientes (id, nombre, cantidad y su descripción)
create view info_ingredientes as
select pi.IngredienteID, i.Nombre, pi.Cantidad, i.Descripcion from
PastelIngrediente as pi join Ingrediente as i on
i.IngredienteID = pi.IngredienteID;

-- Vista del pedido de los clientes mostrando su dirección y la fecha de su pedido
create view fecha_pedido_de_cliente as
select p.PedidoID, c.Nombre, c.Direccion, p.FechaPedido from
Cliente as c join Pedido as p on
p.ClienteID = c.ClienteID;



----- PROCESOS ALMACENADOS DE PASTELES -----

-- Procedimiento para listar todos los pasteles
DELIMITER //
create procedure sp_ListarPasteles()
begin
select * from Pastel;
end;
//
DELIMITER ;

-- Ejecutar o invocar el procedimiento almacenado
call sp_ListarPasteles();

-- Eliminar procedimiento almacenado
drop procedure sp_ListarPasteles;

-- Procedimiento almacenado para listar pasteles que tengan algún ingrediente con cantidad 2
DELIMITER //
create procedure sp_ListarPastelesConIngredientesEnCantidadDoble()
begin
select * from PastelIngrediente where Cantidad =2;
end;
//
DELIMITER ;

-- Ejecutar o invocar el procedimiento almacenado
call sp_ListarPastelesConIngredientesEnCantidadDoble();

-- Listar a los pasteleros que solamente tienen tres años trabajando
DELIMITER //
create procedure sp_ListarPastelerosCon3AñosDeExperiencia()
begin
select * from Pastelero where AñosTrabajados=3;
end;
//
DELIMITER ;

-- Ejecutar o invocar el procedimiento almacenado
call sp_ListarPastelerosCon3AñosDeExperiencia();

-- Adición de pasteles
DELIMITER //
create procedure sp_AgregarPastel(
in PastelID int,
in Nombre varchar(50),
in Precio decimal (10, 2)
)
begin
insert into Pastel (PastelID, Nombre, Precio)
values (PastelID, Nombre, Precio);
end;
//
DELIMITER ;

-- Adición de pasteleros
DELIMITER //
create procedure sp_AgregarPastelerosp_AgregarPasteleros(
in Nombre varchar(50),
in Apellido varchar(50),
in Alias varchar(10),
in Telefono varchar(10),
in AñosTrabajados int
)
begin
insert into Pastelero (Nombre, Apellido, Alias, Telefono, AñosTrabajados)
values (Nombre, Apellido, Alias, Telefono, AñosTrabajados);
end;
//
DELIMITER ;