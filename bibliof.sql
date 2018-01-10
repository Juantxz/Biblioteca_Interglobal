use  bibliotecaf;
select * from personal;
select * from material where Cont=0;
UPDATE material SET Cont=1 WHERE Cont=0;
describe prestamo;
select * from prestamo;
DELETE  FROM prestamo where Boleta_alumn='23140331';
SET SQL_SAFE_UPDATES = 0;
