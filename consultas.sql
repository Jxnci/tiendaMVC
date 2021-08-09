-- ------  CONSULTAS PARA REPORTES  -------- --

-- por intervalo de fechas /////
SELECT v.idventa,v.fecha,v.total,p.nombre,u.idusuario FROM venta v 
INNER JOIN producto p ON p.idproducto=v.producto_idproducto
INNER JOIN usuario u ON u.idusuario=v.usuario_idusuario
WHERE fecha BETWEEN '2021-08-03' AND '2021-08-05'

-- mostrar mediante se ingrese una letra
SELECT concat(p.nombre,' - S/.',p.precio_venta) FROM producto p WHERE p.nombre like '%$valor%'

-- mostrar nombre y tipo
SELECT v.idventa,v.fecha,v.total,p.nombre,u.usuario FROM venta v 
INNER JOIN producto p ON p.idproducto=v.producto_idproducto
INNER JOIN usuario u ON u.idusuario=v.usuario_idusuario;

-- ventas por usuario
SELECT COUNT(u.idusuario) FROM usuario u 
INNER JOIN venta v ON v.usuario_idusuario=u.idusuario where u.idusuario=$valor;

-- ventas por usuario y fecha
SELECT COUNT(u.idusuario) FROM usuario u 
INNER JOIN venta v ON v.usuario_idusuario=u.idusuario where u.idusuario=4 AND v.fecha='2021-08-04';

--producto mas vendido //////
SELECT p.nombre,COUNT(*) FROM venta INNER JOIN producto p ON venta.producto_idproducto=p.idproducto 
GROUP BY producto_idproducto DESC ORDER BY COUNT(*) DESC;

--usuario que vendi mas /////
SELECT u.usuario,COUNT(*) FROM venta INNER JOIN usuario u ON u.idusuario=venta.usuario_idusuario 
GROUP BY usuario_idusuario DESC ORDER BY COUNT(*) DESC;

--usuario que vendió mas por fecha
SELECT usuario_idusuario,COUNT(*) FROM venta where fecha='2021-08-05'
GROUP BY usuario_idusuario DESC ORDER BY COUNT(*) DESC;


