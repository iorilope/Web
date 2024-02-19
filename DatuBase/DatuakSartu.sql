--Taldea taulako datuak

INSERT INTO taldea (Herria, Izena, Generoa) VALUES
  ('Vitoria-Gasteiz', 'Deportivo Alavés', 'G'),
  ('Vitoria-Gasteiz', 'Baskonia', 'G'),
  ('Vitoria-Gasteiz', 'Araski AES', 'E'),
  ('Vitoria-Gasteiz', 'CD San Viator', 'G'),
  ('Vitoria-Gasteiz', 'Club Deportivo Vitoria', 'E'),
  ('Salvatierra', 'SD Salvatierra', 'G'),
  ('Amurrio', 'Amurrio Club', 'G'),
  ('Llodio', 'Ilcapo Sporting', 'E');

--Entrenatzailea taulako datuak

INSERT INTO entrenatzailea (Nan, Izena, Abizena, Telefonoa, Taldea_Kodea) VALUES
  ('12345678A', 'Juan', 'Pérez', '654321098', 1),
  ('87654321B', 'María', 'López', '987654321', 2),
  ('98765432C', 'Pedro', 'García', '123456789', 3),
  ('45678901D', 'Ana', 'Martínez', '456789012', 4);

--Piraguista taulako datuak

INSERT INTO piraguista (Nan, Izena, Abizena, Generoa, Telefonoa, Herria, Taldea_Kodea) VALUES
  ('12345678A', 'Ana', 'González', 'E', '654321098', 'Vitoria-Gasteiz', 1),
  ('87654321B', 'Pedro', 'Fernández', 'G', '987654321', 'Vitoria-Gasteiz', 2),
  ('98765432C', 'María', 'López', 'E', '123456789', 'Amurrio', 3),
  ('45678901D', 'Juan', 'Pérez', 'G', '456789012', 'Llodio', 4);

--Modalitatea taulako datuak

INSERT INTO `piraguismo`.`modalitatea` (`ID_M`, `Mota`) VALUES ('1', 'Sprin');
INSERT INTO `piraguismo`.`modalitatea` (`ID_M`, `Mota`) VALUES ('2', 'Sprin');
INSERT INTO `piraguismo`.`modalitatea` (`ID_M`, `Mota`) VALUES ('3', 'Sprin');
INSERT INTO `piraguismo`.`modalitatea` (`ID_M`, `Mota`) VALUES ('4', 'Eslalon');


--Txapelketa taulako datuak

INSERT INTO Txapelketa (Data_Hasi, Data_Bukatu, Kokapena, Izena, Zailtasun_Maila, Modalitatea_ID_M) VALUES
  ('2024-03-10', '2024-03-12', 'Vitoria-Gasteiz', 'Campeonato de Euskadi de Sprint', 'III', 1),
  ('2024-04-01', '2024-04-05', 'Llodio', 'Copa del Rey de Maratón', 'V', 2),
  ('2024-05-15', '2024-05-18', 'Amurrio', 'Campeonato del Mundo de Slalom', 'VI', 3),
  ('2024-06-22', '2024-06-25', 'Zarautz', 'Liga vasca de Aguas Tranquilas', 'II', 4);