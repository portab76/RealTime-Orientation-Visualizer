# RealTime-Orientation-Visualizer
 Sistema de Orientaci贸n 3D en Tiempo Real

![Receptor](./img/Rotacion.jpg) 

# Sistema de Orientaci贸n 3D en Tiempo Real 馃摗鉃旔煐ワ笍

**Sistema distribuido para visualizar orientaci贸n de dispositivos m贸viles en 3D/2D con sincronizaci贸n v铆a base de datos**

![Arquitectura del Sistema](./img/Diagrama.jpg) 

## 馃寪 Componentes del Sistema

### 1. Emisor (Dispositivo M贸vil)
- **`emisor.html`**: P谩gina html que accede a los sensores del tel茅fono (giroscopio, aceler贸metro)
- **Funcionalidades**:
  - Captura datos de orientaci贸n (伪, 尾, 纬) cada 100 ms
  - Almacena en MySQL usando `PHP/guardar_datos.php`
  - Probado en dispositivos Xiaomi Redmi
  - Interfaz m贸vil optimizada con controles de calibraci贸n
- **`emisor.php`**: P谩gina php que que actualiza en la base de datos los valores muestreados
![Emisor](./img/Emitir.jpg) 

### 2. Receptor (Ordenador)
- **`receptor.html`**: Visualizaci贸n con rotacion y br煤jula personalizada
- **`receptor2.html`**: Visualizaci贸n 3D con Three.js (`three.min.js`)
- **`receptor.php`**: P谩gina php que que recupera de la base de datos los valores muestreados
![Receptor](./img/Recibir.jpg) 

- **Base de Datos**: MySQL para sincronizaci贸n en tiempo real
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

## 馃洜锔?Resumen del Sistema

El programa sincroniza los movimientos del tel茅fono m贸vil con una visualizaci贸n en pantalla que combina:
- **Orientaci贸n 3D**: Rotaci贸n de un cubo usando 谩ngulos Euler (伪, 尾, 纬)
- **Direcci贸n 2D**: Br煤jula digital con correcci贸n de inclinaci贸n
- **Sincronizaci贸n en tiempo real**: Comunicaci贸n bidireccional a trav茅s de una base de datos MySQL

---

## 馃М C谩lculos Extendidos: Velocidades y Desplazamientos

### 1. Velocidad Angular
### 2. Desplazamiento Angular
### 3. Velocidad Lineal 
### 4. Desplazamiento Lineal

