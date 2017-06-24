# Examen_DAI
Examen DAI DUOC 2017 PHP, MYSQL, JAVASCRIPT, JQUERY.

FORMA A
Eusopio Karambio, el recién electo alcalde de Tetengo quiere cumplir a la brevedad
con las promesas hechas en campaña. Entre ellas está el mejoramiento de la atención
en el hospital comunal. Siendo una persona joven y como titulado de Duoc, cree que las
tecnologías pueden ayudar en esta tarea. Es en estas circunstancias en que requiere de un sistema
para gestionar la atención de sus pacientes. Por ello Eusopio, lo ha contactado para que con
un compañero, desarrolle un sistema que permita gestionar la atención de los pacientes en el
nosocomio municipal.

Para cada paciente se registra:
• RUT
• Nombre completo
• Fecha de nacimiento
• Sexo
• Dirección
• Teléfono(s)

Las atenciones son realizadas por médicos del hospital, para cada uno de los cuales se registra:
• RUT
• Nombre completo
• Fecha de contratación
• Especialidad
• Valor consulta
Para cada atención el sistema debe registrar:
• Número único secuencial
• Fecha y hora de la atención
• Paciente que fue atendido
• Médico que realizó la atención
• Estado
 o agendada
 o confirmada
 2 días antes de la atención el sistema debe alertar para que se proceda a
la confirmación de la atención agendada
o anulada
 Si el día antes la atención no ha sido confirmada el sistema debe anularla
automática. También hay anulación manual por motivos particulares.
o perdida
 Una atención se pierde si habiendo sido confirmada el paciente no acude a
la misma, lo cual debe ser realizado manualmente o automáticamente por
el sistema si a un día posterior a la fecha de atención la misma no ha sido
marcada como realizada.
o realizada
El sistema debe contar con un sistema de seguridad basado en usuarios y perfiles. Los perfiles
requeridos y sus permisos son:
• Director
o Listar y consultar pacientes, médicos y atenciones
o Consultar estadísticas del sistema
• Administrador
o Listar, consultar, registrar y eliminar pacientes o Listar, consultar, contratar y despedir médicos
o Listar, consultar, registrar y eliminar usuarios
• Secretaria
o Listar y consultar pacientes y médicos
o Listar y consultar atenciones
o Agendar, confirmar y anular atenciones
o Marcar como perdida o realizada una atención
• Paciente
o Listar y consultar sus atenciones
Por razones de seguridad los siguientes datos deben estar encriptados:
• Contraseñas de los usuarios
• Direcciones de los pacientes
Las estadísticas del sistema le permiten a la dirección del hospital gestionar de mejor modo los recursos
disponibles. En esta primera versión las estadísticas requeridas son:
• Cantidad y valorización de las atenciones realizadas, clasificadas y filtradas por:
o Rango de fechas
o Meses
o Especialidad
o Médico
o Estado
• Cantidad de pacientes, clasificados y filtrados por:
o Rango etario
o Sexo
o Cantidad de atenciones recibidas
Algunas observaciones relevantes respecto al sistema.
• Las estadísticas deben presentarse tanto en listado como en forma gráfica
• En la base de datos debe registrarse el RUT (el número), pero al momento del ingreso del mismo debe
validarse mediante el dígito verificador, y al mostrarlo debe aparecer con su dígito verificador calculado.
• Debe facilitarse al máximo la operación del sistema, reduciendo al mínimo los clics necesarios para
las distintas operaciones, y permitiendo una navegación lo más flexible posible.
• Debe validarse absolutamente todo, se trata de un sistema muy sensible donde los datos erróneos no se
permiten.
