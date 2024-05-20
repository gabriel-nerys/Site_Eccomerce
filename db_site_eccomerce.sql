-- criação do banco
create database db_site_eccomerce
default character set utf8
default collate utf8_general_ci;

use db_site_eccomerce;

-- criação de tabelas
create table tbl_categoria(
	cd_categoria int primary key auto_increment,
    ds_categoria varchar(25) not null
)default charset utf8;

select cd_categoria, ds_categoria from tbl_categoria where cd_categoria = 1;

select * from tbl_categoria;


create table tbl_marca(
	cd_marca int primary key auto_increment,
    nm_marca varchar(45) not null
)default charset utf8;

select ds_tenis_img from tbl_tenis where cd_tenis = 1;

create table tbl_tenis(
	cd_tenis int primary key auto_increment,
    cd_categoria int not null,
    nm_tenis varchar(70) not null,
    cd_marca int not null,
    no_med varchar(2) not null,
    vl_preco decimal(7,2) not null,
    qt_estoque int not null,
    ds_resumo_tenis text not null,
    ds_tenis_img varchar(255) not null,
    sg_lancamento enum('S','N') not null,
    constraint fk_cat foreign key(cd_categoria) references tbl_categoria(cd_categoria),
    constraint fk_marca foreign key(cd_marca) references tbl_marca(cd_marca)
)default charset utf8;

SELECT * FROM tbl_usuario;

update tbl_usuario set ds_status = 1 where cd_usuario = 3;

drop table tbl_tenis;

update tbl_tenis
set ds_tenis_img = 'wavecreation1.jpeg'
where cd_tenis = 18;

delete from tbl_tenis where cd_tenis = 29;

select * from tbl_tenis;
-- inserts

insert into tbl_tenis values
(default, '1', 'Air Max 95', '1', '40', '1000.00', '5', 'O Air Max 95 é um lendário tênis da Nike, reconhecido por seu design revolucionário e estiloso. Com seu distintivo sistema de amortecimento visível na entressola, o Air Max 95 proporciona excelente conforto e absorção de impacto.
','airmax','S'),

(default, '1', 'Air Max 90', '1', '40', '650.00', '4', 'O Air Max 90 é um tênis clássico da Nike, conhecido por sua estética icônica e conforto excepcional. Apresentando uma combinação de materiais duráveis no cabedal, incluindo couro e malha, o Air Max 90 oferece um ajuste confortável e respirável.
','airmax1','N'),

(default, '1', 'Air Force 1', '2', '40', '800.00', '8', 'O Air Force 1 é um icônico tênis da Nike, conhecido por seu design clássico e atemporal. Ele apresenta um cabedal de couro durável e uma sola de borracha resistente, proporcionando conforto e durabilidade.
','airforce','N'),

(default, '1', 'Air Force 1', '2', '40', '800.00', '8', 'O Air Force 1 é um icônico tênis da Nike, conhecido por seu design clássico e atemporal. Ele apresenta um cabedal de couro durável e uma sola de borracha resistente, proporcionando conforto e durabilidade.
','airforce1','N'),

(default, '1', 'Air Jordan 1', '3', '42', '1300.00', '2', 'O Air Jordan é um famoso tênis de basquete criado em parceria com a Nike e Michael Jordan. Reconhecido por seu design icônico e inovador, oferece ótimo desempenho e estilo. Com amortecimento e suporte de alta qualidade, proporciona conforto durante o jogo.
','airjordan','N'),

(default, '1', 'Air Jordan Cactus Jack', '3', '40', '1400.00', '2', 'O Air Jordan Low Cactus Jack é uma versão especial e estilizada do icônico tênis de basquete da Nike. Criado em colaboração com o rapper Travis Scott, apresenta um design único e distintivo. Com tecnologia de desempenho da Air Jordan.
','airjordan1','S'),

(default, '2', 'Ultraboost 1.0 DNA', '4', '42', '1299.99', '7', 'O tênis Ultraboost da Adidas é conhecido por seu conforto e amortecimento excepcionais. Com uma entressola repleta de cápsulas de espuma Boost, oferece um retorno de energia incrível a cada passo. Seu cabedal é leve e respirável, proporcionando um ajuste confortável.
','ultraboost','N'),

(default, '2', 'Ultraboost 1.0', '4', '41', '1299.99', '6', 'O tênis Ultraboost da Adidas é conhecido por seu conforto e amortecimento excepcionais. Com uma entressola repleta de cápsulas de espuma Boost, oferece um retorno de energia incrível a cada passo. Seu cabedal é leve e respirável, proporcionando um ajuste confortável.
','ultraboost1','N'),

(default, '2', 'Adidas NMD', '5', '39', '1000.00', '6', 'Os tênis Adidas NMD são conhecidos por sua combinação única de estilo, conforto e desempenho. Apresentam um design moderno e futurista, com uma entressola distinta e detalhes inovadores.
','nmd','N'),

(default, '2', 'Adidas NMD', '5', '41', '1000.00', '6', 'Os tênis Adidas NMD são conhecidos por sua combinação única de estilo, conforto e desempenho. Apresentam um design moderno e futurista, com uma entressola distinta e detalhes inovadores.
','nmd1','N'),

(default, '2', 'Stan Smith', '6', '41', '549.99', '6', 'A linha "Adidas Stan" é uma coleção de tênis inspirados no estilo clássico e minimalista do tenista profissional Stan Smith. Esses tênis apresentam um design clean, com cabedal de couro liso e as icônicas três listras da Adidas.
','stansmith','N'),

(default, '2', 'Stan Smith', '6', '41', '549.99', '6', 'A linha "Adidas Stan" é uma coleção de tênis inspirados no estilo clássico e minimalista do tenista profissional Stan Smith. Esses tênis apresentam um design clean, com cabedal de couro liso e as icônicas três listras da Adidas.
','stansmith1','N'),

(default, '3', 'Mizuno Prophecy 11', '7', '40', '1299.99', '12', 'O Mizuno Prophecy é um tênis de corrida altamente avançado, projetado para oferecer amortecimento superior e conforto excepcional. Com sua entressola macia e cabedal respirável, proporciona suporte e ajuste aos pés durante a corrida.
','mizunopro','N'),

(default, '3', 'Mizuno Prophecy 3', '7', '41', '1149.99', '12', 'O Mizuno Prophecy é um tênis de corrida altamente avançado, projetado para oferecer amortecimento superior e conforto excepcional. Com sua entressola macia e cabedal respirável, proporciona suporte e ajuste aos pés durante a corrida.
','mizunopro1','N'),

(default, '3', 'Mizuno Wave Rider 10', '8', '40', '1099.99', '3', 'O Mizuno Wave é um tênis de corrida conhecido por sua tecnologia inovadora e desempenho excepcional. Com sua entressola Wave, oferece amortecimento responsivo e estabilidade durante a corrida.
','waverider','S'),

(default, '3', 'Mizuno Wave Rider 26', '8', '43', '699.99', '5', 'O Mizuno Wave é um tênis de corrida conhecido por sua tecnologia inovadora e desempenho excepcional. Com sua entressola Wave, oferece amortecimento responsivo e estabilidade durante a corrida.
','waverider1','N'),

(default, '3', 'Mizuno Wave Creation 22', '9', '40', '799.69', '9', 'O Mizuno Wave é um tênis de corrida conhecido por sua tecnologia inovadora e desempenho excepcional. Com sua entressola Wave, oferece amortecimento responsivo e estabilidade durante a corrida.
','wavecreation','N'),

(default, '3', 'Mizuno Wave Creation 24', '9', '40', '999.99', '10', 'O Mizuno Wave é um tênis de corrida conhecido por sua tecnologia inovadora e desempenho excepcional. Com sua entressola Wave, oferece amortecimento responsivo e estabilidade durante a corrida.
','wavecreation1','N');

select * from tbl_tenis;

update tbl_tenis
set qt_estoque = '0'
where cd_tenis = 8;

insert into tbl_categoria values
(default,'Nike'),(default,'Adidas'),(default,'Mizuno');

insert into tbl_marca values
(default,'Air Max'),(default,'Air Force1'),
(default,'Air Jordan'),(default,'Ultraboost'),
(default,'NMD'),(default,'Stan Smith'),
(default,'Mizuno Pro'),(default,'Wave Rider'),
(default,'Wave Creation');

-- inner join

create view vw_tenis as
select
		tbl_tenis.cd_tenis,        
        tbl_categoria.ds_categoria,
        tbl_tenis.nm_tenis,
        tbl_marca.nm_marca,
        tbl_tenis.no_med,
        tbl_tenis.vl_preco,
        tbl_tenis.qt_estoque,
        tbl_tenis.ds_resumo_tenis,
        tbl_tenis.ds_tenis_img,
        tbl_tenis.sg_lancamento
from tbl_tenis inner join tbl_marca on tbl_tenis.cd_marca = tbl_marca.cd_marca
inner join tbl_categoria on tbl_tenis.cd_categoria = tbl_categoria.cd_categoria;

select nm_tenis,vl_preco from vw_tenis where ds_categoria = 'Nike';

-- criando usuario de login

create table tbl_usuario(
	cd_usuario int primary key auto_increment,
    nm_usuario varchar(80) not null,
    ds_email varchar(80) not null,
    ds_senha varchar(6) not null,
    ds_status boolean not null,
    ds_endereco varchar(80) not null,
    ds_cidade varchar(30) not null,
    no_cep char(9) not null
)default charset utf8;

insert into tbl_usuario 
values(default,'gabriel','gabriel@gmail.com','123456',1,'rua pardal 157','São Paulo','05108030');

insert into tbl_usuario 
values(default,'leo','leo@gmail.com','123456',0,'rua sandoval 157','São Paulo','032098789');

select * from tbl_usuario;

create user 'programador'@'localhost' identified with mysql_native_password by '123456';
grant all privileges on db_site_eccomerce.* to 'programador'@'localhost' with grant option;


