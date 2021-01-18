CREATE DEFINER=`medici28`@`localhost` FUNCTION `s_total_pacientes` () RETURNS INT(11) BEGIN
declare total int;
set total = (SELECT count(idpacientes) as total from pacientes where 1);
return total;

END$$

DELIMITER ;