--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.4
-- Dumped by pg_dump version 9.5.4

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: becario; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE becario (
    id integer NOT NULL,
    nombre character varying(50) NOT NULL,
    id_programa integer
);


ALTER TABLE becario OWNER TO postgres;

--
-- Name: becario_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE becario_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE becario_id_seq OWNER TO postgres;

--
-- Name: becario_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE becario_id_seq OWNED BY becario.id;


--
-- Name: programa; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE programa (
    id integer NOT NULL,
    nombre character varying(50) NOT NULL,
    pais character varying(50) NOT NULL
);


ALTER TABLE programa OWNER TO postgres;

--
-- Name: programa_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE programa_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE programa_id_seq OWNER TO postgres;

--
-- Name: programa_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE programa_id_seq OWNED BY programa.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY becario ALTER COLUMN id SET DEFAULT nextval('becario_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY programa ALTER COLUMN id SET DEFAULT nextval('programa_id_seq'::regclass);


--
-- Data for Name: becario; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY becario (id, nombre, id_programa) FROM stdin;
2	Xavier Aguirre	1
3	Richard Mcloud 	2
\.


--
-- Name: becario_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('becario_id_seq', 5, true);


--
-- Data for Name: programa; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY programa (id, nombre, pais) FROM stdin;
1	IECE	ECUADOR
2	WORLD_FUNDATION	EEUU
7	SAN FRON	Nicaragua
\.


--
-- Name: programa_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('programa_id_seq', 7, true);


--
-- Name: PK_BECARIO; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY becario
    ADD CONSTRAINT "PK_BECARIO" PRIMARY KEY (id);


--
-- Name: PK_PROGRAMA; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY programa
    ADD CONSTRAINT "PK_PROGRAMA" PRIMARY KEY (id);


--
-- Name: FK_BECARIO_PROGRAMA; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY becario
    ADD CONSTRAINT "FK_BECARIO_PROGRAMA" FOREIGN KEY (id_programa) REFERENCES programa(id);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

