-- truncate table product 
-- drop table product

-- truncate table category
-- drop table category 

-- select * from product
-- select * from category
use database dbinnyx

create table if not exists category(
	id int auto_increment not null, 
	name varchar(100),
	create_data timestamp,
	primary key (id)
);


create table if not exists product(
	id int auto_increment not null, 
	name varchar(50), 
	description varchar(200), 
	price double, 
	data_val date, 
	image text, 
	id_category int(100),
	create_data timestamp,
	primary key (id), 
	constraint fk_id_cetegory foreign key (id_category) references category(id)
);

insert into category
values(default, 'Acessórios para Celular', now()),
(default, 'Acessórios de Informática', now()),
(default, 'Acessórios TV', now()),
(default, 'Acessórios Carros', now())


insert into product 
values (default, 'Teclado', 'Teclado externo para computador', '125', '2024-06-01', 'caminho da imagem', 2, now()),
(default, 'Fone de ouvido', 'Fone para celular', '75', '2024-06-01', 'caminho da imagem', 1, now()),
(default, 'Capinha', 'Capinha para celular', '35', '2024-09-01', 'caminho da imagem', 1, now()),
(default, 'Tripé', 'Tripé para filmar 60cm', '135', '2024-06-01', 'caminho da imagem', 1, now()),
(default, 'Película', 'Película para celular', '82', '2024-05-01', 'caminho da imagem', 1, now()),
(default, 'Protetor de celular', 'Protetor de celular inpermeável', '120', '2024-11-18', 'caminho da imagem', 1, now()),
(default, 'Mouse Wi-fi', 'Mouse sem fio Wi-fi', '78', '2024-02-15', 'caminho da imagem', 2, now()),
(default, 'Óculos 3D', 'Óculos especiais 3D', '320', '2025-03-08', 'caminho da imagem', 2, now()),
(default, 'Projetor de tela', 'Projetos especial para tela de notebook', '410', '2023-11-08', 'caminho da imagem', 2, now()),
(default, 'Antena UHF', 'Antena para TV Digital', '42', '2025-11-08', 'caminho da imagem', 3, now()),
(default, 'Suporte de parede', 'Suporte para segurar TV na parede', '230', '2026-09-10', 'caminho da imagem', 3, now()),
(default, 'Controle', 'Controle universal para TV', '38', '2025-03-28', 'caminho da imagem', 3, now()),
(default, 'Suporte para celular', 'Suporte para segurar o celular Uber', '28', '2026-11-15', 'caminho da imagem', 4, now()),
(default, 'Envelopameto', 'Envelopes especiais para carros', '80', '2026-02-18', 'caminho da imagem', 4, now()),
(default, 'Ventilador', 'Ventilador pequeno para motorista', '55', '2026-04-25', 'caminho da imagem', 4, now()),
(default, 'Almofada de assento', 'Almofada confortável para bancos', '260', '2028-12-25', 'caminho da imagem', 4, now())