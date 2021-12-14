<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba</title>
     <!-- Bootstrap CSS -->    
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- FontAwesom CSS -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">     
    <!--Sweet Alert 2 -->
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">        
    <!--CSS custom -->  
    <link rel="stylesheet" href="main.css">  
</head>
<body>
    <header>
        <h2 class='text-center text-dark'><span class='badge badge-primary'>Crud con vuejs</span></h2>
    </header>
    <div id="appUsuario">
        <div class="container">
            <div class="row">
                <div class="col">
                    <button @click='btnAlta' class='btn btn-success' title='Nuevo'><i class='fas fa-plus-circle fa-2x'></i></button>
                </div>
                <div class="col text-right">
                    <h5>Total usuarios: <span class='badge badge-success'>{{totalUsuario}}</span></h5>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <table class='table table-striped'>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>nombre</th>
                                <th>correo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(usuario,indice) of usuarios">
                                <td>{{usuario.id}}</td>
                                <td>{{usuario.nombre}}</td>
                                <td>{{usuario.correo}}</td>
                                <!-- td>
                                    <div class="col-md-8">
                                        <input type="number" v-model.number='usuario.id' class='form-control text-right' disabled>
                                    </div>
                                </td -->
                                <td>
                                    <div class="btn-group" role='group'>
                                        <button class='btn btn-secondary' @click='btnEditar(usuario.id, usuario.nombre, usuario.correo)'>
                                            <i class='fas fa-pencil-alt'></i>
                                        </button>
                                        <button class='btn btn-danger' @click='btnDelete(usuario.id)'>
                                            <i class='fas fa-trash-alt'></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>         
    <!--Vue.JS -->    
    <script src="js/vue.js"></script>              
    <!--Axios -->      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.2/axios.js"></script>    
    <!--Sweet Alert 2 -->        
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>      
    <!--Código custom -->          
    <script src="js/prueba.js"></script> 
</body>
</html>

