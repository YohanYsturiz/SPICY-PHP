create table foo(
id serial primary key not null,
nombre varchar(100),
descripcion varchar(500),
archivo_bytea bytea,
archivo_oid oid,
mime varchar(100),
size float
);