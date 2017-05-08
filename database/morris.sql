
SET FOREIGN_KEY_CHECKS=0;

DROP DATABASE IF EXISTS analytic;

CREATE DATABASE analytic
  CHARACTER SET latin1
  COLLATE latin1_swedish_ci;

USE analytic;

/* Tables */
DROP TABLE IF EXISTS totalview;

CREATE TABLE totalview (
  id         int AUTO_INCREMENT NOT NULL,
  visitdate  datetime NOT NULL,
  pagefrom   varchar(100) NOT NULL,
  ip         varchar(30) NOT NULL,
  pageno     int NOT NULL,
  browser    varchar(200) NOT NULL,
  page       varchar(100) NOT NULL,
  PRIMARY KEY (id)
) ENGINE = InnoDB;

/* Indexes */
CREATE INDEX totalview_idx_page01
  ON totalview
  (page);

/* Data for table "totalview" */
INSERT INTO totalview (id, visitdate, pagefrom, ip, pageno, browser, page) VALUES
  (1, '2016-11-25 04:29:26', 'private.localhost', '127.0.0.1', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page2.php'),
  (2, '2016-12-03 04:29:26', 'private.localhost', '127.0.0.1', 2, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page1.php'),
  (3, '2016-12-06 04:29:27', 'private.localhost', '127.0.0.1', 3, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page2.php'),
  (4, '2016-12-08 04:29:28', 'private.localhost', '127.0.0.1', 4, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page1.php'),
  (5, '2016-12-09 04:29:29', 'private.localhost', '127.0.0.1', 5, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page2.php'),
  (6, '2016-12-09 04:29:30', 'private.localhost', '127.0.0.1', 6, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page1.php'),
  (7, '2016-12-10 04:29:30', 'private.localhost', '127.0.0.1', 7, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page2.php'),
  (8, '2016-12-10 04:29:31', 'private.localhost', '127.0.0.1', 8, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page1.php'),
  (9, '2016-12-11 04:29:31', 'private.localhost', '127.0.0.1', 9, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page2.php'),
  (10, '2016-12-11 04:29:32', 'private.localhost', '127.0.0.1', 10, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page1.php'),
  (11, '2016-12-11 04:29:33', 'private.localhost', '127.0.0.1', 11, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page2.php'),
  (12, '2016-12-11 04:29:33', 'private.localhost', '127.0.0.1', 12, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page1.php'),
  (13, '2016-12-12 04:29:34', 'private.localhost', '198:78:0:12', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'index.php'),
  (14, '2016-12-12 04:29:34', 'private.localhost', '10.0.0.1', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'index.php'),
  (15, '2016-12-12 04:29:34', 'private.localhost', '127.0.0.1', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page1.php'),
  (16, '2016-12-12 04:29:35', 'private.localhost', '168:0:2:56', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'index.php'),
  (17, '2016-12-12 04:29:35', 'private.localhost', '10.0.0.1', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'index.php'),
  (18, '2016-12-13 04:29:36', 'private.localhost', '127.0.0.1', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page1.php'),
  (19, '2016-12-13 04:29:36', 'private.localhost', '101.0.0.34', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'index.php'),
  (20, '2016-12-14 00:00:00', 'private.localhost', '100:56:89:01', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'index.php');
