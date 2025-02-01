# RealTime-Orientation-Visualizer
 Sistema de Orientación 3D en Tiempo Real

# Sistema de Orientación 3D en Tiempo Real 📡➔🖥️

**Sistema distribuido para visualizar orientación de dispositivos móviles en 3D/2D con sincronización vía base de datos**

![Arquitectura del Sistema](diagrama.jpg) 

## 🌐 Componentes del Sistema

### 1. Emisor (Dispositivo Móvil)
- **`emisor.html`**: Página html que accede a los sensores del teléfono (giroscopio, acelerómetro)
- **Funcionalidades**:
  - Captura datos de orientación (α, β, γ) cada 100 ms
  - Almacena en MySQL usando `PHP/guardar_datos.php`
  - Probado en dispositivos Xiaomi Redmi
  - Interfaz móvil optimizada con controles de calibración

### 2. Receptor (Ordenador)
- **`receptor.html`**: Visualización 2D con brújula personalizada
- **`receptor2.html`**: Visualización 3D con Three.js (`three.min.js`)
- **Base de Datos**: MySQL para sincronización en tiempo real
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

## 🛠️ Requisitos de Instalación

1. **Servidor Local**:
   - Recomendado: XAMPP ([Descarga](https://www.apachefriends.org))
   - Módulos requeridos:
     - Apache
     - MySQL
     - PHP 7.4+

