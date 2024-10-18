DROP SCHEMA IF EXISTS imobilizado;
CREATE SCHEMA imobilizado;
USE imobilizado;

CREATE TABLE FILIAL(
	ID int auto_increment primary key,
    NOME_FILIAL varchar(255),
    CNPJ varchar(14),
    ESTADO char(2),
    CIDADE varchar(255),
    BAIRRO varchar(255),
    RUA varchar(255),
    NUMERO int
);

CREATE TABLE CATEGORIA(
	ID int auto_increment primary key,
    DESCRICAO varchar(255)
);

CREATE TABLE SETOR(
	ID int auto_increment primary key,
    DESCRICAO_SETOR varchar(255)
);

CREATE TABLE SETOR_FILIAL(
    ID int auto_increment primary key,
	SETOR_ID int not null,
    FILIAL_ID int not null,
    FOREIGN KEY (SETOR_ID) REFERENCES SETOR(ID),
    FOREIGN KEY (FILIAL_ID) REFERENCES FILIAL(ID)
);

CREATE TABLE ATIVO(
	ID int auto_increment primary key,
    FILIAL_ID int not null,
    SETOR_ID int not null,
    CATEGORIA_ID int not null,
    DESCRICAO varchar(255) not null,
    DATA_CADASTRO datetime not null,
    DATA_AQUISICAO datetime not null,
    VIDA_UTIL int,
    CONDICAO int,
    ESTADO_ATIVO int,
    VALOR float not null,
    FOREIGN KEY (FILIAL_ID) REFERENCES FILIAL(ID),
    FOREIGN KEY (SETOR_ID) REFERENCES SETOR(ID),
    FOREIGN KEY (CATEGORIA_ID) REFERENCES CATEGORIA(ID)
);

CREATE TABLE TRANSFERENCIA(
	ATIVO_ID int not null,
    FILIAL_ORIGEM_ID int not null,
    SETOR_ORIGEM_ID int not null,
    FILIAL_DESTINO_ID int not null,
    SETOR_DESTINO_ID int not null,
    DATA_TRANSFERENCIA datetime not null,
    FOREIGN KEY (ATIVO_ID) REFERENCES ATIVO(ID),
    FOREIGN KEY (FILIAL_ORIGEM_ID) REFERENCES FILIAL(ID),
    FOREIGN KEY (SETOR_ORIGEM_ID) REFERENCES SETOR(ID),
    FOREIGN KEY (FILIAL_DESTINO_ID) REFERENCES FILIAL(ID),
    FOREIGN KEY (SETOR_DESTINO_ID) REFERENCES SETOR(ID)
);