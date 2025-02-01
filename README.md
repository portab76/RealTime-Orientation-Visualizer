# RealTime-Orientation-Visualizer
 Sistema de Orientación 3D en Tiempo Real

# Sistema de Orientación 3D en Tiempo Real 📡➔🖥️

**Sistema distribuido para visualizar orientación de dispositivos móviles en 3D/2D con sincronización vía base de datos**

![Arquitectura del Sistema](diagrama-arquitectura.png) <!-- Agrega tu diagrama aquí -->

## 🌐 Componentes del Sistema

### 1. Emisor (Dispositivo Móvil)
- **`emisor.html`**: Página web que accede a los sensores del teléfono (giroscopio, acelerómetro)
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
    CREATE TABLE orientacion (
        id INT AUTO_INCREMENT PRIMARY KEY,
        alpha FLOAT,
        beta FLOAT,
        gamma FLOAT,
        timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ```

## 🛠️ Requisitos de Instalación

1. **Servidor Local**:
   - Recomendado: XAMPP ([Descarga](https://www.apachefriends.org))
   - Módulos requeridos:
     - Apache
     - MySQL
     - PHP 7.4+

2. **Configuración de la Base de Datos**:
   ```bash
   mysql -u root -p
   CREATE DATABASE orientacion_3d;
   USE orientacion_3d;
   # Ejecutar el SQL de creación de tabla anterior
