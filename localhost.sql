--
-- Database: `expotic`
--

-- --------------------------------------------------------

--
-- Table structure for table `asistente`
--

CREATE DATABASE expotic;
USE expotic;

CREATE TABLE IF NOT EXISTS `asistente` (
`a_id` int(11) NOT NULL,
  `a_nombre` varchar(70) NOT NULL,
  `a_apellido` varchar(70) NOT NULL,
  `a_dni` char(8) NOT NULL,
  `a_correo` varchar(80) NOT NULL,
  `a_telefonof` varchar(11) NOT NULL,
  `a_telefonoc` varchar(11) NOT NULL,
  `a_cisco` int(1) NOT NULL,
  `a_admision` int(1) NOT NULL,
  `a_comtel` int(1) NOT NULL,
  `a_curso` int(1) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;
 
 
 
-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`u_id` int(9) NOT NULL,
  `u_apellido` varchar(70) NOT NULL,
  `u_nombre` varchar(70) NOT NULL,
  `u_dni` char(8) NOT NULL,
  `u_correo` varchar(80) NOT NULL,
  `u_usuario` varchar(50) NOT NULL,
  `u_clave` varchar(50) NOT NULL,
  `u_telefono` varchar(11) NOT NULL,
  `u_estado` int(1) NOT NULL,
  `u_admin` int(1) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

 
