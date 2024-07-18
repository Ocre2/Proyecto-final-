CREATE DATABASE blog;

CREATE TABLE Book (
                      id INT AUTO_INCREMENT PRIMARY KEY,
                      name VARCHAR(255),
                      description TEXT,
                      image VARCHAR(255)
);

CREATE TABLE Poem (
                      id INT AUTO_INCREMENT PRIMARY KEY,
                      title VARCHAR(255),
                      content TEXT,
                      image VARCHAR(255)
);

INSERT INTO Book (name, description, image) VALUES
                                                ('The Catcher in the Rye', 'A novel by J. D. Salinger, partially published in serial form in 1945–1946 and as a novel in 1951.', 'https://i.ibb.co/y8BqTKD/Any2.jpg'),
                                                ('Pride and Prejudice', 'A romantic novel of manners written by Jane Austen in 1813.', 'https://i.ibb.co/vYtR1FJ/Any-Libro-Boca.jpg');

INSERT INTO Poem (title, content, image) VALUES
                                             ('Ozymandias', 'I met a traveller from an antique land Who said: Two vast and trunkless legs of stone Stand in the desert...', 'https://i.ibb.co/mhbnxyH/img9.jpg'),
                                             ('Sonnet 18', 'Shall I compare thee to a summer\'s day? Thou art more lovely and more temperate...', 'https://i.ibb.co/xz0LL0q/PORTADA-DIGITAL-1.jpg ');

