-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Sty 2022, 16:34
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `detective_peng`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cases`
--

CREATE TABLE `cases` (
  `ID` int(100) NOT NULL,
  `ID_client` int(100) NOT NULL,
  `casenumber` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `comment` text COLLATE utf8_polish_ci NOT NULL,
  `add_date` date DEFAULT NULL,
  `consultation` date DEFAULT NULL,
  `close_date` date NOT NULL,
  `paid` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `client`
--

CREATE TABLE `client` (
  `ID` int(100) NOT NULL,
  `ID_user` int(100) NOT NULL,
  `comment` text COLLATE utf8_polish_ci DEFAULT NULL,
  `postcode` varchar(6) COLLATE utf8_polish_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `street` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `apartnumber` varchar(5) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `document`
--

CREATE TABLE `document` (
  `ID` int(100) NOT NULL,
  `docnumber` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `comment` text COLLATE utf8_polish_ci DEFAULT NULL,
  `file` varchar(2083) COLLATE utf8_polish_ci NOT NULL,
  `add_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `employee`
--

CREATE TABLE `employee` (
  `ID` int(100) NOT NULL,
  `ID_user` int(100) NOT NULL,
  `PESEL` varchar(11) COLLATE utf8_polish_ci NOT NULL,
  `salary` double NOT NULL,
  `position` enum('szef','detektyw','konsultant') COLLATE utf8_polish_ci NOT NULL,
  `licence_number` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `postcode` varchar(6) COLLATE utf8_polish_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `street` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `apartnumber` varchar(10) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `employee_in_cases`
--

CREATE TABLE `employee_in_cases` (
  `ID_emp` int(100) DEFAULT NULL,
  `ID_case` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `service`
--

CREATE TABLE `service` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `description` text COLLATE utf8_polish_ci NOT NULL,
  `cost` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `service`
--

INSERT INTO `service` (`ID`, `name`, `description`, `cost`) VALUES
(1, 'Konsultacja detektywistyczna', 'Umów się na bezpłatną konsultację telefoniczną i opowiedz o swojej sytuacji. Dopasujemy się do Twoich możliwości i znajdziemy najlepsze rozwiązanie.', 0),
(2, 'Obserwacja osoby', 'Udowodnienie komuś bliskiemu nielojalności lub zdrady nie jest sprawą łatwą. Dla tych, którzy chcą dojść prawdy, śledzenie na własną rękę męża lub żony jest dodatkowo bardzo obciążające psychicznie i emocjonalnie. Dlatego obserwację osób, względem których żywimy silne uczucia i równie silne podejrzenia warto powierzyć profesjonalistom.', 800),
(3, 'Ustalenie numeru PESEL', 'Wymagane dodatkowe informacje (np. imiona rodziców, miejsce urodzenia, adres zameldowania).', 750),
(4, 'Ustalenie właściciela pojazdu', '', 750),
(5, 'Badanie wariografem (wykrywacz kłamstw)', 'Istnieją sytuacje, w których dotarcie do prawdy jest niezwykle trudne. Dotyczy to zarówno życia prywatnego, jak i zawodowego. Właśnie dlatego tak dużo osób decyduje się podpiąć pod wariograf. Cena w porównaniu do korzyści, jakie można zyskać, jest naprawdę przystępna. Należy podkreślić, że badanie wariografem ukazuje prawdę, a nieraz pozwala oczyścić się z zarzutów.', 1500),
(6, 'Ustalenie majątkowe posiadanych i zbytych nierucho', 'Sprawy majątkowe wymagają nie tylko przygotowania detektywistycznego. W praktyce, aby się nimi zajmować potrzeba wiedzy prawnej, finansowej i ekonomicznej. Niezbędna jest też cierpliwość, gdyż praca nad nimi jest często czasochłonna i żmudna.', 700),
(7, 'Poszukiwanie osób zaginionych', 'Każdego roku policja odnotowuje kilkanaście tysięcy zaginięć. Każdego z nas może spotkać taka sytuacja, gdy ktoś z rodziny, znajomych zaginie z dnia na dzień. Zaginąć może każdy niezależnie od płci, wieku, wykształcenia. Najważniejsze, by w takich sytuacjach zacząć jak najszybciej działać.', NULL),
(8, 'Ustalenie miejsca faktycznego zamieszkania', 'Alternatywnie możliwa obserwacja liczona wg. stawki godzinowej.', 1600),
(9, 'Obserwacja osób poza terytorium RP', 'Udowodnienie komuś bliskiemu nielojalności lub zdrady nie jest sprawą łatwą. Dla tych, którzy chcą dojść prawdy, śledzenie na własną rękę męża lub żony jest dodatkowo bardzo obciążające psychicznie i emocjonalnie. Dlatego obserwację osób, względem których żywimy silne uczucia i równie silne podejrzenia warto powierzyć profesjonalistom.', NULL),
(10, 'Sporządzanie stenogramów z nagrań audio i video', 'Posiadanie dowodów nie zawsze gwarantuje pomyślne zakończenie procesu. Olbrzymie znaczenie może mieć odpowiednie przygotowanie zebranego materiału. Warto zlecić to profesjonalistom.', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `services_in_case`
--

CREATE TABLE `services_in_case` (
  `ID_case` int(100) NOT NULL,
  `ID_service` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `used_docs`
--

CREATE TABLE `used_docs` (
  `ID_case` int(100) DEFAULT NULL,
  `ID_doc` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `ID` int(100) NOT NULL,
  `email` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `passwd` varchar(60) COLLATE utf8_polish_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `last_accessed` date NOT NULL,
  `verified` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `casenumber` (`casenumber`),
  ADD KEY `ID_client` (`ID_client`);

--
-- Indeksy dla tabeli `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_user` (`ID_user`);

--
-- Indeksy dla tabeli `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`ID`) USING BTREE,
  ADD UNIQUE KEY `docnumber` (`docnumber`);

--
-- Indeksy dla tabeli `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_user` (`ID_user`);

--
-- Indeksy dla tabeli `employee_in_cases`
--
ALTER TABLE `employee_in_cases`
  ADD KEY `ID_emp` (`ID_emp`),
  ADD KEY `ID_case` (`ID_case`);

--
-- Indeksy dla tabeli `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indeksy dla tabeli `services_in_case`
--
ALTER TABLE `services_in_case`
  ADD KEY `ID_case` (`ID_case`),
  ADD KEY `ID_service` (`ID_service`);

--
-- Indeksy dla tabeli `used_docs`
--
ALTER TABLE `used_docs`
  ADD KEY `ID_case` (`ID_case`),
  ADD KEY `ID_doc` (`ID_doc`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `cases`
--
ALTER TABLE `cases`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `client`
--
ALTER TABLE `client`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `document`
--
ALTER TABLE `document`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `employee`
--
ALTER TABLE `employee`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `service`
--
ALTER TABLE `service`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `cases`
--
ALTER TABLE `cases`
  ADD CONSTRAINT `cases_ibfk_1` FOREIGN KEY (`ID_client`) REFERENCES `client` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `employee_in_cases`
--
ALTER TABLE `employee_in_cases`
  ADD CONSTRAINT `employee_in_cases_ibfk_1` FOREIGN KEY (`ID_case`) REFERENCES `cases` (`ID`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_in_cases_ibfk_2` FOREIGN KEY (`ID_emp`) REFERENCES `employee` (`ID`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `services_in_case`
--
ALTER TABLE `services_in_case`
  ADD CONSTRAINT `services_in_case_ibfk_1` FOREIGN KEY (`ID_case`) REFERENCES `cases` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `services_in_case_ibfk_2` FOREIGN KEY (`ID_service`) REFERENCES `service` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `used_docs`
--
ALTER TABLE `used_docs`
  ADD CONSTRAINT `used_docs_ibfk_1` FOREIGN KEY (`ID_case`) REFERENCES `cases` (`ID`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `used_docs_ibfk_2` FOREIGN KEY (`ID_doc`) REFERENCES `document` (`ID`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
