-- TABLE actualiter
CREATE TABLE actualiter (
    id SERIAL PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    photo VARCHAR(255),
    date_pub TIMESTAMP DEFAULT NOW()
);

-- TABLE admin
CREATE TABLE admin (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(150) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- INSERT administrateur (le nom sera modifié après)
INSERT INTO admin(nom, email, password)
VALUES ('{NOM_ADMIN}', 'admin2025@iuc.com', 'adminIUC');

-- TABLE filiere_iuc
CREATE TABLE filiere_iuc (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    description TEXT,
    info_deb VARCHAR(255),
    scolarite DOUBLE PRECISION,
    type VARCHAR(150)
);

-- Exemple d'insertion dans actualiter
INSERT INTO actualiter(titre, description, photo)
VALUES ('Titre exemple', 'Description ici...', 'mon_image.jpg');
