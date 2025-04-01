#Cambia la contraseña de root en MAriaDB
UPDATE mysql.user SET Password=PASSWORD('Viewnext') WHERE User='root';
FLUSH PRIVILEGES;
