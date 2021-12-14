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
    
    <div id="app">
        <!-- h1 v-text='mensaje'></h1>
        <input type="text" name="" v-model='mensaje' -->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Agregar notas</h1>
                     <label scope="col">nombre</label>
                     <input type="text" class="form-control" v-model='nombre'>
                     <label scope="col">Promedio</label>
                     <input type="number" max='20' min='0' class="form-control" v-model='promedio'>
                     <input type="button"  value="Guardar" class="btn btn-success mt-2" v-on:click='agregarNota'>
                </div>
                <div class="col-sm-6">
                    <h1 v-if='lista.length > 0'>Lista de notas</h1>
                     <h1 v-else='lista'>No existen notas</h1>
                    <table class="table">
                        <caption>table title and/or explanatory text</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">nombre</th>
                                <th scope="col">Promedio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for='item in lista'>
                                <td cope="row" v-text='item.nombre'
                                 v-bind:style="item.estado==false?'color:red;':'color:green;'"></td>
                                <td v-text='item.promedio'></td>
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
    <script src="js/principal.js"></script>         
    </body>
</html>