<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBConnetion
 *
 * @author bcn
 */
class DBConnection {

    const HOST = "localhost";
    const DBNAME = "PRUEBA_v1";
    const PORT = "3306";
    const USER = "root";
    const PASS = "";

    public static function getConexion() {
        $dsn = "mysql:host=" . self::HOST . ";dbname=" . self::DBNAME . ";port=" . self::PORT . ";charset=utf8";

        try {
            $dbConexion = new PDO($dsn, self::USER, self::PASS);
            return $dbConexion;
            echo 'Base Creada';
        } catch (PDOException $exception) {
            switch ($exception->getCode()) {
                case 2002:
                    echo '<div class="error">No se pudo establecer la conexión con la base de datos, revise que &eacute;sta se encuentre en ejecuci&oacute;n.</div>';
                    exit;
                case 1045:
                    echo '<div class="error">No se pudo conectar a la base de datos, revise las credenciales configuradas</div>';
                    exit;
                case 1049: // La base de datos no existe.                        
                    $dbConexion = self::crearBaseDatos();
                    return $dbConexion;
                default:
                    echo '<div class="error">' . $exception->getMessage() . '</div>';
                    break;
            }
        }
    }

    private static function crearBaseDatos() {

        echo '<div class="warning">Base de datos no encontrada, se crear&aacute;...</div>';

        try {
            $dsn = "mysql:host=" . self::HOST . ";port=" . self::PORT . ";charset=utf8";
            $mysqlConexion = new PDO($dsn, self::USER, self::PASS);
            $mysqlConexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $mysqlConexion->exec("CREATE DATABASE " . self::DBNAME);
            $mysqlConexion->exec("USE " . self::DBNAME);
            $mysqlConexion->exec("CREATE TABLE IF NOT EXISTS `atencion` (
  `ID_Atencion` int(11) NOT NULL,
  `Fecha_Atencion` date NOT NULL,
  `Paciente_ID` int(11) NOT NULL,
  `Medico_ID` int(11) NOT NULL,
  `Estado_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID_Atencion`),
  KEY `Paciente_ID` (`Paciente_ID`),
  KEY `Medico_ID` (`Medico_ID`),
  KEY `Estado_ID` (`Estado_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
");
            $mysqlConexion->exec("CREATE TABLE IF NOT EXISTS `estados_atencion` (
  `EstadoID` int(11) NOT NULL,
  `Nombre_Estado` varchar(40) NOT NULL,
  PRIMARY KEY (`EstadoID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
");
            $mysqlConexion->exec("INSERT INTO `estados_atencion` (`EstadoID`, `Nombre_Estado`) VALUES
(1, 'agendada'),
(2, 'confirmada'),
(3, 'perdida'),
(4, 'realizada');
");
            $mysqlConexion->exec("CREATE TABLE IF NOT EXISTS `medico` (
  `MedicoId` int(11) NOT NULL,
  `Fecha_Contratacion` date NOT NULL,
  `Especialidad` varchar(30) NOT NULL,
  `Valor_Consulta` int(11) NOT NULL,
  `ID_Persona` int(11) NOT NULL,
  PRIMARY KEY (`MedicoId`),
  KEY `Rut_Medico` (`ID_Persona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
");
           
            $mysqlConexion->exec("INSERT INTO `medico` (`MedicoId`, `Fecha_Contratacion`, `Especialidad`, `Valor_Consulta`, `ID_Persona`) VALUES
(1, '2016-11-24', 'Neurologia', 30000, 15892998);");
            
            $mysqlConexion->exec("CREATE TABLE IF NOT EXISTS `paciente` (
  `PacienteID` int(11) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `Direccion` varchar(40) NOT NULL,
  `Telefono` int(10) NOT NULL,
  `ID_Persona` int(11) NOT NULL,
  PRIMARY KEY (`PacienteID`),
  KEY `PacienteRut` (`ID_Persona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
");
            
            $mysqlConexion->exec("INSERT INTO `paciente` (`PacienteID`, `Fecha_Nacimiento`, `Sexo`, `Direccion`, `Telefono`, `ID_Persona`) VALUES
(1, '1990-06-17', 'Femenino', 'Las Hortensias 9728', 982081595, 17280523);
");
            $mysqlConexion->exec("CREATE TABLE IF NOT EXISTS `perfiles` (
  `ID_Perfil` int(11) NOT NULL,
  `Nombre_Perfil` varchar(40) NOT NULL,
  PRIMARY KEY (`ID_Perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
");
            $mysqlConexion->exec("INSERT INTO `perfiles` (`ID_Perfil`, `Nombre_Perfil`) VALUES
(1, 'director'),
(2, 'administrador'),
(3, 'secretaria'),
(4, 'paciente');");
            $mysqlConexion->exec("CREATE TABLE IF NOT EXISTS `persona` (
  `RutPersona` int(11) NOT NULL,
  `Nombre_Completo` varchar(40) NOT NULL,
  PRIMARY KEY (`RutPersona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
");
            $mysqlConexion->exec("INSERT INTO `persona` (`RutPersona`, `Nombre_Completo`) VALUES
(15892998, 'Felipe Inostroza'),
(17280523, 'Jocelyn Santibanez');");
            $mysqlConexion->exec("CREATE TABLE IF NOT EXISTS `usuario` (
  `ID_Usuario` int(11) NOT NULL,
  `ID_Persona` int(11) NOT NULL,
  `Nombre_User` varchar(40) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `ID_Perfil` int(11) NOT NULL,
  PRIMARY KEY (`ID_Usuario`),
  KEY `ID_Perfil` (`ID_Perfil`),
  KEY `Rut_Persona` (`ID_Persona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
            $mysqlConexion->exec("INSERT INTO `usuario` (`ID_Usuario`, `ID_Persona`, `Nombre_User`, `Password`, `ID_Perfil`) VALUES
(1, 15892998, 'admin', '1234', 2);");
            $mysqlConexion->exec("ALTER TABLE `atencion`
  ADD CONSTRAINT `atencion_ibfk_1` FOREIGN KEY (`Paciente_ID`) REFERENCES `paciente` (`PacienteID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `atencion_ibfk_2` FOREIGN KEY (`Medico_ID`) REFERENCES `medico` (`MedicoId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `atencion_ibfk_3` FOREIGN KEY (`Estado_ID`) REFERENCES `estados_atencion` (`EstadoID`) ON DELETE CASCADE ON UPDATE CASCADE;");
            $mysqlConexion->exec("ALTER TABLE `medico`
  ADD CONSTRAINT `medico_ibfk_1` FOREIGN KEY (`ID_Persona`) REFERENCES `persona` (`RutPersona`) ON DELETE CASCADE ON UPDATE CASCADE;");
            $mysqlConexion->exec("ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`ID_Persona`) REFERENCES `persona` (`RutPersona`) ON DELETE CASCADE ON UPDATE CASCADE;");
            $mysqlConexion->exec("ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`ID_Persona`) REFERENCES `persona` (`RutPersona`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`ID_Perfil`) REFERENCES `perfiles` (`ID_Perfil`) ON DELETE CASCADE ON UPDATE CASCADE;
");
            
                    
                    
                    
            return $mysqlConexion;
            
        } catch (Exception $e) {
            echo $e->getMessage();
            die($e->getCode());
        }
    }

}

