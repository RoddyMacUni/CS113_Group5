SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: mkb22202
-- Change the !!!USER!!! word with your phpmyadmin username before importing this
-- ######################################################################################################################
CREATE DATABASE IF NOT EXISTS !!!USER!!! DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE !!!USER!!!;
-- ######################################################################################################################


-- --------------------------------------------------------

--
-- Table structure for table cs113_group5_progression
--

CREATE TABLE cs113_group5_progression (
                                          username varchar(20) NOT NULL,
                                          completed_lesson_name varchar(50) NOT NULL COMMENT 'Not the best solution but will work for what we''re doing'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table cs113_group5_users
--

CREATE TABLE cs113_group5_users (
                                    username varchar(20) NOT NULL,
                                    password_hash varchar(50) NOT NULL COMMENT 'The password ABSOLUTELY has to be hashed before being sent to the database',
                                    XP int NOT NULL COMMENT 'The amount of XP the user has accrued'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table cs113_group5_user_role
--

CREATE TABLE cs113_group5_user_role (
                                        username varchar(20) NOT NULL,
                                        role_name varchar(20) NOT NULL COMMENT 'Either student, admin or parent'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for table cs113_group5_progression
--
ALTER TABLE cs113_group5_progression
    ADD KEY username (username);

--
-- Indexes for table cs113_group5_users
--
ALTER TABLE cs113_group5_users
    ADD PRIMARY KEY (username);

--
-- Indexes for table cs113_group5_user_role
--
ALTER TABLE cs113_group5_user_role
    ADD KEY username (username);

--
-- Constraints for table cs113_group5_progression
--
ALTER TABLE cs113_group5_progression
    ADD CONSTRAINT cs113_group5_progression_ibfk_1 FOREIGN KEY (username) REFERENCES cs113_group5_users (username) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table cs113_group5_user_role
--
ALTER TABLE cs113_group5_user_role
    ADD CONSTRAINT cs113_group5_user_role_ibfk_1 FOREIGN KEY (username) REFERENCES cs113_group5_users (username) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
