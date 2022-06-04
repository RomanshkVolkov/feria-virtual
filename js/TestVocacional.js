const contenedor1 = document.getElementById("testP1");
const contenedor2 = document.getElementById("testP2");
const contenedor3 = document.getElementById("testP3");
const contenedor4 = document.getElementById("testP4");
const contenedor5 = document.getElementById("testP5");
const contenedor6 = document.getElementById("testP6");
const contenedor7 = document.getElementById("testP7");
const contenedor8 = document.getElementById("testP8");
const contenedor9 = document.getElementById("testP9");
const contenedor10 = document.getElementById("testP10");
const contenedor11 = document.getElementById("testP11");
const contenedor12 = document.getElementById("testP12");


const Grupo1 = [
    {
        letra: "a",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Observar las personas que viajan conmigo"
    },
    {
        letra: "b",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Contemplar el paisaje mientras viajo"
    },
    {
        letra: "c",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Fijarme en las cosechas del campo durante el viaje"
    },
    {
        letra: "d",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Leer las lecciones a un estudiante ciego"
    },
    {
        letra: "e",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Anotar la cantidad de vehículos que pasan por un determinado punto"
    },
    {
        letra: "f",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Interrogar a la gente en una encuesta de opinión pública"
    },
    {
        letra: "g",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Participar en las diversiones de una feria realizada en el campo"
    },
    {
        letra: "h",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Visitar, en una feria realizada en el campo, la exposición de productos envasados"
    },
    {
        letra: "j",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Observar el ganado de una feria realizada en el campo"
    },
    {
        letra: "k",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer ejercicios de gimnasia"
    },
    {
        letra: "l",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ir a pescar"
    },
    {
        letra: "m",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Jugar baloncesto"
    },
    {
        letra: "n",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hojear libros en una librería"
    },
    {
        letra: "p",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Asistir a un concierto de una gran orquesta"
    },
    {
        letra: "q",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Visitar un acuario"
    },
    {
        letra: "r",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Coleccionar autógrafos de gente famosa"
    },
    {
        letra: "s",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Coleccionar mariposas"
    },
    {
        letra: "t",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Coleccionar hojas de diferentes clases de árboles"
    },
    {
        letra: "u",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Visitar una exposición de cuadros famosos"
    },
    {
        letra: "v",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Visitar una exposición sobre medios de trasporte"
    },
    {
        letra: "w",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Visitar una exposición de equipos de laboratorio"
    },
    {
        letra: "x",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Dedicarse al comercio de frutas y verduras"
    },
    {
        letra: "y",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser pianista"
    },
    {
        letra: "z",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Cultivar frutas y verduras"
    },
    {
        letra: "A",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser el presidente de la junta social de un club de baile"
    },
    {
        letra: "B",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Decorar el salón de baile"
    },
    {
        letra: "C",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Encargarse de las invitaciones para el baile"
    },
    {
        letra: "D",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Visitar un museo de ciencias"
    },
    {
        letra: "E",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Visitar una agencia de publicidad"
    },
    {
        letra: "F",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Visitar una fabrica de teclados para computador"
    },
    {
        letra: "G",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Leer una novela a una persona enferma"
    },
    {
        letra: "H",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Enseñar a un perro a hacer habilidades"
    },
    {
        letra: "J",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Desarmar un juguete que no funciona para repararlo"
    },
    {
        letra: "K",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer un curso de dibujo"
    },
    {
        letra: "L",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer un curso de biología"
    },
    {
        letra: "M",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer un curso de trabajos en metal"
    },
    {
        letra: "N",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Construir jaulas para pájaros"
    },
    {
        letra: "P",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir artículos acerca de los pájaros"
    },
    {
        letra: "Q",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer dibujos de pájaros"
    },
    {
        letra: "R",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Reparar una máquina de coser que no funciona"
    },
    {
        letra: "S",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Tocar el piano"
    },
    {
        letra: "T",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Dibujar un paisaje interesante"
    }
];
const Grupo2 = [
    {
        letra: "A",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escuchar un programa de radio sobre el cultivo de la fruta"
    },
    {
        letra: "B",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escuchar un programa sobre como hacer trabajos con plástico"
    },
    {
        letra: "C",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escuchar un programa sobre como fotografiar animales salvajes en su ambiente"
    },
    {
        letra: "D",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Colaborar en un periódico escribiendo en la sección de \"problemas personales\""
    },
    {
        letra: "E",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Criar perros de raza"
    },
    {
        letra: "F",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Realizar estudios sobre la efectividad de diferentes tipos de cartas comerciales"
    },
    {
        letra: "G",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser un experto en juegos de cartas"
    },
    {
        letra: "H",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser un experto en el conocimiento de la erosión del suelo"
    },
    {
        letra: "J",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser un especialista en carteles publicitarios"
    },
    {
        letra: "K",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Visitar unos estudios de cine"
    },
    {
        letra: "L",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Visitar un parque nacional famoso por sus paisajes de montaña"
    },
    {
        letra: "M",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Visitar un antiguo campo de batalla"
    },
    {
        letra: "N",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Leer libros o revistas sobre personajes públicos famosos"
    },
    {
        letra: "P",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Leer diferentes descripciones literarias sobre lo que sería un mundo ideal"
    },
    {
        letra: "Q",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Leer la historia de los primeros exploradores de un país "
    },
    {
        letra: "R",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Aconsejar a la gente sobre cómo mejorar su personalidad"
    },
    {
        letra: "S",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Cazar animales raros para un museo"
    },
    {
        letra: "T",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Cobrar los cheques bancarios en nombre de otras personas"
    },
    {
        letra: "U",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Pertenecer a un grupo que trata de solucionar las dificultades de las personas"
    },
    {
        letra: "V",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Pertenecer a una tertulia literaria"
    },
    {
        letra: "W",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Pertenecer a un club de aficionados a la astronomía"
    },
    {
        letra: "X",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Relacionarse con personas de nivel medio"
    },
    {
        letra: "Y",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Relacionarse con personas un tanto extrañas y con ideas originales  "
    },
    {
        letra: "Z",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Relacionarse con personas despreocupadas cuya conducta llame la atención"
    },
    {
        letra: "a",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Dar clases de español a personas que aspiran a la ciudadanía colombiana"
    },
    {
        letra: "b",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Vender valores bancarios o productos comerciales "
    },
    {
        letra: "c",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser cocinero jefe en un restaurante de categoría "
    },
    {
        letra: "d",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Tratar se conseguir nuevas variedades de flores"
    },
    {
        letra: "e",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Realizar campañas publicitarias para la venta de flores"
    },
    {
        letra: "f",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Recoger recados telefónicos en una tienda de flores"
    },
    {
        letra: "g",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Dirigir un grupo de estudio sobre sistemas de propaganda "
    },
    {
        letra: "h",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser el Decano de una facultad universitaria"
    },
    {
        letra: "j",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser un experto en fotografía en color"
    },
    {
        letra: "k",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer los dibujos ilustrativos para una historia del mundo "
    },
    {
        letra: "l",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Obtener experimentalmente una variedad de cerezas sin semillas"
    },
    {
        letra: "m",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Preparar un grupo de participantes en un concurso nacional de teatro"
    },
    {
        letra: "n",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ganar algo, ayudando en el laboratorio, para mis gastos "
    },
    {
        letra: "p",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ganar algo, ayudando en la corrección de exámenes, para mis gastos"
    },
    {
        letra: "q",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ganar algo, formando parte de la orquesta, para mis gastos"
    },
    {
        letra: "r",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir una historia de la Cruz Roja"
    },
    {
        letra: "s",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Buscar información para que se conozca mejor un hecho histórico famoso"
    },
    {
        letra: "t",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escibir una comedia musical"
    }
];
const Grupo3 = [
    {
        letra: "a",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Enseñar español"
    },
    {
        letra: "b",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Atender las llamadas telefónicas de pedidos de mercancias"
    },
    {
        letra: "c",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Llamar por teléfono a la gente pidiéndole su opinión para una encuesta pública"
    },
    {
        letra: "d",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Comprar mercancias al por mayor para su venta en supermercados "
    },
    {
        letra: "e",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Entrevistar a personas que aspiran a un puesto de trabajo en un supermercado"
    },
    {
        letra: "f",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Cuidar ganado vacuno en una granja"
    },
    {
        letra: "g",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Estar encargado del ingreso del personal en una empresa"
    },
    {
        letra: "h",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir artículos sobre animales salvajes"
    },
    {
        letra: "j",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Colaborar en un periódico escribiendo en la sección de \"problemas personales\""
    },
    {
        letra: "k",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Leer un libro sobre métodos modernos en la empresa"
    },
    {
        letra: "l",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Leer un libro sobre costumbres de la gente de otros países "
    },
    {
        letra: "m",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Leer un libro sobre métodos modernos en la agricultura "
    },
    {
        letra: "n",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Trabajar en una estación meteorológica del polo norte"
    },
    {
        letra: "p",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Trabajar en una estación meteorológica situada en la ciudad"
    },
    {
        letra: "q",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Trabajar en una estación meteorológica situada en las montañas "
    },
    {
        letra: "r",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser muy conocido como director de una investigación técnico-científica"
    },
    {
        letra: "s",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser muy conocido como experto en problemas personales"
    },
    {
        letra: "t",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser muy conocido como crítico literario"
    },
    {
        letra: "u",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Diseñar los decorados de una obra teatral"
    },
    {
        letra: "v",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer un análisis químico de una nueva crema dental "
    },
    {
        letra: "w",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir un artículo, dirigido a las amas de casa, sobre reparación de electrodomésticos "
    },
    {
        letra: "x",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Atender a parsonas que solicitan ayuda y consejo "
    },
    {
        letra: "y",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Comprobar que tipo de carta comercial resulta mejor "
    },
    {
        letra: "z",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Trabajar en desarrollo de métodos más eficientes de trabajo administrativo"
    },
    {
        letra: "A",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Redactar noticias financieras para un periódico"
    },
    {
        letra: "B",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Trabajar en el descubrimiento de un metal más ligero y resistente "
    },
    {
        letra: "C",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Dirigir un poblado modelo para empleados de una empresa "
    },
    {
        letra: "D",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Visitar un buen museo de arte "
    },
    {
        letra: "E",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Visitar un centro de recreo para los habitantes de barrios pobres "
    },
    {
        letra: "F",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Visitar un famoso laboratorio de investigadores médicos"
    },
    {
        letra: "G",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Estar encargado del despido de empleados no aptos en una empresa "
    },
    {
        letra: "H",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Estar encargado de hablar a los empleados que no realizan un buen trabajo "
    },
    {
        letra: "J",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Estar encargado de la contratación de los nuevos empleados en una empresa "
    },
    {
        letra: "K",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer un diccionario de palabras de argot y giros populares "
    },
    {
        letra: "L",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Descubrir un medicamento contra la alergía "
    },
    {
        letra: "M",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Instalar en una gran empresa mejores procedimientos administrativos "
    },
    {
        letra: "N",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Leer libros sobre la historia del teatro "
    },
    {
        letra: "P",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Leer libros sobre las primitivas formas de expresión musical"
    },
    {
        letra: "Q",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Leer libros sobre la influencia del lenguaje en la conducta "
    },
    {
        letra: "R",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer análisis químicos de nuevos productos comerciales "
    },
    {
        letra: "S",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Trabajar en el perfeccionamiento de un pulmón artificial que permita moverse libremente  "
    },
    {
        letra: "T",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Construir gráficos que muestren la marcha de un negocio "
    }
];
const Grupo4 = [
    {
        letra: "A",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Repartir hojas publicitarias en los carros que se detienen en un cruce"
    },
    {
        letra: "B",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Contar el número de carros que pasan por un cruce a diferentes horas"
    },
    {
        letra: "C",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Dirigir en un cruce la circulación de los carros"
    },
    {
        letra: "D",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Dar clases de gimnasia a niños discapacitados"
    },
    {
        letra: "E",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Cultivar hortalizas para vender en el mercado"
    },
    {
        letra: "F",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Dar clases de trenzado y construcción de cestas"
    },
    {
        letra: "G",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Solicitar fondos para una obra de la comunidad"
    },
    {
        letra: "H",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir el informe periódico sobre la marcha económica de la comunidad"
    },
    {
        letra: "J",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Llevar las cuentas diarias de los fondos de la comunidad"
    },
    {
        letra: "K",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Encargarse de los preparativos de una gran boda"
    },
    {
        letra: "L",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Enviar las invitaciones para una gran boda"
    },
    {
        letra: "M",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir, para el periódico, la reseña de una gran boda"
    },
    {
        letra: "N",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir novelas"
    },
    {
        letra: "P",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Realizar una investigación sobre la psicología de la música"
    },
    {
        letra: "Q",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Construir objetos de cerámica"
    },
    {
        letra: "R",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Realizar un estudio sobre la eficacia de diferentes tipos de venta"
    },
    {
        letra: "S",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Clasificar las cartas en una oficina de correos "
    },
    {
        letra: "T",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Criar pollos en una granja avícola "
    },
    {
        letra: "U",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir para la página de sucesos de un periódico "
    },
    {
        letra: "V",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Dar conferencias populares sobre química"
    },
    {
        letra: "W",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Orientar a los jóvenes en la elección de su carrera "
    },
    {
        letra: "X",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Confiar en alguien que tome la mayoría de mis decisiones "
    },
    {
        letra: "Y",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Confiar en alguien que tome mis decisiones sólo en alguna ocasión  "
    },
    {
        letra: "Z",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Tomar mis decisiones por mí mismo"
    },
    {
        letra: "a",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Supervisar el trabajo de una gran sección"
    },
    {
        letra: "b",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Realizar una investigación sobre los progresos técnicos en televisión "
    },
    {
        letra: "c",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser el director de un centro de recreo en una organización de beneficencia "
    },
    {
        letra: "d",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Supervisar el trabajo de varias digitadoras "
    },
    {
        letra: "e",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Entrevistar a la gente que aspira a obtener un empleo"
    },
    {
        letra: "f",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser secretario particular "
    },
    {
        letra: "g",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Dibujar historietas cómicas o dibujos animados "
    },
    {
        letra: "h",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Redactar anuncios de aparatos eléctricos "
    },
    {
        letra: "j",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Cultivar una finca agrícola"
    },
    {
        letra: "k",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ensayar mezclas para hacer un pastel del que no conozco la receta "
    },
    {
        letra: "l",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Contar cuentos a los niños"
    },
    {
        letra: "m",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Pintar con acuarelas "
    },
    {
        letra: "n",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer investigaciones o análisis químicos "
    },
    {
        letra: "p",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Entrevistar a los aspirantes a un empleo"
    },
    {
        letra: "q",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir cuentos para un periódico "
    },
    {
        letra: "r",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Dibujar un paisaje interesante "
    },
    {
        letra: "s",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Probar diferentes tipos de velas en un barco de juguete para ver cuál funciona mejor "
    },
    {
        letra: "t",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer una redacción con el estilo de un determinado autor "
    }
];
const Grupo5 = [
    {
        letra: "a",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Vender boletas para una representación teatral de aficionados"
    },
    {
        letra: "b",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Elaborar los programas y boletas para la representación teatral "
    },
    {
        letra: "c",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Actuar como tesorero en la organización de la representación teatral"
    },
    {
        letra: "d",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Determinar el costo de una nueva máquina lavaplatos"
    },
    {
        letra: "e",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Convencer a alguien para que financie una empresa de máquina lavaplatos"
    },
    {
        letra: "f",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Enseñar a la gente la utilización de una nueva máquina lavaplatos "
    },
    {
        letra: "g",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer el recuento de los resultados de una encuesta de opinión pública "
    },
    {
        letra: "h",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir los artículos de fondo de un periódico "
    },
    {
        letra: "j",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Enseñar trabajos manuales en un campamento para niños de barrios pobres "
    },
    {
        letra: "k",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Leer un libro sobre primeros auxilios en diferentes enfermedades "
    },
    {
        letra: "l",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Leer un libro sobre como alcanzaron el éxito los directores de empresa"
    },
    {
        letra: "m",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Leer un libro sobre la cría de ganado"
    },
    {
        letra: "n",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Asistir a una reunión cuando no conozco a la mayoría de la gente "
    },
    {
        letra: "p",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Asistir a una reunión cuando conozco a la mayoría de la gente "
    },
    {
        letra: "q",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Asistir a una reunión compuesta igualmente por gente conocida y desconocida"
    },
    {
        letra: "r",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Vender accesorios para trabajos artísticos "
    },
    {
        letra: "s",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Cultivar semillas para las tiendas de flores"
    },
    {
        letra: "t",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Atender un vivero de plantas para estudios científicos"
    },
    {
        letra: "u",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Realizar experimentos de laboratorio"
    },
    {
        letra: "v",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Construir muebles"
    },
    {
        letra: "w",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Vender pólizas de seguros "
    },
    {
        letra: "x",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Pesar paquetes postales y determinar los costos de envío"
    },
    {
        letra: "y",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Leer pruebas de imprenta para corregirlas antes de su publicación "
    },
    {
        letra: "z",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Probar nuevos modelos de carros para hallar la forma de mejorarlos "
    },
    {
        letra: "A",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser un experto en la talla de piedras preciosas"
    },
    {
        letra: "B",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Realizar una investigación para buscar un sustituto de la goma"
    },
    {
        letra: "C",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser comentarista de música en la radio "
    },
    {
        letra: "D",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ayudar en una enfermería "
    },
    {
        letra: "E",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Vender instrumentos musicales "
    },
    {
        letra: "F",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Reparar aparatos domésticos "
    },
    {
        letra: "G",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer diseños o adornos para floreros y macetas"
    },
    {
        letra: "H",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Supervisar al personal de una fábrica de floreros y macetas "
    },
    {
        letra: "J",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Descubrir un método más eficiente para fabricar floreros y macetas "
    },
    {
        letra: "K",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Calcular la cuenta de los consumos en una cafetería "
    },
    {
        letra: "L",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Enseñar a los niños a fabricar aviones "
    },
    {
        letra: "M",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Llevar el registro de los datos de un doctor que realiza una investigación médica "
    },
    {
        letra: "N",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Dirigir, en un patio de recreo, los juegos de niños algo deficientes "
    },
    {
        letra: "P",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser cocinero de un restaurante "
    },
    {
        letra: "Q",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Vender materiales para ensayos químicos "
    },
    {
        letra: "R",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Reunir una buena colección de herramientas para trabajos de madera "
    },
    {
        letra: "S",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer un álbum con reproducciones de los cuadros preferidos "
    },
    {
        letra: "T",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Reunir todos los productos necesarios para tener un botiquin de urgencia"
    }
];
const Grupo6 = [
    {
        letra: "A",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Dirigir una representación teatral de aficionados"
    },
    {
        letra: "B",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer imprimir los programas y entradas para esa represetación teatral "
    },
    {
        letra: "C",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir esa obra teatral "
    },
    {
        letra: "D",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Jugar a las damas con gente que generalmente me gana"
    },
    {
        letra: "E",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Jugar a las damas con gente que casi nunca me gana"
    },
    {
        letra: "F",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Jugar a las damas con gente que tenga la misma habilidad que yo "
    },
    {
        letra: "G",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Redactar el anuncio para una nueva máquina lavadora"
    },
    {
        letra: "H",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Determinar el costo de una nueva máquina lavadora "
    },
    {
        letra: "J",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Vender una nueva máquina lavadora "
    },
    {
        letra: "K",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir artículos en la sección de \"Noticias locales\" de un periódico"
    },
    {
        letra: "L",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Redactar respuestas en la sección de \"Problemas personales\""
    },
    {
        letra: "M",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir artículos en la sección de \"Jardinería\""
    },
    {
        letra: "N",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser explorador "
    },
    {
        letra: "P",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser dibujante"
    },
    {
        letra: "Q",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser inventor"
    },
    {
        letra: "R",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Recoger cerezas en el campo"
    },
    {
        letra: "S",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Conducir un tractor en una granja "
    },
    {
        letra: "T",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Trabajar en un laboratorio de química"
    },
    {
        letra: "U",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer un curso de declamación "
    },
    {
        letra: "V",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Estudiar sociología "
    },
    {
        letra: "W",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Estudiar composición literaria "
    },
    {
        letra: "X",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer operaciones con una computadora "
    },
    {
        letra: "Y",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Montar las piezas de una computadora"
    },
    {
        letra: "Z",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Vender computadoras"
    },
    {
        letra: "a",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Construir embarcaciones "
    },
    {
        letra: "b",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Resolver conflictos personales surgidos en el trabajo"
    },
    {
        letra: "c",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Componer música "
    },
    {
        letra: "d",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser el vendedor de tractores con más éxito en la región "
    },
    {
        letra: "e",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser un contador públicamente reconocido como experto "
    },
    {
        letra: "f",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser experto en materia de cotizaciones"
    },
    {
        letra: "g",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Elaborar métodos administrativos más eficientes para los negocios "
    },
    {
        letra: "h",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser enfermera con gran práctica "
    },
    {
        letra: "j",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Tratar de perfeccionar los envases para conservas "
    },
    {
        letra: "k",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Reparar las conexiones eléctricas de una plancha eléctrica "
    },
    {
        letra: "l",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Encender fuego en una chimenea"
    },
    {
        letra: "m",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Digitar un trabajo de un amigo "
    },
    {
        letra: "n",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Dirigir un establecimiento de discos musicales "
    },
    {
        letra: "p",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Copiar planos de edificios "
    },
    {
        letra: "q",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Estudiar la situación social en diferentes localidades "
    },
    {
        letra: "r",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Desarmar un juguete mecánico desconocido para ver como funciona"
    },
    {
        letra: "s",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Jugar a las damas"
    },
    {
        letra: "t",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Jugar al ajedrez"
    }
];
const Grupo7 = [
    {
        letra: "a",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Llevar los libros de contabilidad de un negocio "
    },
    {
        letra: "b",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Tratar de conseguir nuevas variedades de flores"
    },
    {
        letra: "c",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Preocuparse por los problemas personales de la gente "
    },
    {
        letra: "d",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Dedicarse a la pesca como medio de vida "
    },
    {
        letra: "e",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Seleccionar los árboles que van a ser cortados en un bosque "
    },
    {
        letra: "f",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Pintar vehículos en una fábrica "
    },
    {
        letra: "g",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer visitas como asistente social "
    },
    {
        letra: "h",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser secretario de una persona famosa"
    },
    {
        letra: "j",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Redactar los anuncios para una empresa de publicidad"
    },
    {
        letra: "k",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir reportajes para una revista "
    },
    {
        letra: "l",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir un artículo sobre la cría de aves de corral "
    },
    {
        letra: "m",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir un artículo sobre primeros auxilios o socorrismo"
    },
    {
        letra: "n",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Atender a los clientes en un restaurante "
    },
    {
        letra: "p",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Buscar en un directorio telefónico las direcciones de una lista de personas"
    },
    {
        letra: "q",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Cuidar enfermos"
    },
    {
        letra: "r",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Modelar en arcilla"
    },
    {
        letra: "s",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir un artículo sobre el arte de convencer a la gente"
    },
    {
        letra: "t",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser apuntador en una compañía de teatro de aficionados "
    },
    {
        letra: "u",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser médico"
    },
    {
        letra: "v",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser escultor"
    },
    {
        letra: "w",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser periodista "
    },
    {
        letra: "x",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Contestar correos que piden información sobre un nuevo computador "
    },
    {
        letra: "y",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Recoger datos sobre las ventas de un nuevo computador"
    },
    {
        letra: "z",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser técnico de mantenimiento de un nuevo computador"
    },
    {
        letra: "A",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Estudiar los métodos de propaganda utilizados en guerra"
    },
    {
        letra: "B",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Estudiar sistemas de eficacia administrativa "
    },
    {
        letra: "C",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer un estudio sobre la emigración en Colombia"
    },
    {
        letra: "D",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Examinar el borrador de un informe buscando posibles errores "
    },
    {
        letra: "E",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Lavar los platos "
    },
    {
        letra: "F",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer la comida"
    },
    {
        letra: "G",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Enseñar arquitectura "
    },
    {
        letra: "H",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Solicitar a las empresas publicidad para una revista "
    },
    {
        letra: "J",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Arreglar relojes"
    },
    {
        letra: "K",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer la comida"
    },
    {
        letra: "L",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Arreglar un juguete que no funciona"
    },
    {
        letra: "M",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Lavar la cabeza a alguien "
    },
    {
        letra: "N",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Formar parte de una expedición para buscar animales raros"
    },
    {
        letra: "P",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Formar parte de una expedición para combatir una epidemia"
    },
    {
        letra: "Q",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Realizar un trabajo de beneficencia social"
    },
    {
        letra: "R",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser pintor de retratos "
    },
    {
        letra: "S",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Realizar una investigación sobre las causas de los terremotos "
    },
    {
        letra: "T",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser ingeniero mecánico"
    }
];
const Grupo8 = [
    {
        letra: "A",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ayudar a la gente a planear sus presupuestos "
    },
    {
        letra: "B",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Poner etiquetas de clasificación a los libros de una biblioteca "
    },
    {
        letra: "C",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser un experto en el cultivo de árboles "
    },
    {
        letra: "D",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser vendedor en un almacén"
    },
    {
        letra: "E",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Trabajar en una finca o granja "
    },
    {
        letra: "F",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Trabajar en una editorial "
    },
    {
        letra: "G",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser profesor de matemáticas "
    },
    {
        letra: "H",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser director publicitario en una gran empresa "
    },
    {
        letra: "J",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser profesor de un idioma extranjero "
    },
    {
        letra: "K",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer un curso de correspondencia comercial "
    },
    {
        letra: "L",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer un curso de imprenta"
    },
    {
        letra: "M",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer un curso de ventas "
    },
    {
        letra: "N",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Copiar planos de viviendas "
    },
    {
        letra: "P",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Redactar un anuncio atractivo sobre mejoras en los bienes inmuebles "
    },
    {
        letra: "Q",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir artículos sobre nuevas ideas para la construcción de viviendas "
    },
    {
        letra: "R",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Comprar a plazos un objeto caro"
    },
    {
        letra: "S",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Pedir dinero prestado a un amigo para comprar un objeto caro"
    },
    {
        letra: "T",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ahorrar hasta poder comprar un objeto caro"
    },
    {
        letra: "U",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Decorar muebles "
    },
    {
        letra: "V",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Vigilar el trabajo en un campo de remolacha azucarera "
    },
    {
        letra: "W",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Criar pavos "
    },
    {
        letra: "X",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Orientar a los jóvenes en la elección de su carrera "
    },
    {
        letra: "Y",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Diseñar nuevos modelos de tejidos "
    },
    {
        letra: "Z",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Estimar el costo de impresión de libros y folletos "
    },
    {
        letra: "a",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Construir un telar manual "
    },
    {
        letra: "b",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Elaborar formulas matemáticas para predecir la marcha de los negocios "
    },
    {
        letra: "c",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer un estudio de las actitudes de los jóvenes para colaborar en una labor religiosa "
    },
    {
        letra: "d",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Moldear la mascarilla de una persona famosa"
    },
    {
        letra: "e",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir un informe sobre cómo determinan los comerciantes el precio de venta "
    },
    {
        letra: "f",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Componer la melodía de una canción para un programa de radio "
    },
    {
        letra: "g",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Analizar las diferentes calidades de productos de una cooperativa para ver cuál es mejor "
    },
    {
        letra: "h",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Encargarse del tablón de anuncios en una organización comercial "
    },
    {
        letra: "j",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Mantener en buen estado de funcionamiento las máquinas de contabilidad"
    },
    {
        letra: "k",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Tener alrededor gente que me trate como a un igual "
    },
    {
        letra: "l",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Tener alrededor gente que me trate como a un superior"
    },
    {
        letra: "m",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Tener alrededor gente que no preste atención a lo que hago"
    },
    {
        letra: "n",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser profesor de música "
    },
    {
        letra: "p",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Encargarse de los aspectos artísticos en una agencia de publicidad"
    },
    {
        letra: "q",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Realizar un estudio sobre el humor de los chistes y bromas "
    },
    {
        letra: "r",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacerle las compras a una persona enferma"
    },
    {
        letra: "s",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Construir un rompecabezas para distraer a una persona enferma"
    },
    {
        letra: "t",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Leer en voz alta un libro para un enfermo"
    }
];
const Grupo9 = [
    {
        letra: "a",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ayudar en las curas de urgencias de un hospital"
    },
    {
        letra: "b",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser vendedor en una tienda de flores"
    },
    {
        letra: "c",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser secretario particular"
    },
    {
        letra: "d",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Redactar la sección financiera de un periódico"
    },
    {
        letra: "e",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Cultivar una gran finca agricola"
    },
    {
        letra: "f",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Vender bienes inmuebles"
    },
    {
        letra: "g",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Prestar ayuda a personas sordas"
    },
    {
        letra: "h",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Elaborar gráficos a partir de tablas estadísticas"
    },
    {
        letra: "j",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser vendedor en un almacén"
    },
    {
        letra: "k",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser escritor"
    },
    {
        letra: "l",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser experto en carteles publicitarios"
    },
    {
        letra: "m",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser experto enproblemas morales de las personas"
    },
    {
        letra: "n",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Realizar un trabajo que me guste y esté bien pago"
    },
    {
        letra: "p",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Realizar un trabajo que me guste y esté mal pago"
    },
    {
        letra: "q",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Realizar un trabajo que no me guste y esté bien pago"
    },
    {
        letra: "r",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Enseñar cómo conservar la salud a personas afiliadas a la EPS"
    },
    {
        letra: "s",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir artículos de fondo para un periódico"
    },
    {
        letra: "t",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Comprar y vender objetos de arte"
    },
    {
        letra: "u",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser secretario de una personalidad política"
    },
    {
        letra: "v",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Enseñar dibujo y modelado a los niños"
    },
    {
        letra: "w",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir artículos para una revista de arte"
    },
    {
        letra: "x",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Elegir yo mismo la ropa de vestir"
    },
    {
        letra: "y",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Buscar consejo al elegir la ropa de vestir"
    },
    {
        letra: "z",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Dejar que alguien me elija la ropa de vestir "
    },
    {
        letra: "A",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Copiar planos de puentes "
    },
    {
        letra: "B",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Realizar un trabajo que requiera muchas operaciones mentales aritmeticas "
    },
    {
        letra: "C",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Realizar un trabajo administrativo"
    },
    {
        letra: "D",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Inspeccionar la elaboración de tarjetas de felicitación "
    },
    {
        letra: "E",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Determinar el costo de producción de tarjetas de felicitación "
    },
    {
        letra: "F",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Diseñar el contenido de las tarjetas de felicitación"
    },
    {
        letra: "G",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Desarmar una cerradura para ver porqué funciona mal"
    },
    {
        letra: "H",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Examinar la copia de un informe para descubrir posibles errores"
    },
    {
        letra: "J",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Sumar columnas de números"
    },
    {
        letra: "K",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Relacionarme con alguien que me hace pasar por tonto"
    },
    {
        letra: "L",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer que alguien parezca tonto"
    },
    {
        letra: "M",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "No permitir que nadie me haga pasar por tonto "
    },
    {
        letra: "N",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Tener la profesión de psicólogo"
    },
    {
        letra: "P",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Controlar la construcción de un puente "
    },
    {
        letra: "Q",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser arquitecto urbanista"
    },
    {
        letra: "R",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Investigar la causa de las enfermedades mentales "
    },
    {
        letra: "S",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Dedicarse al estudio de arreglos musicales"
    },
    {
        letra: "T",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Aprender sobre sistemas de computo "
    }
];
const Grupo10 = [
    {
        letra: "A",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Conducir un vehículo en la ciudad"
    },
    {
        letra: "B",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Estar encargado de un faro y vivir en la torre"
    },
    {
        letra: "C",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser guarda de tránsito en un cruce de vías"
    },
    {
        letra: "D",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Redactar anuncios de publicidad"
    },
    {
        letra: "E",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser encargado de una biblioteca pública"
    },
    {
        letra: "F",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Publicar un periódico"
    },
    {
        letra: "G",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer un curso de cálculo de costos "
    },
    {
        letra: "H",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer un curso sobre el arte de vender"
    },
    {
        letra: "J",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer un curso de lenguaje comercial"
    },
    {
        letra: "K",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir una obra teatral"
    },
    {
        letra: "L",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Encargarse del despacho de boletas para una obra teatral"
    },
    {
        letra: "M",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Encargarse del mobiliario y vestuario de una obra teatral"
    },
    {
        letra: "N",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Dibujar caricaturas de gente famosa"
    },
    {
        letra: "P",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Pintar retratos de gente famosa"
    },
    {
        letra: "Q",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Pintar cuadros de paisajes"
    },
    {
        letra: "R",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Dibujar ilustraciones para una revista"
    },
    {
        letra: "S",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir artículos para una revista"
    },
    {
        letra: "T",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser el director de ventas de una revista"
    },
    {
        letra: "U",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Pasar una temporada de vacaciones en un lugar de moda alojado en un hotel"
    },
    {
        letra: "V",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer un viaje viviendo en carpas "
    },
    {
        letra: "W",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer un viaje por vías alternas (vías no principales) "
    },
    {
        letra: "X",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Convivir con un famoso critico teatral"
    },
    {
        letra: "Y",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Convivir con un personaje famoso en temas sociales "
    },
    {
        letra: "Z",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Convivir con un personaje famoso en las artes plásticas"
    },
    {
        letra: "a",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir artículos sobre aficiones personales"
    },
    {
        letra: "b",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Elaborar tablas estadísticas sobre el costo de la vida"
    },
    {
        letra: "c",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Reparar y retocar muebles antiguos"
    },
    {
        letra: "d",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Corregir pruebas de impresión de libros infantiles"
    },
    {
        letra: "e",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Contar cuentos a los niños"
    },
    {
        letra: "f",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Construir juguetes para niños"
    },
    {
        letra: "g",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Seguir un curso de educación física"
    },
    {
        letra: "h",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Seguir un curso de comercio  al menudeo"
    },
    {
        letra: "j",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Seguir un curso de matemáticas"
    },
    {
        letra: "k",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser afinador de pianos"
    },
    {
        letra: "l",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser maestro de escuela"
    },
    {
        letra: "m",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser odontólogo"
    },
    {
        letra: "n",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser digitador en sesiones oficiales "
    },
    {
        letra: "p",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser representante de un pianista famoso"
    },
    {
        letra: "q",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser orientador vocacional y profesional"
    },
    {
        letra: "r",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Visitar un museo de historia natural"
    },
    {
        letra: "s",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Visitar una fábrica de aviones "
    },
    {
        letra: "t",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Visitar los barrios pobres de una ciudad"
    }
];
const Grupo11 = [
    {
        letra: "a",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer los dibujos para las historietas de una revista"
    },
    {
        letra: "b",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Dedicarse a la cria de ganado"
    },
    {
        letra: "c",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Cultivar frutos para vender en el mercado"
    },
    {
        letra: "d",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser botones en un hotel"
    },
    {
        letra: "e",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Retirar la vajilla usada de las mesas de un restaurante "
    },
    {
        letra: "f",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Vivir solitario en una isla"
    },
    {
        letra: "g",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser guía en excursiones al campo, con carpas"
    },
    {
        letra: "h",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Diseñar accesorios para carpas"
    },
    {
        letra: "j",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Vender accesorios para carpas"
    },
    {
        letra: "k",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Vender pólizas de seguros "
    },
    {
        letra: "l",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escribir cuentos para revistas"
    },
    {
        letra: "m",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser jardinero de un parque"
    },
    {
        letra: "n",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser conocido como una persona modesta"
    },
    {
        letra: "p",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser conocido como una persona digna de confianza"
    },
    {
        letra: "q",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser conocido como una persona atolondrada"
    },
    {
        letra: "r",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Enseñar aritmética"
    },
    {
        letra: "s",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Amaestrar perros como lazarillos de ciegos "
    },
    {
        letra: "t",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser secretario de un científico famoso"
    },
    {
        letra: "u",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer un curso sobre música moderna "
    },
    {
        letra: "v",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer un curso sobre novela moderna"
    },
    {
        letra: "w",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer un curso sobre pintura moderna"
    },
    {
        letra: "x",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser considerado como una persona testaruda"
    },
    {
        letra: "y",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser considerado como una persona justa"
    },
    {
        letra: "z",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser considerado como una persona inteligente "
    },
    {
        letra: "A",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser director de orquesta "
    },
    {
        letra: "B",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser jefe de una gran oficina"
    },
    {
        letra: "C",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Dirigir los planes de beneficencia en una barrio pobre"
    },
    {
        letra: "D",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Cultivar flores"
    },
    {
        letra: "E",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Manejar una fotocopiadora "
    },
    {
        letra: "F",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Revisar las facturas de una empresa"
    },
    {
        letra: "G",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Servir de guía a los visitantes de un parque natural"
    },
    {
        letra: "H",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Construir objetos finos de joyería "
    },
    {
        letra: "J",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer arreglos musicales para una orquesta "
    },
    {
        letra: "K",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Trabajar en una central de teléfonos"
    },
    {
        letra: "L",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Hacer los moldes para fabricar sellos de caucho"
    },
    {
        letra: "M",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Enseñar juegos a los niños"
    },
    {
        letra: "N",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Arreglar una mesa de planchar"
    },
    {
        letra: "P",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Lavar los platos"
    },
    {
        letra: "Q",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ordenar las cosas de una habitación"
    },
    {
        letra: "R",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Enseñar a fabricar muebles "
    },
    {
        letra: "S",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Corregir pruebas de impresión para un periódico"
    },
    {
        letra: "T",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Importar alfombras orientales"
    }
];
const Grupo12 = [
    {
        letra: "A",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser secretario particular"
    },
    {
        letra: "B",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser contador"
    },
    {
        letra: "C",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser vendedor"
    },
    {
        letra: "D",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser patinadora artística"
    },
    {
        letra: "E",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Jugar a los bolos"
    },
    {
        letra: "F",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Escalar montañas"
    },
    {
        letra: "G",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Trabajar en una oficina"
    },
    {
        letra: "H",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Trabajar en una granja"
    },
    {
        letra: "J",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Vender productos de casa en casa"
    },
    {
        letra: "K",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Trabajar en una fábrica de caramelos"
    },
    {
        letra: "L",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Dedicarse a la cría de abejas"
    },
    {
        letra: "M",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Trabajar en una óptica"
    },
    {
        letra: "N",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser granjero"
    },
    {
        letra: "P",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser maquinista de un tren (metro)"
    },
    {
        letra: "Q",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser oficinista o ejecutivo"
    },
    {
        letra: "R",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Realizar trabajos administrativos"
    },
    {
        letra: "S",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Enseñar literatura española"
    },
    {
        letra: "T",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Vender accesorios para trabajos artísticos"
    },
    {
        letra: "U",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Estudiar contaduría"
    },
    {
        letra: "V",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Estudiar métodos de riego"
    },
    {
        letra: "W",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Estudiar digitación"
    },
    {
        letra: "X",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Repartir correspondencia"
    },
    {
        letra: "Y",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Recoger las basuras"
    },
    {
        letra: "Z",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Clasificar las cartas o paquetes en una empresa de envíos"
    },
    {
        letra: "a",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser poeta"
    },
    {
        letra: "b",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser artista"
    },
    {
        letra: "c",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser trabajador social"
    },
    {
        letra: "d",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Resolver acertijos y problemas numéricos"
    },
    {
        letra: "e",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Jugar a las damas"
    },
    {
        letra: "f",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Resolver rompecabezas mecánicos"
    },
    {
        letra: "g",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Poner en marcha un periódico"
    },
    {
        letra: "h",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Crear una escuela de arte"
    },
    {
        letra: "j",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Organizar una orquesta"
    },
    {
        letra: "k",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Tener amigos"
    },
    {
        letra: "l",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Tener poder"
    },
    {
        letra: "m",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Tener fama"
    },
    {
        letra: "n",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser mecánico"
    },
    {
        letra: "p",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser arquitecto"
    },
    {
        letra: "q",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Ser químico"
    },
    {
        letra: "r",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Encuadernar libros"
    },
    {
        letra: "s",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Cuidar niños enfermos"
    },
    {
        letra: "t",
        respuestas: {
            a: "prefiero",
            b: "no prefiero"
        },
        pregunta: "Digitar en computador"
    }
];

//Funcion para mostrar el test en html
/*
function mostrarTest() {
    const pregruntasYrespuestas = [];
    Grupo1.forEach((preguntaActual, numeroPregunta) => {
        const respuestas = [];
        for (letraRespuesta in preguntaActual.respuestas) {
            respuestas.push(
                `<td align="center"><label> 
                    <input type ="radio" name="${numeroPregunta}"value="${letraRespuesta}">
                    
                </label></td>
                `
            );
        }
        pregruntasYrespuestas.push(
            `<tr>
             
             <td class="cuestion">${preguntaActual.pregunta}</td>
            ${respuestas.join('')}
             </tr>
             <tr>
             </tr>
             `
        );
    });

    contenedor1.innerHTML = pregruntasYrespuestas.join('');
}

function mostrarTestP2() {
    const pregruntasYrespuestas = [];
    Grupo2.forEach((preguntaActual, numeroPregunta) => {
        const respuestas = [];
        for (letraRespuesta in preguntaActual.respuestas) {
            respuestas.push(
                `<td align="center"><label> 
                    <input type ="radio" name="${numeroPregunta}"value="${letraRespuesta}">
                    
                </label></td>
                `
            );
        }
        pregruntasYrespuestas.push(
            `<tr>
             
            <td class="cuestion">${preguntaActual.pregunta}</td>
           ${respuestas.join('')}
            </tr>
            <tr>
            </tr>
            `
        );
    });

    contenedor2.innerHTML = pregruntasYrespuestas.join('');
}

*/

function desactivarNP(idAux, id1, id2, idAux1, idAux2 ) {
    cb = document.getElementById(idAux);
    if (cb.checked) {
        document.getElementById(id1).disabled = true;
        document.getElementById(id2).disabled = true;
        if (!document.getElementById(idAux1).checked && !document.getElementById(idAux2).checked) {
            document.getElementById(idAux1).disabled = false;
            document.getElementById(idAux2).disabled = false;
        }
    } else {
        document.getElementById(id1).disabled = false;
        document.getElementById(id2).disabled = false;

    }
}

function beLikeRadio(id) {
    document.getElementById(id).checked = false;
}

function escribirHTML(grupo, matriz, id) {
    contenedor = document.getElementById(id);
    const pregruntasYrespuestas = [];
    var contador = 1;
    var subgrupo = 1;
    matriz.forEach((preguntaActual, numeroPregunta) => {
        const respuestas = [];
        var auxLetra;
        var auxCon1;
        var auxCon2;
        var blanRow = '';
        for (letraRespuesta in preguntaActual.respuestas) {
            switch (letraRespuesta) {
                case 'a':
                    auxLetra = 'b'
                    break;
                case 'b':
                    auxLetra = 'a';
                    break;
            }
            switch (contador) {
                case 1:
                    auxCon1 = 2;
                    auxCon2 = 3;
                    blanRow = "";
                    break;
                case 2:
                    auxCon1 = 1;
                    auxCon2 = 3;
                    blanRow = "";
                    break;
                case 3:
                    auxCon1 = 1;
                    auxCon2 = 2;
                    blanRow = '<tr class="blank_row"> <td colspan="3"></td> </tr>';
                    break;
            }
            respuestas.push( //name="g${grupo}p${preguntaActual.letra}r${letraRespuesta}" es lo que genera la variable post en ResultadosTest.php
                `<td align="center"><label>
                    <input type="checkbox" 
                        onchange="desactivarNP('g${grupo}sg${subgrupo}p${contador}r${letraRespuesta}',
                        'g${grupo}sg${subgrupo}p${auxCon1}r${letraRespuesta}',
                        'g${grupo}sg${subgrupo}p${auxCon2}r${letraRespuesta}',
                        'g${grupo}sg${subgrupo}p${auxCon1}r${auxLetra}',
                        'g${grupo}sg${subgrupo}p${auxCon2}r${auxLetra}');"
                        onclick="beLikeRadio('g${grupo}sg${subgrupo}p${contador}r${auxLetra}');"
                        name="g${grupo}p${preguntaActual.letra}r${letraRespuesta}"
                        class="respuesta"
                        id="g${grupo}sg${subgrupo}p${contador}r${letraRespuesta}" value="0" required
                    >
                </label></td>
                `
            );
        }
        pregruntasYrespuestas.push(
            `<tr>
             
            <td class="cuestion">${preguntaActual.pregunta}</td>
           ${respuestas.join('')}
            </tr>
            ${blanRow}
            `
        );
        if ((contador % 3) != 0) {
            contador++;
        } else {
            contador = 1;
            subgrupo++;
        }
    });

    contenedor.innerHTML = pregruntasYrespuestas.join('');
}

function mostrarTodo() {
    escribirHTML(1, Grupo1, "testP1");
    escribirHTML(2, Grupo2, "testP2");
    escribirHTML(3, Grupo3, "testP3");
    escribirHTML(4, Grupo4, "testP4");
    escribirHTML(5, Grupo5, "testP5");
    escribirHTML(6, Grupo6, "testP6");
    escribirHTML(7, Grupo7, "testP7");
    escribirHTML(8, Grupo8, "testP8");
    escribirHTML(9, Grupo9, "testP9");
    escribirHTML(10, Grupo10, "testP10");
    escribirHTML(11, Grupo11, "testP11");
    escribirHTML(12, Grupo12, "testP12");
    contenedor2.style.display = "none";
    contenedor3.style.display = "none";
    contenedor4.style.display = "none";
    contenedor5.style.display = "none";
    contenedor6.style.display = "none";
    contenedor7.style.display = "none";
    contenedor8.style.display = "none";
    contenedor9.style.display = "none";
    contenedor10.style.display = "none";
    contenedor11.style.display = "none";
    contenedor12.style.display = "none";
}

window.onload = mostrarTodo;

var antAux = 0;
var actAux = 1;
var sigAux = 2;




function retroceder() { //funcion para retroceder al anterior grupo de preguntas
    switch (antAux) {
        case 1:
            contenedor1.style.display = "table-row-group";
            contenedor2.style.display = "none";
            document.getElementById('ant').disabled = true;
            break;
        case 2:
            contenedor2.style.display = "table-row-group";
            contenedor3.style.display = "none";
            break;
        case 3:
            contenedor3.style.display = "table-row-group";
            contenedor4.style.display = "none";
            break;
        case 4:
            contenedor4.style.display = "table-row-group";
            contenedor5.style.display = "none";
            break;
        case 5:
            contenedor5.style.display = "table-row-group";
            contenedor6.style.display = "none";
            break;
        case 6:
            contenedor6.style.display = "table-row-group";
            contenedor7.style.display = "none";
            break;
        case 7:
            contenedor7.style.display = "table-row-group";
            contenedor8.style.display = "none";
            break;
        case 8:
            contenedor8.style.display = "table-row-group";
            contenedor9.style.display = "none";
            break;
        case 9:
            contenedor9.style.display = "table-row-group";
            contenedor10.style.display = "none";
            break;
        case 10:
            contenedor10.style.display = "table-row-group";
            contenedor11.style.display = "none";
            break;
        case 11:
            contenedor11.style.display = "table-row-group";
            contenedor12.style.display = "none";
            document.getElementById('sig').disabled = false;
            break;
        default:
            console.log("Algo anda mal, sigAux is default");
            antAux++;
            sigAux++;
            actAux++;
            break;
    }
    antAux--;
    sigAux--;
    actAux--;
    document.getElementById('act').innerHTML = actAux;
}

function avanzar() { //funcion para avanzar al sig grupo de preguntas
    switch (sigAux) {
        case 2:
            contenedor1.style.display = "none";
            contenedor2.style.display = "table-row-group";
            document.getElementById('ant').disabled = false;
            break;
        case 3:
            contenedor2.style.display = "none";
            contenedor3.style.display = "table-row-group";
            break;
        case 4:
            contenedor3.style.display = "none";
            contenedor4.style.display = "table-row-group";
            break;
        case 5:
            contenedor4.style.display = "none";
            contenedor5.style.display = "table-row-group";
            break;
        case 6:
            contenedor5.style.display = "none";
            contenedor6.style.display = "table-row-group";
            break;
        case 7:
            contenedor6.style.display = "none";
            contenedor7.style.display = "table-row-group";
            break;
        case 8:
            contenedor7.style.display = "none";
            contenedor8.style.display = "table-row-group";
            break;
        case 9:
            contenedor8.style.display = "none";
            contenedor9.style.display = "table-row-group";
            break;
        case 10:
            contenedor9.style.display = "none";
            contenedor10.style.display = "table-row-group";
            break;
        case 11:
            contenedor10.style.display = "none";
            contenedor11.style.display = "table-row-group";
            break;
        case 12:
            contenedor11.style.display = "none";
            contenedor12.style.display = "table-row-group";
            document.getElementById('sig').disabled = true;
            break;
        default:
            console.log("Algo anda mal, sigAux is default");
            antAux--;
            sigAux--;
            actAux--;
            break;
    }
    antAux++;
    sigAux++;
    actAux++;
    document.getElementById('act').innerHTML = actAux;
}

//mostrarTest();
//mostrarTestP2();