<!doctype html>
<html>
    <head>
    <link rel="shortcut icon" href="#" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->    
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <!-- FontAwesom CSS -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">     
    <!--Sweet Alert 2 -->
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">        
    <!--CSS custom -->  
    <link rel="stylesheet" href="css/main.css">  
    </head>
    <body>
    <header>
        <h2 class="text-center text-dark"><span class="badge badge-success">CRUD con VUE.JS</span></h2>
    </header>    
    
     <div id="appMoviles">               
        <div class="container">                
            <div class="row">       
                <div class="col">        
                    <button @click="btnAlta" class="btn btn-success" title="Nuevo"><i class="fas fa-plus-circle fa-2x"></i></button>
                    <a href='index3.php' class="btn btn-success" title="Prueba"><i class="fas fa-book fa-2x"></i></a>
                </div>
                <div class="col text-right">                        
                    <h5>Stock Total cc: <span class="badge badge-success">{{totalStock}}</span></h5>
                </div>    
            </div>                
            <div class="row mt-5">
                <div class="col-lg-12">                    
                    <table class="table table-striped">
                        <thead>
                            <tr class="bg-primary text-light">
                                <th>ID</th>                                    
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Stock</th>    
                                <th>Acciones</th>
                            </tr>    
                        </thead>
                        <tbody>
                            <tr v-for="(movil,indice) of moviles">                                
                                <td>{{movil.id}}</td>                                
                                <td>{{movil.marca}}</td>
                                <td>{{movil.modelo}}</td>
                                <td>
                                    <div class="col-md-8">
                                    <input type="number" v-model.number="movil.stock" class="form-control text-right" disabled>      
                                    </div>    
                                </td>
                                <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-secondary" title="Editar" @click="btnEditar(movil.id, movil.marca, movil.modelo, movil.stock)"><i class="fas fa-pencil-alt"></i></button>    
                                    <button class="btn btn-danger" title="Eliminar" @click="btnBorrar(movil.id)"><i class="fas fa-trash-alt"></i></button>      
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
    <script src="plugins/jquery/jquery-3.3.1.min.js"></script>
    <script src="plugins/popper/popper.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>         
    <!--Vue.JS -->    
    <script src="plugins/vue/vue.js"></script>              
    <!--Axios -->      
    <script src="plugins/axios/axios.min.js"></script>    
    <!--Sweet Alert 2 -->        
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>      
    <!--Código custom -->          
    <script src="js/main.js"></script>         
    </body>
</html>