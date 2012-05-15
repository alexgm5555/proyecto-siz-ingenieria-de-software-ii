set @OLD_uNIQue_cHecKs=@@uNIQue_cHecKs, uNIQue_cHecKs=0;
set @OLD_FOReIGN_KeY_cHecKs=@@FOReIGN_KeY_cHecKs, FOReIGN_KeY_cHecKs=0;
set @OLD_sQL_MODe=@@sQL_MODe, sQL_MODe='tRaDItIONaL';

cReate scHeMa IF NOt eXIsts `u117694550_zoonosis` DeFauLt cHaRacteR set utf8 cOLLate utf8_general_ci ;
use `u117694550_zoonosis` ;

-- -----------------------------------------------------
-- table `u117694550_zoonosis`.`ciudades`
-- -----------------------------------------------------
DROP taBLe IF eXIsts `u117694550_zoonosis`.`ciudades` ;

cReate  taBLe IF NOt eXIsts `u117694550_zoonosis`.`ciudades` (
  `idciudades` INt NOt NuLL autO_INcReMeNt ,
  `Nombre_ciudad` VaRcHaR(45) NOt NuLL ,
  PRIMaRY KeY (`idciudades`) ,
  uNIQue INDeX `Nombre_ciudad_uNIQue` (`Nombre_ciudad` asc) )
eNGINe = InnoDB;


-- -----------------------------------------------------
-- table `u117694550_zoonosis`.`tiposusuarios`
-- -----------------------------------------------------
DROP taBLe IF eXIsts `u117694550_zoonosis`.`tiposusuarios` ;

cReate  taBLe IF NOt eXIsts `u117694550_zoonosis`.`tiposusuarios` (
  `idtiposusuarios` INt NOt NuLL autO_INcReMeNt ,
  `tipouser` VaRcHaR(45) NOt NuLL ,
  PRIMaRY KeY (`idtiposusuarios`) ,
  uNIQue INDeX `tipouser_uNIQue` (`tipouser` asc) ,
  uNIQue INDeX `idtiposusuarios_uNIQue` (`idtiposusuarios` asc) )
eNGINe = InnoDB;


-- -----------------------------------------------------
-- table `u117694550_zoonosis`.`sedes`
-- -----------------------------------------------------
DROP taBLe IF eXIsts `u117694550_zoonosis`.`sedes` ;

cReate  taBLe IF NOt eXIsts `u117694550_zoonosis`.`sedes` (
  `idsedes` INt NOt NuLL autO_INcReMeNt ,
  `Nombre` VaRcHaR(45) NOt NuLL ,
  `ciudad` VaRcHaR(45) NOt NuLL ,
  `Direccion` VaRcHaR(45) NOt NuLL ,
  `telefono` VaRcHaR(45) NOt NuLL ,
  `email` VaRcHaR(45) NOt NuLL ,
  PRIMaRY KeY (`idsedes`) ,
  uNIQue INDeX `Direccion_uNIQue` (`Direccion` asc) ,
  uNIQue INDeX `Nombre_uNIQue` (`Nombre` asc) )
eNGINe = InnoDB;


-- -----------------------------------------------------
-- table `u117694550_zoonosis`.`usuarios`
-- -----------------------------------------------------
DROP taBLe IF eXIsts `u117694550_zoonosis`.`usuarios` ;

cReate  taBLe IF NOt eXIsts `u117694550_zoonosis`.`usuarios` (
  `idusuarioParticulares` INt NOt NuLL autO_INcReMeNt ,
  `tipousuario` VaRcHaR(45) NuLL DeFauLt 'Particular' ,
  `Nombres` VaRcHaR(45) NOt NuLL ,
  `apellidos` VaRcHaR(45) NOt NuLL ,
  `cedula` BIGINt NOt NuLL ,
  `ciudad` VaRcHaR(45) NOt NuLL ,
  `email` VaRcHaR(45) NOt NuLL ,
  `telefono_Fij` VaRcHaR(45) NuLL ,
  `telefono_cel` VaRcHaR(45) NuLL ,
  `contrato` VaRcHaR(45) NuLL DeFauLt 'Particular',
  `sedeLaboral` VaRcHaR(45) NuLL DeFauLt 'Particular',
  `FechaInicio` DatetIMe NuLL DeFauLt '1000-01-01 00:00:00',
  `suelDevengado` VaRcHaR(45) NuLL DeFauLt 'Particular',
  `userName` VaRcHaR(45) NOt NuLL ,  
  `Password` VaRcHaR(45) NOt NuLL ,
 
  uNIQue INDeX `user_uNIQue` (`userName` asc) ,
  uNIQue INDeX `cedula_uNIQue` (`cedula` asc) ,
  uNIQue INDeX `email_uNIQue` (`email` asc) ,
  INDeX `FK_ciudades` (`ciudad` asc) ,
  uNIQue INDeX `idusuarioParticulares_uNIQue` (`idusuarioParticulares` asc) ,
  PRIMaRY KeY (`idusuarioParticulares`) ,
  INDeX `FK_tipo_usuario` (`tipousuario` asc) ,
  INDeX `FK_sede_Laboral` (`sedeLaboral` asc) ,
  cONstRaINt `FK_ciudades`
    FOReIGN KeY (`ciudad` )
    ReFeReNces `u117694550_zoonosis`.`ciudades` (`Nombre_ciudad` )
    ON DeLete NO actION
    ON uPDate NO actION,
  cONstRaINt `FK_tipo_usuario`
    FOReIGN KeY (`tipousuario` )
    ReFeReNces `u117694550_zoonosis`.`tiposusuarios` (`tipouser` )
    ON DeLete NO actION
    ON uPDate NO actION,
  cONstRaINt `FK_sede_Laboral`
    FOReIGN KeY (`sedeLaboral` )
    ReFeReNces `u117694550_zoonosis`.`sedes` (`Nombre` )
    ON DeLete NO actION
    ON uPDate NO actION)
eNGINe = InnoDB;


-- -----------------------------------------------------
-- table `u117694550_zoonosis`.`tipos_animal`
-- -----------------------------------------------------
DROP taBLe IF eXIsts `u117694550_zoonosis`.`tipos_animal` ;

cReate  taBLe IF NOt eXIsts `u117694550_zoonosis`.`tipos_animal` (
  `idtipos_animal` INt NOt NuLL autO_INcReMeNt ,
  `tipo` VaRcHaR(45) NOt NuLL ,
  PRIMaRY KeY (`idtipos_animal`) ,
  uNIQue INDeX `tipo_uNIQue` (`tipo` asc) )
eNGINe = InnoDB;


-- -----------------------------------------------------
-- table `u117694550_zoonosis`.`estado_animal`
-- -----------------------------------------------------
DROP taBLe IF eXIsts `u117694550_zoonosis`.`estado_animal` ;

cReate  taBLe IF NOt eXIsts `u117694550_zoonosis`.`estado_animal` (
  `idestado_animal` INt NOt NuLL autO_INcReMeNt ,
  `estado` VaRcHaR(45) NOt NuLL ,
  PRIMaRY KeY (`idestado_animal`) ,
  uNIQue INDeX `estado_uNIQue` (`estado` asc) )
eNGINe = InnoDB;


-- -----------------------------------------------------
-- table `u117694550_zoonosis`.`animal`
-- -----------------------------------------------------
DROP taBLe IF eXIsts `u117694550_zoonosis`.`animal` ;

cReate  taBLe IF NOt eXIsts `u117694550_zoonosis`.`animal` (
  `idanimal` INt NOt NuLL autO_INcReMeNt ,
  `tipo_Dueño` VaRcHaR(45) NOt NuLL ,
  `cc_Dueño` BIGINt NOt NuLL ,
  `tipoanimal` VaRcHaR(45) NOt NuLL ,
  `estadoanimal` VaRcHaR(45) NOt NuLL ,
  `Nombre` VaRcHaR(45) NOt NuLL ,
  `sexo` VaRcHaR(45) NOt NuLL ,
  `Raza` VaRcHaR(45) NOt NuLL ,
  `color` VaRcHaR(45) NOt NuLL ,
  `tamaño` VaRcHaR(45) NOt NuLL ,
  `edad` VaRcHaR(45) NOt NuLL ,
  `Peso` VaRcHaR(45) NOt NuLL ,
  `Foto` VaRcHaR(255) NuLL ,
  `tipoImagen` VaRcHaR(255) NuLL ,
  `Habilidad` teXt NuLL ,
  PRIMaRY KeY (`idanimal`) ,
  INDeX `FK_usuarios` (`cc_Dueño` asc) ,
  INDeX `FK_tipo_animal` (`tipoanimal` asc) ,
  INDeX `FK_estado_animal` (`estadoanimal` asc) ,
  cONstRaINt `FK_usuarios`
    FOReIGN KeY (`cc_Dueño` )
    ReFeReNces `u117694550_zoonosis`.`usuarios` (`cedula` )
    ON DeLete NO actION
    ON uPDate NO actION,
  cONstRaINt `FK_tipo_animal`
    FOReIGN KeY (`tipoanimal` )
    ReFeReNces `u117694550_zoonosis`.`tipos_animal` (`tipo` )
    ON DeLete NO actION
    ON uPDate NO actION,
  cONstRaINt `FK_estado_animal`
    FOReIGN KeY (`estadoanimal` )
    ReFeReNces `u117694550_zoonosis`.`estado_animal` (`estado` )
    ON DeLete NO actION
    ON uPDate NO actION)
eNGINe = InnoDB;


-- -----------------------------------------------------
-- table `u117694550_zoonosis`.`estados_solicitud`
-- -----------------------------------------------------
DROP taBLe IF eXIsts `u117694550_zoonosis`.`estados_solicitud` ;

cReate  taBLe IF NOt eXIsts `u117694550_zoonosis`.`estados_solicitud` (
  `idestados_solicitud` INt NOt NuLL autO_INcReMeNt ,
  `estado` VaRcHaR(45) NOt NuLL ,
  PRIMaRY KeY (`idestados_solicitud`) ,
  uNIQue INDeX `estado_uNIQue` (`estado` asc) )
eNGINe = InnoDB;


-- -----------------------------------------------------
-- table `u117694550_zoonosis`.`solicitud_adopcion`
-- -----------------------------------------------------
DROP taBLe IF eXIsts `u117694550_zoonosis`.`solicitud_adopcion` ;

cReate  taBLe IF NOt eXIsts `u117694550_zoonosis`.`solicitud_adopcion` (
  `idsolicitud_adopcion` INt NOt NuLL autO_INcReMeNt ,
  `cc_solicitante` BIGINt NOt NuLL ,
  `id_animal` INt NOt NuLL ,
  `estado_solicitud` VaRcHaR(45) NOt NuLL DeFauLt 'en espera' ,
  `Dueño_animal` VaRcHaR(45) NOt NuLL ,
  PRIMaRY KeY (`idsolicitud_adopcion`) ,
  INDeX `FK_usuario` (`cc_solicitante` asc) ,
  INDeX `FK_animal` (`id_animal` asc) ,
  INDeX `FK_estados` (`estado_solicitud` asc) ,
  cONstRaINt `FK_usuario`
    FOReIGN KeY (`cc_solicitante` )
    ReFeReNces `u117694550_zoonosis`.`usuarios` (`cedula` )
    ON DeLete NO actION
    ON uPDate NO actION,
  cONstRaINt `FK_animal`
    FOReIGN KeY (`id_animal` )
    ReFeReNces `u117694550_zoonosis`.`animal` (`idanimal` )
    ON DeLete NO actION
    ON uPDate NO actION,
  cONstRaINt `FK_estados`
    FOReIGN KeY (`estado_solicitud` )
    ReFeReNces `u117694550_zoonosis`.`estados_solicitud` (`estado` )
    ON DeLete NO actION
    ON uPDate NO actION)
eNGINe = InnoDB;


-- -----------------------------------------------------
-- table `u117694550_zoonosis`.`seguimiento_usuarios`
-- -----------------------------------------------------
DROP taBLe IF eXIsts `u117694550_zoonosis`.`seguimiento_usuarios` ;

cReate  taBLe IF NOt eXIsts `u117694550_zoonosis`.`seguimiento_usuarios` (
  `idBitacora_seguimiento` INt NOt NuLL autO_INcReMeNt ,
  `Fecha` DatetIMe NOt NuLL ,
  `tipo_de_Operacion` VaRcHaR(45) NOt NuLL ,
  `tipo_de_usuario` VaRcHaR(45) NOt NuLL ,
  `Nombre_de_usuario` VaRcHaR(45) NOt NuLL ,
  `Descripcion_de_Operacion` VaRcHaR(200) NOt NuLL ,
  PRIMaRY KeY (`idBitacora_seguimiento`) )
eNGINe = InnoDB;


-- -----------------------------------------------------
-- table `u117694550_zoonosis`.`seguimiento_animales`
-- -----------------------------------------------------
DROP taBLe IF eXIsts `u117694550_zoonosis`.`seguimiento_animales` ;

cReate  taBLe IF NOt eXIsts `u117694550_zoonosis`.`seguimiento_animales` (
  `idseguimiento_animales` INt NOt NuLL autO_INcReMeNt ,
  `Fecha` DatetIMe NOt NuLL ,
  `tipo_de_Operacion` VaRcHaR(45) NOt NuLL ,
  `tipo_de_animal` VaRcHaR(45) NOt NuLL ,
  `Dueño` VaRcHaR(45) NOt NuLL ,
  `Motivo_de_Operacion` VaRcHaR(45) NOt NuLL ,
  `Descripcion_de_Operacion` VaRcHaR(200) NOt NuLL ,
  PRIMaRY KeY (`idseguimiento_animales`) )
eNGINe = InnoDB;

use `u117694550_zoonosis`;

DeLIMIteR $$

use `u117694550_zoonosis`$$
DROP tRIGGeR IF eXIsts `u117694550_zoonosis`.`registro_usuario` $$
use `u117694550_zoonosis`$$


create trigger registro_usuario before insert on usuarios
for each row
insert into seguimiento_usuarios (Fecha, tipo_de_Operacion, tipo_de_usuario, Nombre_de_usuario, Descripcion_de_Operacion) 
values (now(), "Insert", new.tipousuario, new.userName, "un nuevo usuario se ha registrado en el sistema");

$$


DeLIMIteR ;

use `u117694550_zoonosis`;

DeLIMIteR $$

use `u117694550_zoonosis`$$
DROP tRIGGeR IF eXIsts `u117694550_zoonosis`.`borrado_usuario` $$
use `u117694550_zoonosis`$$

create trigger borrado_usuario after delete on usuarios
for each row
insert into seguimiento_usuarios (Fecha, tipo_de_Operacion, tipo_de_usuario, Nombre_de_usuario, Descripcion_de_Operacion) 
values (now(), "Delete", old.tipousuario, old.userName, "este usuario ha sido eliminado del sistema");

$$


DeLIMIteR ;

use `u117694550_zoonosis`;

DeLIMIteR $$

use `u117694550_zoonosis`$$
DROP tRIGGeR IF eXIsts `u117694550_zoonosis`.`modificado_usuario` $$
use `u117694550_zoonosis`$$

create trigger modificado_usuario after update on usuarios
for each row
insert into seguimiento_usuarios (Fecha, tipo_de_Operacion, tipo_de_usuario, Nombre_de_usuario, Descripcion_de_Operacion) 
values (now(), "update", old.tipousuario, old.userName, "Los datos de este usuario han sido modificados");

$$


DeLIMIteR ;

use `u117694550_zoonosis`;

DeLIMIteR $$

use `u117694550_zoonosis`$$
DROP tRIGGeR IF eXIsts `u117694550_zoonosis`.`registro_animal` $$
use `u117694550_zoonosis`$$

create trigger registro_animal before insert on animal
for each row
insert into seguimiento_animales (Fecha, tipo_de_Operacion, tipo_de_animal, Dueño, Motivo_de_Operacion, Descripcion_de_Operacion) 
values (now(), "Insert", new.tipoanimal, new.tipo_Dueño, "Operación", "un nuevo animal se ha registrado en el sistema");

$$


DeLIMIteR ;

use `u117694550_zoonosis`;

DeLIMIteR $$

use `u117694550_zoonosis`$$
DROP tRIGGeR IF eXIsts `u117694550_zoonosis`.`borrado_animal` $$
use `u117694550_zoonosis`$$

create trigger borrado_animal after delete on animal
for each row
insert into seguimiento_animales (Fecha, tipo_de_Operacion, tipo_de_animal, Dueño, Motivo_de_Operacion, Descripcion_de_Operacion) 
values (now(), "Delete", old.tipoanimal, old.tipo_Dueño, "Operación", "este animal ha sido eliminado del sistema");

$$


DeLIMIteR ;

use `u117694550_zoonosis`;

DeLIMIteR $$

use `u117694550_zoonosis`$$
DROP tRIGGeR IF eXIsts `u117694550_zoonosis`.`modificado_animal` $$
use `u117694550_zoonosis`$$

create trigger modificado_animal after update on animal
for each row
insert into seguimiento_animales (Fecha, tipo_de_Operacion, tipo_de_animal, Dueño, Motivo_de_Operacion, Descripcion_de_Operacion) 
values (now(), "update", old.tipoanimal, old.tipo_Dueño, "Operación", "Los datos de este animal han sido modificados");

$$


DeLIMIteR ;


set sQL_MODe=@OLD_sQL_MODe;
set FOReIGN_KeY_cHecKs=@OLD_FOReIGN_KeY_cHecKs;
set uNIQue_cHecKs=@OLD_uNIQue_cHecKs;

-- -----------------------------------------------------
-- Data for table `u117694550_zoonosis`.`ciudades`
-- -----------------------------------------------------
staRt tRaNsactION;
use `u117694550_zoonosis`;
INseRt INtO `u117694550_zoonosis`.`ciudades` (`idciudades`, `Nombre_ciudad`) VaLues (NuLL, 'Bogotá');

cOMMIt;

-- -----------------------------------------------------
-- Data for table `u117694550_zoonosis`.`tiposusuarios`
-- -----------------------------------------------------
staRt tRaNsactION;
use `u117694550_zoonosis`;
INseRt INtO `u117694550_zoonosis`.`tiposusuarios` (`idtiposusuarios`, `tipouser`) VaLues (NuLL, 'Particular');
INseRt INtO `u117694550_zoonosis`.`tiposusuarios` (`idtiposusuarios`, `tipouser`) VaLues (NuLL, 'empleado');
INseRt INtO `u117694550_zoonosis`.`tiposusuarios` (`idtiposusuarios`, `tipouser`) VaLues (NuLL, 'administrador');

cOMMIt;

-- -----------------------------------------------------
-- Data for table `u117694550_zoonosis`.`sedes`
-- -----------------------------------------------------
staRt tRaNsactION;
use `u117694550_zoonosis`;
INseRt INtO `u117694550_zoonosis`.`sedes` (`idsedes`, `Nombre`, `ciudad`, `Direccion`, `telefono`, `email`) VaLues (NuLL, 'sede Principal', 'Bogotá', 'carrera 106a No 67 - 02 - VÃ­a engativá', '440 89 96 - 440 89 98', 'sedePrincipal@gmail.com');
INseRt INtO `u117694550_zoonosis`.`sedes` (`Nombre`, `ciudad`, `Direccion`, `telefono`, `email`) VaLues ('Particular', 'Particular', 'Particular', 'Particular', 'Particular');

cOMMIt;

-- -----------------------------------------------------
-- Data for table `u117694550_zoonosis`.`usuarios`
-- -----------------------------------------------------
staRt tRaNsactION;
use `u117694550_zoonosis`;
INseRt INtO `u117694550_zoonosis`.`usuarios` (`idusuarioParticulares`, `tipousuario`, `Nombres`, `apellidos`, `cedula`, `ciudad`, `email`, `telefono_Fij`, `telefono_cel`, `userName`, `Password`, `sedeLaboral`) VaLues (NuLL, 'administrador', 'administrador', 'administrador', 0, 'Bogotá', 'administrador@gmail.com', '0000000', '0000000000', 'admin', 'siz', 'sede Principal');

cOMMIt;

-- -----------------------------------------------------
-- Data for table `u117694550_zoonosis`.`tipos_animal`
-- -----------------------------------------------------
staRt tRaNsactION;
use `u117694550_zoonosis`;
INseRt INtO `u117694550_zoonosis`.`tipos_animal` (`idtipos_animal`, `tipo`) VaLues (NuLL, 'Perro');
INseRt INtO `u117694550_zoonosis`.`tipos_animal` (`idtipos_animal`, `tipo`) VaLues (NuLL, 'Gato');

cOMMIt;

-- -----------------------------------------------------
-- Data for table `u117694550_zoonosis`.`estado_animal`
-- -----------------------------------------------------
staRt tRaNsactION;
use `u117694550_zoonosis`;
INseRt INtO `u117694550_zoonosis`.`estado_animal` (`idestado_animal`, `estado`) VaLues (NuLL, 'en adopcion');
INseRt INtO `u117694550_zoonosis`.`estado_animal` (`idestado_animal`, `estado`) VaLues (NuLL, 'Perdido');

cOMMIt;

-- -----------------------------------------------------
-- Data for table `u117694550_zoonosis`.`estados_solicitud`
-- -----------------------------------------------------
staRt tRaNsactION;
use `u117694550_zoonosis`;
INseRt INtO `u117694550_zoonosis`.`estados_solicitud` (`idestados_solicitud`, `estado`) VaLues (NuLL, 'en espera');
INseRt INtO `u117694550_zoonosis`.`estados_solicitud` (`idestados_solicitud`, `estado`) VaLues (NuLL, 'aceptada');
INseRt INtO `u117694550_zoonosis`.`estados_solicitud` (`idestados_solicitud`, `estado`) VaLues (NuLL, 'Rechazada');

cOMMIt;