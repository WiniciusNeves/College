CREATE TABLE Pet (id INT PRIMARY KEY auto_increment, nome_pet VARCHAR(255), tipo_pet VARCHAR(255), raca_pet VARCHAR(255), idade_pet INT, dono_pet VARCHAR(255));

CREATE TABLE Dono (id INT PRIMARY KEY auto_increment, dono_pet VARCHAR(255), telefone VARCHAR(255), email VARCHAR(255), nome_pet VARCHAR(255));
