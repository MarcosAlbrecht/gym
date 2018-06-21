select * from products;
select * from usuario;
select * from tipousuario;
select * from venda;
select * from products_has_venda;
select * from bairro;


CREATE SCHEMA IF NOT EXISTS `dbloja` DEFAULT CHARACTER SET utf8 ;
USE `dbloja` ;

-- -----------------------------------------------------
-- Table `mydb`.`products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbloja`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `price` DECIMAL(10,2) NOT NULL,
  `image` VARCHAR(255) NOT NULL,
  `description` MEDIUMTEXT NOT NULL,
  `qtd` INT NOT NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `mydb`.`estado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbloja`.`estado` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `mydb`.`cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbloja`.`cidade` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `mydb`.`bairro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbloja`.`bairro` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `mydb`.`rua`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbloja`.`rua` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `mydb`.`tipousuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbloja`.`tipousuario` (
  `id` INT NOT NULL,
  `tipo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbloja`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `cpf` VARCHAR(45) NOT NULL,
  `contato` VARCHAR(45) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  `estado_id` INT NOT NULL,
  `cidade_id` INT NOT NULL,
  `bairro_id` INT NOT NULL,
  `rua_id` INT NOT NULL,
  `tipousuario_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_usuario_estado1`
    FOREIGN KEY (`estado_id`)
    REFERENCES `dbloja`.`estado` (`id`),
  CONSTRAINT `fk_usuario_cidade1`
    FOREIGN KEY (`cidade_id`)
    REFERENCES `dbloja`.`cidade` (`id`),
  CONSTRAINT `fk_usuario_bairro1`
    FOREIGN KEY (`bairro_id`)
    REFERENCES `dbloja`.`bairro` (`id`),
  CONSTRAINT `fk_usuario_rua1`
    FOREIGN KEY (`rua_id`)
    REFERENCES `dbloja`.`rua` (`id`),
  CONSTRAINT `fk_usuario_tipousuario1`
    FOREIGN KEY (`tipousuario_id`)
    REFERENCES `dbloja`.`tipousuario` (`id`));


-- -----------------------------------------------------
-- Table `mydb`.`venda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbloja`.`venda` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `valor` DECIMAL(10,2) NOT NULL,
  `date` VARCHAR(45) NOT NULL,
  `usuario_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_venda_usuario1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `dbloja`.`usuario` (`id`));


-- -----------------------------------------------------
-- Table `mydb`.`products_has_venda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbloja`.`products_has_venda` (
  `products_id` INT NOT NULL,
  `venda_id` INT NOT NULL,
  `quantidade` INT NULL,
  PRIMARY KEY (`products_id`, `venda_id`),
  CONSTRAINT `fk_products_has_venda_products`
    FOREIGN KEY (`products_id`)
    REFERENCES `dbloja`.`products` (`id`),
  CONSTRAINT `fk_products_has_venda_venda1`
    FOREIGN KEY (`venda_id`)
    REFERENCES `dbloja`.`venda` (`id`));

insert into products(name, price, image, description, qtd) values ("Whey gold 1KG", 130.90, "images/wheygold.jpg", "A Whey Gold 100% Protein ON é uma proteína de alto valor biológico e é muito usada por atletas de rendimento, praticantes de atividade física e até idosos que pretendem minimizar a perda muscular que ocorre com o processo de envelhecimento.", 10);
  insert into products(name, price, image, description, qtd) values ("Whey Max Titanium 1KG", 110.00, "images/whey-max-titanium.jpg", "O 100% Whey Protein Max Titanium 900 g é um suplemento proteico à base de proteína concentrada do soro do leite. Possui alto valor biológico, sendo rico em BCAA.", 10);
  insert into tipousuario(id, tipo) values (1, "admin");
  insert into tipousuario(id, tipo) values (2, "professor");
  insert into tipousuario(id, tipo) values (3, "usuario");
  insert into estado(nome) values ("Parana");
  insert into estado(nome) values ("São Paulo");
  insert into estado(nome) values ("Santa Catarina");
  insert into cidade(nome) values ("Marechal Cândido Rondon");
  insert into cidade(nome) values ("Cascavel");
  insert into cidade(nome) values ("Toledo");
  insert into cidade(nome) values ("São Paulo");
  insert into cidade(nome) values ("Jundiaí");
  insert into cidade(nome) values ("Erexim");
  insert into cidade(nome) values ("Florianópolis");
  insert into bairro(nome) values ("Sao joao");
  insert into bairro(nome) values ("Vila mix");
  insert into bairro(nome) values ("Jose Pedro");
  insert into bairro(nome) values ("Mesquita");
  insert into bairro(nome) values ("Frankfurt");
  insert into rua(nome) values ("Curitiba");
  insert into rua(nome) values ("Rua Santos Dumont");
  insert into rua(nome) values ("Rua Espirito Santo");
  insert into rua(nome) values ("Rua Goias");
  insert into rua(nome) values ("Rua Belo Horizonte  ");
  insert into rua(nome) values ("Rua Dom Pedro II");

  insert into usuario(nome, cpf, contato, email, senha, estado_id, cidade_id, bairro_id, rua_id, tipousuario_id) values ("Marcos", 123456, 3333333, "admin", "admin", 1, 1, 5, 1, 1);
  insert into usuario(nome, cpf, contato, email, senha, estado_id, cidade_id, bairro_id, rua_id, tipousuario_id) values ("Fausto Silva", 123456, 3333333, "fausto", "fausto", 2, 3, 2, 4, 3);
