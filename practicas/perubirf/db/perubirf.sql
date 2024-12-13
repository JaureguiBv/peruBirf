CREATE TABLE tblAlumnos (
    aluDni VARCHAR(12) PRIMARY KEY, 
    aluNombre VARCHAR(50) NOT NULL, 
    aluApellido VARCHAR(50) NOT NULL,
    aluGrado TINYINT UNSIGNED NOT NULL, 
    aluSeccion CHAR(1) NOT NULL,
    aluSexo ENUM('M', 'F')  NOT NULL DEFAULT 'M', 
    aluFoto VARCHAR(255) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE tblUsuarios (
    userID INT AUTO_INCREMENT PRIMARY KEY,
    userEmail VARCHAR(255) NOT NULL UNIQUE, 
    userContrasena VARCHAR(100) NOT NULL,
    userTipo ENUM('escolar', 'bibliotecaria', 'director') NOT NULL DEFAULT 'escolar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE tblLibros (
    libId INT AUTO_INCREMENT PRIMARY KEY,        
    libNombre VARCHAR(110) NOT NULL,          
    libGenero VARCHAR(50) NOT NULL, 
    libAutor VARCHAR(45), 
    libCantidad INT NOT NULL,
    libCreado TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    libActualizado TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE tblLibVirtual(
    LibVirId INT AUTO_INCREMENT PRIMARY KEY,
    LibVirNombre VARCHAR(100) NOT NULL,
    LibVirAutor VARCHAR(50) NOT NULL,
    LibVirPortada  VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE tblPrestamos (
    preId INT AUTO_INCREMENT PRIMARY KEY,      
    preFecha DATE NOT NULL DEFAULT CURRENT_DATE, 
    preFechaDevolucion DATE  NOT NULL,                    
    aluDni VARCHAR(12) NOT NULL,                
    libId INT NOT NULL,                        
    preEstado ENUM('prestado', 'devuelto') DEFAULT 'prestado', 
    CONSTRAINT fk_prestamos_aluDni FOREIGN KEY (aluDni) REFERENCES tblAlumnos(aluDni),
    CONSTRAINT fk_prestamos_libId FOREIGN KEY (libId) REFERENCES tblLibros(libId)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE tblReportes (
    repId INT AUTO_INCREMENT PRIMARY KEY,
    libId INT NOT NULL,
    aluDni VARCHAR(12) NOT NULL,
    preId INT NOT NULL,
    CONSTRAINT rep_libId FOREIGN KEY (libId)
        REFERENCES tblLibros(libId)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    CONSTRAINT rep_aluDni FOREIGN KEY (aluDni)
        REFERENCES tblAlumnos(aluDni)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    CONSTRAINT rep_preId FOREIGN KEY (preId)
        REFERENCES tblPrestamos(preId)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE tblComunicados (
    comId INT AUTO_INCREMENT PRIMARY KEY,  
    comTipo ENUM('Reunión de Padres', 'Apafa', 'Qaliwarma') NOT NULL DEFAULT 'Reunión de Padres', 
    comFoto VARCHAR(255),
    comTitulo VARCHAR(100) NOT NULL,               
    comDescripcion TEXT NOT NULL,                  
    comNota VARCHAR(100),                          
    comAutor VARCHAR(50) NOT NULL,                 
    comFecha DATE DEFAULT CURDATE()               
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE tblNoticias (
    notId INT AUTO_INCREMENT PRIMARY KEY,
    notTitulo VARCHAR(40) NOT NULL,
    notDescripcion TEXT NOT NULL,
    notImagen VARCHAR(255),
    notFecha DATE DEFAULT CURDATE()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
