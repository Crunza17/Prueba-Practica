CREATE DATABASE prueba;
USE prueba;

CREATE TABLE PRODUCTOS
(
	ID BIGINT PRIMARY KEY NOT NULL,
	NOMBRE_PRODUCTO VARCHAR(20) NOT NULL,
	REFERENCIA VARCHAR(30) NOT NULL,
	PRECIO INT NOT NULL,
    PESO INT NOT NULL,
    CATEGORIA VARCHAR(20) NOT NULL,
    STOCK INT NOT NULL,
    FECHA_CREACION DATE NOT NULL,
    ULTIMA_VENTA DATETIME
);
