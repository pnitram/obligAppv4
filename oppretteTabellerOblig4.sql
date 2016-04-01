
CREATE TABLE klasse (
klassekode VARCHAR(15) NOT NULL,
klassenavn VARCHAR(50) NOT NULL,
CONSTRAINT pk_klasse PRIMARY KEY (klassekode)
);

CREATE TABLE bilde (
bildenr CHAR(3) NOT NULL,
opplastingsdato CHAR(10) NOT NULL,
filnavn VARCHAR(50) NOT NULL,
beskrivelse VARCHAR(50) NOT NULL,
CONSTRAINT pk_bilde PRIMARY KEY (bildenr)
);

CREATE TABLE student (
brukernavn VARCHAR(15) NOT NULL,
fornavn VARCHAR(50) NOT NULL,
etternavn VARCHAR(50) NOT NULL,
klassekode VARCHAR(15) NOT NULL,
frist CHAR(10) NOT NULL,
bildenr CHAR(3),
CONSTRAINT pk_student PRIMARY KEY (brukernavn),
CONSTRAINT fk_bildenr FOREIGN KEY (bildenr) REFERENCES bilde (bildenr),
CONSTRAINT fk_klassekode FOREIGN KEY (klassekode) REFERENCES klasse (klassekode)
);
