CREATE TABLE `mvc`.`test` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `article` VARCHAR(255) NOT NULL , 
    `product` VARCHAR(255) NOT NULL , 
    `description` VARCHAR(255) NOT NULL , 
    `price` INT NOT NULL , 
    `category` VARCHAR(255) NOT NULL , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;