-- TRANSACCIONES DE PASTELES
use pasteles;
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

-- VISTAS PASTELES
use pasteles;
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