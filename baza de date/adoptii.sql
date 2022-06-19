-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: iun. 19, 2022 la 10:28 PM
-- Versiune server: 10.4.24-MariaDB
-- Versiune PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `adoptii`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `administratori`
--

CREATE TABLE `administratori` (
  `id_administrator` varchar(255) NOT NULL,
  `nume` varchar(255) NOT NULL,
  `prenume` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `parola` varchar(255) NOT NULL,
  `telefon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `administratori`
--

INSERT INTO `administratori` (`id_administrator`, `nume`, `prenume`, `email`, `parola`, `telefon`) VALUES
('1', 'Diana', 'Hasna', 'diana.hasna00@e-uvt.ro', '123456789', '0761959262');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `adoptii`
--

CREATE TABLE `adoptii` (
  `id_adoptie` varchar(255) NOT NULL,
  `id_utilizator` varchar(255) NOT NULL,
  `id_animal` varchar(255) NOT NULL,
  `data_adoptie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `animale`
--

CREATE TABLE `animale` (
  `id_animal` varchar(255) NOT NULL,
  `nume` varchar(255) NOT NULL,
  `tip_animal` varchar(255) NOT NULL,
  `rasa` varchar(255) NOT NULL,
  `gen` varchar(255) NOT NULL,
  `varsta` varchar(255) NOT NULL,
  `mediu_viata` varchar(255) NOT NULL,
  `acomodabil` varchar(255) NOT NULL,
  `descriere` text NOT NULL,
  `adoptat` varchar(255) NOT NULL,
  `imagine_ref` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `animale`
--

INSERT INTO `animale` (`id_animal`, `nume`, `tip_animal`, `rasa`, `gen`, `varsta`, `mediu_viata`, `acomodabil`, `descriere`, `adoptat`, `imagine_ref`) VALUES
('2', 'Cora', 'Caine', 'Bichon', 'F', '4', 'Casa si bloc', 'da', '\r\n        Animalul este prietenos cu toata lumea            ', 'nu', '../incarcari/imagine2.jpg'),
('3', 'Sasha', 'Caine', 'Pechinez', 'F', '10', 'Bloc', 'da', 'Animalul are o problema care se poate vedea pe fisa medicala\r\n                    ', 'nu', '../incarcari/no_image.jpg');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `anunturi`
--

CREATE TABLE `anunturi` (
  `id_anunt` varchar(255) NOT NULL,
  `id_utilizator` varchar(255) NOT NULL,
  `titlu` varchar(255) NOT NULL,
  `descriere` varchar(255) NOT NULL,
  `imagine_ref` varchar(255) NOT NULL,
  `tip_anunt` varchar(255) NOT NULL,
  `locatie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `anunturi`
--

INSERT INTO `anunturi` (`id_anunt`, `id_utilizator`, `titlu`, `descriere`, `imagine_ref`, `tip_anunt`, `locatie`) VALUES
('1', '1', 'Caut pisica', '\r\n                    Buna ziua, caut o pisica', '../incarcari/no_image.jpg', 'cautare_animal_nou', 'Timisoara'),
('2', '2', 'Caut un catel pierdut', 'Buna ziua, am pierdut un caine in zona centrala a orasului\r\n                    ', '../incarcari/fundal2.jpg', 'cautare_animal_pierdut', 'Timisoara');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `boli`
--

CREATE TABLE `boli` (
  `id_boala` varchar(255) NOT NULL,
  `nume_boala` varchar(255) NOT NULL,
  `durata` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `boli`
--

INSERT INTO `boli` (`id_boala`, `nume_boala`, `durata`) VALUES
('1', 'raceala acuta', 'doua saptamani'),
('2', 'Babesioza', 'o luna si 3 saptamani'),
('3', 'Infestare cu pureci', 'trei saptamani'),
('4', 'Paralizie', '');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `fisa_medicala`
--

CREATE TABLE `fisa_medicala` (
  `id_fisa` varchar(255) NOT NULL,
  `id_animal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `fisa_medicala`
--

INSERT INTO `fisa_medicala` (`id_fisa`, `id_animal`) VALUES
('2', '2'),
('1', '3');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `mapare_boala_medicament`
--

CREATE TABLE `mapare_boala_medicament` (
  `id_mapare` varchar(255) NOT NULL,
  `id_boala` varchar(255) NOT NULL,
  `id_medicament` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `mapare_boala_medicament`
--

INSERT INTO `mapare_boala_medicament` (`id_mapare`, `id_boala`, `id_medicament`) VALUES
('1', '1', '6'),
('2', '1', '7'),
('3', '3', '5'),
('4', '2', '3'),
('5', '2', '2'),
('6', '2', '4');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `mapare_fisa_boala`
--

CREATE TABLE `mapare_fisa_boala` (
  `id_mapare` varchar(255) NOT NULL,
  `id_fisa` varchar(255) NOT NULL,
  `id_boala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `mapare_fisa_boala`
--

INSERT INTO `mapare_fisa_boala` (`id_mapare`, `id_fisa`, `id_boala`) VALUES
('1', '1', '4'),
('2', '2', '3'),
('3', '2', '1');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `medicamente`
--

CREATE TABLE `medicamente` (
  `id_medicament` varchar(255) NOT NULL,
  `denumire` varchar(255) NOT NULL,
  `ratie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `medicamente`
--

INSERT INTO `medicamente` (`id_medicament`, `denumire`, `ratie`) VALUES
('1', 'CystoPro', '1 pe zi'),
('2', 'Aptus', '2 pe zi'),
('3', 'ProMax', '1 la doua zile'),
('4', 'Scipet', '2 pe saptamana'),
('5', 'Parakill', 'o data la 3 zile'),
('6', 'Parasinus', 'o data pe zi'),
('7', 'Strepsils', 'o pastila pe zi');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `parole_securitate`
--

CREATE TABLE `parole_securitate` (
  `parola1` varchar(255) NOT NULL,
  `parola2` varchar(255) NOT NULL,
  `parola3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `parole_securitate`
--

INSERT INTO `parole_securitate` (`parola1`, `parola2`, `parola3`) VALUES
('123', '456', '789');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `semnalari`
--

CREATE TABLE `semnalari` (
  `id_semnalare` varchar(255) NOT NULL,
  `id_utilizator` varchar(255) NOT NULL,
  `tip_semnalare` varchar(255) NOT NULL,
  `locatie` varchar(255) NOT NULL,
  `descriere` text NOT NULL,
  `tip_animal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `semnalari`
--

INSERT INTO `semnalari` (`id_semnalare`, `id_utilizator`, `tip_semnalare`, `locatie`, `descriere`, `tip_animal`) VALUES
('1', '1', 'abuz', 'Strada Mures, Timisoara', 'Am gasit un animal abuzat\n                    ', 'pisica'),
('2', '1', 'abandon', 'Ploiesti', '\r\n                    Buna ziua, am gasit o pisica abandonata pe sosea langa oras', 'pisica'),
('3', '2', 'abandon', 'Deva', 'Buna ziua, am gasit abandonate 3 catei pe marginea soselei\r\n                    ', 'caine');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `utilizatori`
--

CREATE TABLE `utilizatori` (
  `id_utilizator` varchar(255) NOT NULL,
  `nume` varchar(255) NOT NULL,
  `prenume` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `parola` varchar(255) NOT NULL,
  `telefon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `utilizatori`
--

INSERT INTO `utilizatori` (`id_utilizator`, `nume`, `prenume`, `email`, `parola`, `telefon`) VALUES
('1', 'Andrei', 'Andrei', 'andrei.pop@gmail.com', '123456789', '0761959267'),
('2', 'Utilizator', 'Norbert', 'user2@gmail.com', '123456789', '0761234567');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `administratori`
--
ALTER TABLE `administratori`
  ADD PRIMARY KEY (`id_administrator`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexuri pentru tabele `adoptii`
--
ALTER TABLE `adoptii`
  ADD PRIMARY KEY (`id_adoptie`);

--
-- Indexuri pentru tabele `animale`
--
ALTER TABLE `animale`
  ADD PRIMARY KEY (`id_animal`);

--
-- Indexuri pentru tabele `anunturi`
--
ALTER TABLE `anunturi`
  ADD PRIMARY KEY (`id_anunt`),
  ADD KEY `id_utilizator` (`id_utilizator`);

--
-- Indexuri pentru tabele `boli`
--
ALTER TABLE `boli`
  ADD PRIMARY KEY (`id_boala`);

--
-- Indexuri pentru tabele `fisa_medicala`
--
ALTER TABLE `fisa_medicala`
  ADD PRIMARY KEY (`id_fisa`),
  ADD KEY `id_animal` (`id_animal`);

--
-- Indexuri pentru tabele `mapare_boala_medicament`
--
ALTER TABLE `mapare_boala_medicament`
  ADD PRIMARY KEY (`id_mapare`);

--
-- Indexuri pentru tabele `mapare_fisa_boala`
--
ALTER TABLE `mapare_fisa_boala`
  ADD PRIMARY KEY (`id_mapare`);

--
-- Indexuri pentru tabele `medicamente`
--
ALTER TABLE `medicamente`
  ADD PRIMARY KEY (`id_medicament`);

--
-- Indexuri pentru tabele `semnalari`
--
ALTER TABLE `semnalari`
  ADD PRIMARY KEY (`id_semnalare`);

--
-- Indexuri pentru tabele `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`id_utilizator`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
