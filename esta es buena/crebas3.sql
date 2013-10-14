/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     14/10/2013 14:31:22                          */
/*==============================================================*/


drop table if exists categorias;

drop table if exists categorias_productos;

drop table if exists fotos;

drop table if exists productos;

drop table if exists productos_solicitudes;

drop table if exists solicitudes;

drop table if exists subcategorias;

drop table if exists users;

/*==============================================================*/
/* Table: categorias                                            */
/*==============================================================*/
create table categorias
(
   id                   int not null auto_increment,
   nombre               text,
   foto                 text,
   primary key (id)
);

/*==============================================================*/
/* Table: categorias_productos                                  */
/*==============================================================*/
create table categorias_productos
(
   producto_id          int not null,
   categoria_id         int not null,
   primary key (producto_id, categoria_id)
);

/*==============================================================*/
/* Table: fotos                                                 */
/*==============================================================*/
create table fotos
(
   id                   int not null auto_increment,
   producto_id          int,
   imagen               text,
   primary key (id)
);

/*==============================================================*/
/* Table: productos                                             */
/*==============================================================*/
create table productos
(
   id                   int not null auto_increment,
   user_id              int not null,
   nombre               text,
   descripcion          text,
   precio               text,
   destacado            bool,
   fecha                date,
   mostrar              bool,
   cantidad             int,
   primary key (id)
);

/*==============================================================*/
/* Table: productos_solicitudes                                 */
/*==============================================================*/
create table productos_solicitudes
(
   solicitude_id        int not null,
   producto_id          int not null,
   primary key (solicitude_id, producto_id)
);

/*==============================================================*/
/* Table: solicitudes                                           */
/*==============================================================*/
create table solicitudes
(
   id                   int not null auto_increment,
   nombre               text,
   apellido             text,
   correo               text,
   telefono             text,
   primary key (id)
);

/*==============================================================*/
/* Table: subcategorias                                         */
/*==============================================================*/
create table subcategorias
(
   id                   int not null auto_increment,
   categoria_id         int not null,
   nombre               text,
   primary key (id)
);

/*==============================================================*/
/* Table: users                                                 */
/*==============================================================*/
create table users
(
   id                   int not null auto_increment,
   usuario              text,
   pass                 text,
   tipo                 text,
   nombre               text,
   apellido             text,
   correo               text,
   primary key (id)
);

alter table categorias_productos add constraint fk_relationship_3 foreign key (producto_id)
      references productos (id) on delete restrict on update restrict;

alter table categorias_productos add constraint fk_relationship_4 foreign key (categoria_id)
      references categorias (id) on delete restrict on update restrict;

alter table fotos add constraint fk_relationship_6 foreign key (producto_id)
      references productos (id) on delete restrict on update restrict;

alter table productos add constraint fk_relationship_5 foreign key (user_id)
      references users (id) on delete restrict on update restrict;

alter table productos_solicitudes add constraint fk_relationship_1 foreign key (solicitude_id)
      references solicitudes (id) on delete restrict on update restrict;

alter table productos_solicitudes add constraint fk_relationship_2 foreign key (producto_id)
      references productos (id) on delete restrict on update restrict;

alter table subcategorias add constraint fk_relationship_7 foreign key (categoria_id)
      references categorias (id) on delete restrict on update restrict;

