CREATE SCHEMA IF NOT EXISTS PRUEBA;
USE PRUEBA;

DROP TABLE IF EXISTS s_cliente;
CREATE TABLE s_cliente 
 (id                         VARCHAR(3)  NOT NULL,
  nombre                     VARCHAR(20) NOT NULL,
  telefono                   VARCHAR(20) NOT NULL,
  direccion                  VARCHAR(20),
  ciudad                     VARCHAR(20),
  provincia                  VARCHAR(15),
  pais	                      VARCHAR(20),
  codigo_postal              VARCHAR(15),
  calificacion_crediticia    VARCHAR(9),
  representante_ventas_id    VARCHAR(3),
  region_id                  VARCHAR(3),
  comentarios                VARCHAR(255),
  CONSTRAINT s_cliente_id_pk PRIMARY KEY (id),
  CONSTRAINT s_cliente_calificacion_crediticia_ck
  CHECK (calificacion_crediticia IN ('EXCELENTE', 'BUENA', 'MALA'))
 );

INSERT INTO s_cliente VALUES ('301', 'Sports,Inc', '540-123-4567','72 High St', 'Harrisonburg', 'VA','US', '22809','EXCELENTE', '12', '1', NULL);
INSERT INTO s_cliente VALUES ('302', 'Toms Sporting Goods', '540-987-6543','6741 Main St','Harrisonburg', 'VA','US', '22809','MALA', '14', '1', NULL);
INSERT INTO s_cliente VALUES ('303', 'Athletic Attire', '540-123-6789','54 Market St', 'Harrisonburg', 'VA','US', '22808','BUENA', '14', '1', NULL);
INSERT INTO s_cliente VALUES ('304', 'Athletics For All', '540-987-1234','286 Main St', 'Harrisonburg', 'VA', 'US', '22808','EXCELENTE', '12', '1', NULL);
INSERT INTO s_cliente VALUES ('305', 'Shoes for Sports', '540-123-9876','538 High St', 'Harrisonburg', 'VA','US', '22809','EXCELENTE', '14', '1', NULL);

INSERT INTO s_cliente VALUES ('403', 'Athletics One', '717-234-6786','912 Columbia Rd', 'Lancaster', 'PA','US', '17601','BUENA', '14', '1', NULL);
INSERT INTO s_cliente VALUES ('404', 'Great Athletes', '717-987-2341','121 Litiz Pike', 'Lancaster', 'PA','US', '17602','EXCELENTE', '12', '1', NULL);
INSERT INTO s_cliente VALUES ('405', 'Athletics Two', '717-987-9875','435 High Rd', 'Lancaster', 'PA','US', '17602','EXCELENTE', '14', '1', NULL);
INSERT INTO s_cliente VALUES ('406', 'Athletes Attic', '717-234-9888','101 Greenfield Rd', 'Lancaster', 'PA','US', '17601','MALA', '12', '1', NULL);

INSERT INTO s_cliente VALUES ('201', 'One Sport', '55-112066222','82 Via Bahia', 'Sao Paolo', NULL, 'Brazil', NULL,'EXCELENTE', '12', '2', NULL);
INSERT INTO s_cliente VALUES ('202', 'Deportivo Caracas', '58-28066222','31 Sabana Grande', 'Caracas', NULL, 'Venezuela', NULL,'EXCELENTE', '12', '2', NULL);
INSERT INTO s_cliente VALUES ('203', 'New Delhi Sports', '91-11903338','11368 Chanakya', 'New Delhi', NULL, 'India', NULL,'BUENA', '11', '4', NULL);
INSERT INTO s_cliente VALUES ('204', 'Ladysport', '1-206-104-0111','281 Queen Street', 'Seattle', 'Washington', 'US', NULL,'EXCELENTE', '11', '1', NULL);
INSERT INTO s_cliente VALUES ('205', 'Kim''s Sporting Goods', '852-3693888','15 Henessey Road', 'Hong Kong', NULL, NULL, NULL,'EXCELENTE', '11', '4', NULL);
INSERT INTO s_cliente VALUES ('206', 'Sportique', '33-93425722253','172 Rue de Place', 'Cannes', NULL, 'France', NULL,'EXCELENTE', '13', '5', NULL);
INSERT INTO s_cliente VALUES ('207', 'Tall Rock Sports', '234-16036222','10 Saint Antoine', 'Lagos', NULL, 'Nigeria', NULL,'BUENA', NULL, '3', NULL);
INSERT INTO s_cliente VALUES ('208', 'Muench Sports', '49-895274449','435 Gruenestrasse', 'Munich', NULL, 'Germany', NULL,'BUENA', '13', '5', NULL);

INSERT INTO s_cliente VALUES ('209', 'Beisbol Si!', '809-352666','415 Playa Del Mar',  'San Pedro de Macoris', NULL, 'Dominican Republic', NULL, 'EXCELENTE', '11', '6', NULL);
INSERT INTO s_cliente VALUES ('210', 'Futbol Sonora', '52-404555','5 Via Saguaro', 'Nogales', NULL, 'Mexico', NULL,'EXCELENTE', '12', '2', NULL);
INSERT INTO s_cliente VALUES ('211', 'Helmut''s Sports', '42-2111222','45 Modrany', 'Prague', NULL, 'Czechoslovakia', NULL,'EXCELENTE', '11', '5', NULL);
INSERT INTO s_cliente VALUES ('212', 'Hamada Sport', '20-31209222','47A Corniche', 'Alexandria', NULL, 'Egypt', NULL,'EXCELENTE', '13', '3', NULL);
INSERT INTO s_cliente VALUES ('213', 'Sports Emporium', '1-415-555-6281','4783 168th Street', 'San Francisco', 'CA', 'US', NULL,'EXCELENTE', '11', '1', NULL);
INSERT INTO s_cliente VALUES ('214', 'Sports Retail', '1-716-555-7777','115 Main Street', 'Buffalo', 'NY', 'US', NULL, 'MALA', '11', '1', NULL);
COMMIT;
