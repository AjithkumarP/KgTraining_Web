--retrieve messages
SELECT `sender`,`sentmessage` FROM  `Angeliaforos`.`messages_table` 
    WHERE(`sender` = current_user AND `reciever` = selected_contact) 
    OR (`sender` = selected_contact AND `reciever` = current_user) 
        ORDER BY `senttime` LIMIT 50;

--create table
CREATE TABLE `Angeliaforos`.`messages_table`(
    `serial` INT(5) NOT NULL AUTO_INCREMENT,
    `sender` VARCHAR(30) NOT NULL, 
    `reciever` VARCHAR(30) NOT NULL,
    `senttime` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, 
    `sentmessage` TEXT NOT NULL, 
    PRIMARY KEY(`serial`));

--insert messages
INSERT INTO `Angeliaforos`.`messages_table` (`sender`,`reciever`,`sentmessage`)
    VALUES(current_user, selected_contact, "text message");