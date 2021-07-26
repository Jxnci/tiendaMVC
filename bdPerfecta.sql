#  Creado con Kata Kuntur - Modelador de Datos
#  Versión: 2.5.4
#  Sitio Web: http://katakuntur.jeanmazuelos.com/
#  Si usted encuentra algún error le agradeceriamos lo reporte en:
#  http://pm.jeanmazuelos.com/katakuntur/issues/new

#  Administrador de Base de Datos: MySQL/MariaDB
#  Diagrama: bdPerfecta
#  Autor: JANCI
#  Fecha y hora: 24/07/2021 14:43:33

# GENERANDO TABLAS
CREATE TABLE `categoria` (
	`idtipoproducto` INTEGER NOT NULL,
	`descripcion` vaRCHAR(45) NOT NULL,
	PRIMARY KEY(`idtipoproducto`)
) ENGINE=INNODB;
CREATE TABLE `producto` (
	`idproducto` INTEGER NOT NULL,
	`nombre` vaRCHAR(45) NOT NULL,
	`precio_venta` DECIMAL NOT NULL,
	`precio_compra` DECIMAL NOT NULL,
	`stock` INTEGER NOT NULL,
	`categoria_idtipoproducto` INTEGER NOT NULL,
	KEY(`categoria_idtipoproducto`),
	`proveedor_idproveedor` INTEGER NOT NULL,
	KEY(`proveedor_idproveedor`),
	PRIMARY KEY(`idproducto`)
) ENGINE=INNODB;
CREATE TABLE `proveedor` (
	`idproveedor` INTEGER NOT NULL,
	`nombre` VARCHAR(45) NOT NULL,
	`ruc` CHAR(11) NOT NULL,
	`dni` CHAR(8) NOT NULL,
	PRIMARY KEY(`idproveedor`)
) ENGINE=INNODB;
CREATE TABLE `venta` (
	`idventa` INTEGER NOT NULL,
	`fecha` DATE NOT NULL,
	`total` DECIMAL NOT NULL,
	`producto_idproducto` INTEGER NOT NULL,
	KEY(`producto_idproducto`),
	`usuario_idusuario` INTEGER NOT NULL,
	KEY(`usuario_idusuario`),
	PRIMARY KEY(`idventa`)
) ENGINE=INNODB;
CREATE TABLE `usuario` (
	`idusuario` INTEGER NOT NULL,
	`usuario` VARCHAR(20) NOT NULL,
	`clave` VARCHAR(20) NOT NULL,
	`direccion` VARCHAR(50) NOT NULL,
	`telefono` VARCHAR(9) NOT NULL,
	`nombres` VARCHAR(80) NOT NULL,
	`tipoUsuario_idtipousuario` INTEGER NOT NULL,
	KEY(`tipoUsuario_idtipousuario`),
	PRIMARY KEY(`idusuario`)
) ENGINE=INNODB;
CREATE TABLE `tipoUsuario` (
	`idtipousuario` INTEGER NOT NULL,
	`descripcion` VaRCHAR(45) NOT NULL,
	PRIMARY KEY(`idtipousuario`)
) ENGINE=INNODB;
CREATE TABLE `cliente` (
	`idcliente` INTEGER NOT NULL,
	`nombres` VARCHAR(80) NOT NULL,
	`direccion` VARCHAR(40) NOT NULL,
	`ruc` ChaR(11) NOT NULL,
	`dni` CHAR(8) NOT NULL,
	PRIMARY KEY(`idcliente`)
) ENGINE=INNODB;
CREATE TABLE `ventaCliente` (
	`cliente_idcliente` INTEGER NOT NULL,
	KEY(`cliente_idcliente`),
	`venta_idventa` INTEGER NOT NULL,
	KEY(`venta_idventa`)
) ENGINE=INNODB;

# GENERANDO RELACIONES
ALTER TABLE `producto` ADD CONSTRAINT `producto_categoria_categoria_idtipoproducto` FOREIGN KEY (`categoria_idtipoproducto`) REFERENCES `categoria`(`idtipoproducto`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `producto` ADD CONSTRAINT `producto_proveedor_proveedor_idproveedor` FOREIGN KEY (`proveedor_idproveedor`) REFERENCES `proveedor`(`idproveedor`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `venta` ADD CONSTRAINT `venta_producto_producto_idproducto` FOREIGN KEY (`producto_idproducto`) REFERENCES `producto`(`idproducto`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `venta` ADD CONSTRAINT `venta_usuario_usuario_idusuario` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario`(`idusuario`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `usuario` ADD CONSTRAINT `usuario_tipousuario_tipousuario_idtipousuario` FOREIGN KEY (`tipoUsuario_idtipousuario`) REFERENCES `tipoUsuario`(`idtipousuario`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `ventaCliente` ADD CONSTRAINT `ventacliente_cliente_cliente_idcliente` FOREIGN KEY (`cliente_idcliente`) REFERENCES `cliente`(`idcliente`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `ventaCliente` ADD CONSTRAINT `ventacliente_venta_venta_idventa` FOREIGN KEY (`venta_idventa`) REFERENCES `venta`(`idventa`) ON DELETE NO ACTION ON UPDATE CASCADE;