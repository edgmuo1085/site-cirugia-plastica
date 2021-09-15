------------------ create tables
CREATE TABLE usuarios (
	id int(11) NOT NULL AUTO_INCREMENT,
	nombres varchar(40) NOT NULL,
	usuario varchar(15) NOT NULL,
	clave varchar(40) NOT NULL,
	correo varchar(50) DEFAULT NULL,
	estado char(1) NOT NULL,
	rol char(1) NOT NULL,
	createdat timestamp not null default now(),
	updatedat timestamp not null default now(),
	PRIMARY KEY (id),
	UNIQUE KEY usuario (usuario)
);

CREATE TABLE service (
	id int NOT NULL AUTO_INCREMENT,
	title varchar(200),
	image varchar(250) not NULL, 
	description text, 
	category varchar(100),
	createdat timestamp not NULL default now(),
	updatedat timestamp not NULL default now(),
	PRIMARY KEY (id)
);




---------------------------- USUARIOS --------------------------------
--CLAVE = User..890

INSERT INTO usuarios(nombres, usuario, clave, correo, estado, rol)
VALUES ('Administrador','site1','c810ce3d2a4009d5f82515716d6e3efc740a32e8', 'edgmuo1085@gmail.com' ,1 ,0);

INSERT INTO usuarios(nombres, usuario, clave, correo, estado, rol)
VALUES ('Usuario','usuario','c810ce3d2a4009d5f82515716d6e3efc740a32e8', 'edgmuo1085@gmail.com' ,1 ,1);


---------------------------- SERVICES --------------------------------
insert into service (title,image,description, category) 
	values('ABDOMINOPLASTIA', 'img/servicios/servicio-1.png', 'Es la reconstrucción de la pared abdominal, que consta de eliminación del exceso de piel y grasa con el objetivo final de remodelar el abdomen, la cintura y la forma del tronco del cuerpo.', 'abdominoplastia');
insert into service (title,image,description, category) 
	values('ABDOMINOPLASTIA + IMPLANTE DE SENO', 'img/servicios/servicio-2.png', 'Es la reconstrucción de la pared abdominal, que consta de eliminación del exceso de piel y grasa con el objetivo final de remodelar el abdomen, la cintura y la forma del tronco del cuerpo.', 'abdominoplastia');
insert into service (title,image,description, category) 
	values('ABDOMINOPLASTIA', 'img/servicios/servicio-7.png', 'Es la reconstrucción de la pared abdominal, que consta de eliminación del exceso de piel y grasa con el objetivo final de remodelar el abdomen, la cintura y la forma del tronco del cuerpo.', 'abdominoplastia');
insert into service (title,image,description, category) 
	values('ABDOMINOPLASTIA + LIPOTRANSFERENCIA A GLÚTEOS', 'img/servicios/servicio-8.png', 'Es la reconstrucción de la pared abdominal, que consta de eliminación del exceso de piel y grasa con el objetivo final de remodelar el abdomen, la cintura y la forma del tronco del cuerpo.', 'abdominoplastia');



insert into service (title,image,description, category) 
	values('BLEFAROPLASTIA', 'img/servicios/servicio-9.png', 'Cirugía que busca rejuvenecer los párpados mediante la remodelación de los tejidos perioculares.', 'blefaroplastia');



insert into service (title,image,description, category) 
	values('GINECOMASTIA + LIPOMARCAJE', 'img/servicios/servicio-10.png','', 'ginecomastia');



insert into service (title,image,description, category) 
	values('IMPLANTE DE SENO', 'img/servicios/servicio-3.png', 'Es, desde hace años, una de las cirugías estéticas más solicitadas por las mujeres de entre 20 y 45 años, casi a la par de la liposucción.', 'implante-seno');
insert into service (title,image,description, category) 
	values('IMPLANTE DE SENO + LIPOTRANSFERENCIA PARA GLÚTEOS', 'img/servicios/servicio-11.png', 'Es, desde hace años, una de las cirugías estéticas más solicitadas por las mujeres de entre 20 y 45 años, casi a la par de la liposucción.', 'implante-seno');
insert into service (title,image,description, category) 
	values('IMPLANTE DE SENO + LIPOTRANSFERENCIA PARA GLÚTEOS', 'img/servicios/servicio-12.png', 'Es, desde hace años, una de las cirugías estéticas más solicitadas por las mujeres de entre 20 y 45 años, casi a la par de la liposucción.', 'implante-seno');
insert into service (title,image,description, category) 
	values('IMPLANTE DE SENO + LIPOTRANSFERENCIA PARA GLÚTEOS', 'img/servicios/servicio-13.png', 'Es, desde hace años, una de las cirugías estéticas más solicitadas por las mujeres de entre 20 y 45 años, casi a la par de la liposucción.', 'implante-seno');
insert into service (title,image,description, category) 
	values('IMPLANTES DE SENO', 'img/servicios/servicio-14.png', 'Es, desde hace años, una de las cirugías estéticas más solicitadas por las mujeres de entre 20 y 45 años, casi a la par de la liposucción.', 'implante-seno');



insert into service (title,image,description, category) 
	values('LIPOESCULTURA', 'img/servicios/servicio-4.png', 'La lipoescultura se realiza para zonas localizadas en las cuales la grasa no es demasiada y se tiene la oportunidad de dar mejor forma a dicha zona.', 'lipoescultura');
insert into service (title,image,description, category) 
	values('LIPOESCULTURA CON LIPOTRANSFERENCIA A GLÚTEOS', 'img/servicios/servicio-15.png', 'La lipoescultura se realiza para zonas localizadas en las cuales la grasa no es demasiada y se tiene la oportunidad de dar mejor forma a dicha zona.', 'lipoescultura');



insert into service (title,image,description, category) 
	values('MASTOPEXIA', 'img/servicios/servicio-5.png', 'Generalmente, se conoce a la mastopexia como a la cirugía estética cuyo destino es arreglar los problemas de pecho caído.', 'mastopexia');



insert into service (title,image,description, category) 
	values('PEZÓN INVERTIDO', 'img/servicios/servicio-16.png', '', 'pezon-invertido');


insert into service (title,image,description, category) 
	values('RINOPLASTIA', 'img/servicios/servicio-6.png', 'La rinoplastia es un procedimiento quirúrgico en el que se cambia la forma o el tamaño de la nariz para darle armonía y un aspecto simétrico.', 'rinoplastia');
insert into service (title,image,description, category) 
	values('RINOPLASTIA', 'img/servicios/servicio-17.png', 'La rinoplastia es un procedimiento quirúrgico en el que se cambia la forma o el tamaño de la nariz para darle armonía y un aspecto simétrico.', 'rinoplastia');



--ALTER TABLE service AUTO_INCREMENT=1;
