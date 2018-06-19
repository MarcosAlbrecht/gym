CREATE TABLE `dbloja`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `price` DECIMAL(10,2) NOT NULL,
  `image` VARCHAR(255) NOT NULL,
  `description` MEDIUMTEXT NOT NULL,
  PRIMARY KEY (`id`));
  insert into products(name, price, image, description) values ("Whey gold 1KG", 130.90, "images/wheygold.jpg", "A Whey Gold 100% Protein ON é uma proteína de alto valor biológico e é muito usada por atletas de rendimento, praticantes de atividade física e até idosos que pretendem minimizar a perda muscular que ocorre com o processo de envelhecimento.");
  insert into products(name, price, image, description) values ("Whey Max Titanium 1KG", 110.00, "images/whey-max-titanium.jpg", "O 100% Whey Protein Max Titanium 900 g é um suplemento proteico à base de proteína concentrada do soro do leite. Possui alto valor biológico, sendo rico em BCAA.");
