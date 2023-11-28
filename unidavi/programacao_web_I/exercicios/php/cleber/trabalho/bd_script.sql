-- Database: trabalho_pw2

-- DROP DATABASE IF EXISTS trabalho_pw2;

CREATE DATABASE trabalho_pw2
    WITH
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'C'
    LC_CTYPE = 'C'
    LOCALE_PROVIDER = 'libc'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1
    IS_TEMPLATE = False;


-- Table: public.pessoa

-- DROP TABLE IF EXISTS public.pessoa;

CREATE TABLE IF NOT EXISTS public.pessoa
(
    id integer NOT NULL DEFAULT nextval('pessoa_id_seq'::regclass),
    nome character varying(30) COLLATE pg_catalog."default",
    sobrenome character varying(50) COLLATE pg_catalog."default",
    data_nascimento date,
    email text COLLATE pg_catalog."default",
    senha character varying(8) COLLATE pg_catalog."default",
    CONSTRAINT pk_pessoa PRIMARY KEY (id),
    CONSTRAINT pessoa_email_key UNIQUE (email)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.pessoa
    OWNER to postgres;