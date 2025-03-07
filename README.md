# RealTime-Orientation-Visualizer
 Sistema de Orientacion 3D en Tiempo Real

![Receptor](./img/Rotacion.jpg) 

# Sistema de Orientacion 3D en Tiempo Real 

**Sistema distribuido para visualizar orientacion de dispositivos moviles en 3D/2D con sincronizacion via base de datos**

![Arquitectura del Sistema](./img/Diagrama.jpg) 

## Componentes del Sistema

### 1. Emisor (Dispositivo Movil)
- **`emisor.html`**: Pagina html que accede a los sensores del telefono (giroscopio, acelerometro)
- **Funcionalidades**:
  - Captura datos de orientacion (伪, 尾, 纬) cada 100 ms
  - Almacena en MySQL usando `PHP/guardar_datos.php`
  - Probado en dispositivos Xiaomi Redmi
  - Interfaz movil optimizada con controles de calibracion
- **`emisor.php`**: Pagina php que que actualiza en la base de datos los valores muestreados
![Emisor](./img/Emitir.jpg) 

### 2. Receptor (Ordenador)
- **`receptor.html`**: Visualizacion con rotacion y brujula personalizada
- **`receptor2.html`**: Visualizacion 3D con Three.js (`three.min.js`)
- **`receptor.php`**: Pagina php que que recupera de la base de datos los valores muestreados
![Receptor](./img/Recibir.jpg) 

- **Base de Datos**: MySQL para sincronizacion en tiempo real
  - Tabla `orientacion`:
    ```sql
CREATE TABLE `motion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agx` float DEFAULT NULL,
  `agy` float DEFAULT NULL,
  `agz` float DEFAULT NULL,
  `ax` float DEFAULT NULL,
  `ay` float DEFAULT NULL,
  `az` float DEFAULT NULL,
  `ai` float DEFAULT NULL,
  `gz` float DEFAULT NULL,
  `gx` float DEFAULT NULL,
  `gy` float DEFAULT NULL,
  `cnt` int(11) DEFAULT NULL,
  `st` timestamp NULL DEFAULT current_timestamp(),
  `alpha` float DEFAULT NULL,
  `beta` float DEFAULT NULL,
  `gamma` float DEFAULT NULL,
  `token` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO motion (token) VALUES ('POT');
    ```

## Resumen del Sistema

El programa sincroniza los movimientos del telefono movil con una visualizacion en pantalla que combina:
- **Orientacion 3D**: Rotaci贸n de un cubo usando angulos Euler (伪, 尾, 纬)
- **Direccion 2D**: Br煤jula digital con correccion de inclinacion
- **Sincronizacion en tiempo real**: Comunicaci贸n bidireccional a traves de una base de datos MySQL

---

## Calculos Extendidos: Velocidades y Desplazamientos

### 1. Velocidad Angular
### 2. Desplazamiento Angular
### 3. Velocidad Lineal 
### 4. Desplazamiento Lineal

