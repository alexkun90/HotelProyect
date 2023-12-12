<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE . ' | ' . $data['title']; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="<?php echo RUTA_PRINCIPAL . 'assets/principal/'; ?>css/index.css">
</head>

<body>
    <header>
        <div class="d-flex align-items-center fixed-top">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark custom-navbar w-100">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="https://blogger.googleusercontent.com/img/a/AVvXsEixuL4QGDDai2GGJJrbXHy_RDb80h4gTZQuE6u4sVVSHYIhvNhZhkq73eD81WzLh8DIXbMlpxiiGeKEm-vvRhrvzkOmWqVuZgSPBRy2lkRG-fdfGPDjuLyYUaiNXq1xxflJpwhdBxu8QLZaLTlrMTUuIh0JPr-vPuQpW01mrDxGnFQANhD1CgJG2PZuoAE-=w549-h549" height="40" alt="Logo">
                    </a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo RUTA_PRINCIPAL; ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo RUTA_PRINCIPAL . 'habitacion'; ?>">Alojamiento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Contactenos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Galeria</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="#">My profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="">Settings</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="">Login</a>
                                </li>
                            </ul>
                            <a class="nav-link dropdown-toggle d-flex align-items-center ms-auto" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://www.asuntojuridico.cl/wp-content/uploads/2020/03/abogados-laborales-el-despido-por-necesidades-de-la-empresa.jpg.webp" class="rounded-circle" height="22" alt="Portrait of a Woman" loading="lazy" />
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>