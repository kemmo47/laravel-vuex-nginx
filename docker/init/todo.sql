SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `tbl_todos` (
  `todo_id` int(11) NOT NULL,
  `todo_info` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `todo_check` int(11) NOT NULL,
  `todo_complete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tbl_todos` (`todo_id`, `todo_info`, `todo_check`, `todo_complete`) VALUES
(27, 'thong tin 2', 0, 0),
(28, 'cong viec moi nhat', 0, 0),
(29, 'cong viec 1', 0, 0),
(30, 'cong viec 2', 0, 0),
(31, 'cong viec 3', 0, 0);


ALTER TABLE `tbl_todos`
  ADD PRIMARY KEY (`todo_id`);

ALTER TABLE `tbl_todos`
  MODIFY `todo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

