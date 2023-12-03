create database procalm;
use procalm;

create table articulos(
id int not null auto_increment primary key,
nombre_articulo varchar (150) not null unique,
categoria int not null,
descripcion text null,
status tinyint default 1,
stock int default 0,
created_at datetime,
updated_at datetime null,
deleted_at datetime null
);

insert into articulos (nombre_articulo, categoria, descripcion, created_at)
values ('Shampoo', 1, 'Botella de shampoo de 1LT', '2023/11/05'),
('Cepillo', 1, 'Cepillo dental con cerdas extra finas', '2023/11/06'),
('Kola-Loka', 2, 'Botella de 100 gramos de pegamento industrial', '2023/11/06'),
('Pasta Dental', 1, 'Tubo de pasta dental con 300 gramos', '2023/11/06'),
('Rastrillo', 1, 'Artículo para eliminar pelusas', '2023/11/06'),
('Jabón', 3, 'Jabón para ropa en polvo marca Roma', '2023/11/06'),
('Papel Higiénico', 1, 'Paquete de 4 rollos de papel Charmin', '2023/11/06'),
('Pañuelos', 1, 'Paquete con 20 pañuelos Kotex', '2023/11/06'),
('Mostaza', 4, 'Frasco de 300 gramos de mostaza McKornick', '2023/11/06'),
('Desodorante', 1, 'Frasco con 250 gramos de Axe Chocolate', '2023/11/07');

-- Actualizar artículos con id 1,5 y 10 para tener stock = 10
start transaction;
update articulos set stock = 10 where id= 1;
update articulos set stock = 10 where id= 5;
update articulos set stock = 10 where id= 10;
commit;

-- Actualizar nombre del articulo con id 1
start transaction;
update articulos set nombre_articulo = 'Savile' where id= 1;
commit;

-- Actualizar artículos con id 1,5 y 10 para tener stock = 10
start transaction;
update articulos set stock = 0 where id= 9;
commit;

-- PROCEDIMIENTO ALMACENADO

DELIMITER //
create procedure sp_ListarArticulos()
begin
select * from articulos;
end;
//
DELIMITER ;

-- Ejecutar o invocar el procedimiento almacenado
call sp_ListarArticulos();

-- Eliminar procedimiento almacenado
drop procedure sp_ListarArticulos;

-- Procedimiento almacenado para listar articulos con stock = 10
DELIMITER //
create procedure sp_ListarArticulosConStock10()
begin
select * from articulos where stock =10;
end;
//
DELIMITER ;

-- Modificar el nombre del primer artículo
DELIMITER //
create procedure sp_ModificarNombreArticulo()
begin
select * from articulos where id=1;
end;
//
DELIMITER ;

-- Invocación del procedimiento almacenado
call sp_ModificarNombreArticulo()

-- Eliminación de artículos
DELIMITER //
create procedure sp_EliminarArticulosConStock0()
begin
delete from articulos where stock=0;
end;
//
DELIMITER ;

-- Invocación del procedimiento almacenado
call sp_EliminarArticulosConStock0()

-- Inserción de artículos
DELIMITER //
create procedure sp_InsertArticulo(
in idArticulo int,
in articulo varchar(150),
in idCategoria int,
in fechaCreacion datetime
)
begin
insert into articulos (id, nombre_articulo, categoria, created_at)
values (idArticulo, articulo, idCategoria, fechaCreacion);
end;
//
DELIMITER ;

call sp_InsertArticulo(11, 'Espejo', 5, '2023/11/06')