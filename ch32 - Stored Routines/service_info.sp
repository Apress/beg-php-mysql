DELIMITER //

CREATE PROCEDURE service_info
(IN client_id INT, IN services varchar(20))

   BEGIN

      DECLARE comma_pos INT;
      DECLARE current_id INT;

      svcs: LOOP
  
         SET comma_pos = LOCATE(',', services);
         SET current_id = SUBSTR(services, 1, comma_pos);

         IF current_id <> 0 THEN
            SET services = SUBSTR(services, comma_pos+1);
         ELSE
            SET current_id = services;
         END IF;

         INSERT INTO request_info VALUES(NULL, client_id, current_id);

         IF comma_pos = 0 OR current_id = '' THEN
            LEAVE svcs;
         END IF;

      END LOOP;

   END//

DELIMITER ;

