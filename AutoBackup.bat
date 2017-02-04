cd C:\xampp\mysql\bin
mysqldump --user=gomanager --databases --password=gomanager --add-drop-database --add-drop-table gomanager > c:\xampp\htdocs\GoManager\database.sql
mysqldump --user=gomanager --databases --password=gomanager --add-drop-database --add-drop-table --xml gomanager > c:\xampp\htdocs\GoManager\database.xml