<!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              
            </li>
            
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="<?= base_url() ?>assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>Mi Perfil</span>
                </a>                
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Cerrar Sesion</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Lista de Usuarios</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a data-toggle="modal" data-target="#exampleModal" href="#" class="btn btn-sm btn-neutral">Nuevo Registro</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Usuarios</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Proyecto</th>
                    <th scope="col" class="sort" data-sort="budget">Precio</th>
                    <th scope="col" class="sort" data-sort="status">Estado</th>
                    <th scope="col" class="sort" data-sort="status">Fecha</th>
                    <th scope="col"></th>
               
                  </tr>
                </thead>
                <tbody class="list" id="resultados">
                  

                  
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Proyecto</label>
            <input name="crear_nombre" type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Precio</label>
            <input name="crear_precio" type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <select class="form-control" name="crear_estado" id="index-residence" data-minimum-results-for-search="Infinity">
              <option value="0">Pendiente</option>
              <option value="1">Aprobado</option>
            </select>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button onclick="insert()" type="button" class="btn btn-primary">Crear Usuario</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Proyecto</label>
            <input id="actualizar_nombre" name="actualizar_nombre" type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Precio</label>
            <input id="actualizar_precio" name="actualizar_precio" type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" id="actualizar_estado" class="col-form-label"></label>
            <select class="form-control" name="actualizar_estado" id="index-residence" data-minimum-results-for-search="Infinity">
              <option value="0">Pendiente</option>
              <option value="1">Aprobado</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button onclick="update()" type="button" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">

  var nombre = "";
  var precio = "";
  var estado = "";
  var id = "";

  window.onload=function() {
      all();
    }

  function all(){
            
    $.ajax({
      url:"http://localhost/CRUD/home/all",
      method:"post",
        success:function(response){

        $('#resultados').empty();

        const parseData = JSON.parse(response);

        $.each(parseData, function(i, item){

          $('#resultados').append(

                    '<tr>'+
                      '<th scope="row">'+
                        '<div class="media align-items-center">'+
                          '<a href="#" class="avatar rounded-circle mr-3">'+
                            '<img alt="Image placeholder" src="<?= base_url() ?>assets/img/theme/bootstrap.jpg">'+
                          '</a>'+
                          '<div class="media-body">'+
                            '<span class="name mb-0 text-sm">'+item.nombre+ '</span>'+
                          '</div>'+
                        '</div>'+
                      '</th>'+
                      '<td class="budget">'+item.precio+                        
                      '</td>'+
                      '<td>'+
                        '<span class="badge badge-dot mr-4">'+
                          '<i class="bg-warning"></i>'+
                          '<span class="status">'+item.estado+'</span>'+
                        '</span>'+
                      '</td>'+
                      '<td>'+
                        '<span class="badge badge-dot mr-4">'+
                          '<i class="bg-success"></i>'+
                          '<span class="status">'+item.log+'</span>'+
                        '</span>'+
                      '</td>'+                      
                      '<td class="text-right">'+
                        '<div class="dropdown">'+
                         '<input type="hidden" name="id" value="'+item.id+ '">'+
                          '<a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"  aria-expanded="false">'+
                            '<i class="fas fa-ellipsis-v"></i>'+
                          '</a>'+
                          '<div id="evaluate" class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">'+
                            '<button id="'+item.id+ '" value="'+item.id+ '" onclick="busqueda(this)" class="dropdown-item" data-toggle="modal" data-target="#exampleModal2" href="#">Editar</button>'+
                            '<button id="'+item.id+ '" value="'+item.id+ '" onclick="delet(this)" class="class-button dropdown-item" href="#">Eliminar</button>'+
                          '</div>'+
                        '</div>'+
                      '</td>'+
                    '</tr>'

            );

        });

      },
        error:function(){                        
          alert("Error 3"); 
        }
      })
                                  
  }

  function busqueda(obj){

    id = obj.id;

    $.ajax({
      url:"http://localhost/CRUD/home/busqueda",
      method:"post",
      data:{
        id: id
      },
        success:function(response){

        const parseData = JSON.parse(response);

        $.each(parseData, function(i, item){

          $("#actualizar_nombre").val(item.nombre);
          $("#actualizar_precio").val(item.precio);
          $("#actualizar_estado").val(item.estado);


        });

      },
        error:function(){                        
          alert("Error 3"); 
        }
      })
                                  
  }

  function insert(){

    nombre = $('input:text[name=crear_nombre]').val();
    precio = $('input:text[name=crear_precio]').val();
    estado = $('select[name=crear_estado]').val(); 
            
    $.ajax({
      url:"http://localhost/CRUD/home/insert",
      method:"post",
      data:{
        nombre: nombre, 
        precio: precio, 
        estado: estado
      },        
       
        success:function(response){ 

        alert(response);

        all();                                          
               

      },
        error:function(){                        
          alert("Error 3"); 
        }
      })
                                  
  }

  function update(){

    nombre = $('input:text[name=actualizar_nombre]').val();
    precio = $('input:text[name=actualizar_precio]').val();
    estado = $('select[name=actualizar_estado]').val(); 
    
    $.ajax({
      url:"http://localhost/CRUD/home/updat",
      method:"post",
      data:{
        id: id,
        nombre: nombre, 
        precio: precio, 
        estado: estado
      },
        success:function(response){

        alert(response);

        all();
                                                  
                               
      },
        error:function(){                        
          alert("Error 3"); 
        }
      })
                                  
  } 

  function delet(obj){
    id = obj.id;
            
    $.ajax({
      url:"http://localhost/CRUD/home/delete",
      method:"post",
      data:{
        id: id
      },
        success:function(response){

        alert(response);

        all(); 
                                                  
                              
      },
        error:function(){                        
          alert("Error 3"); 
        }
      })
                                  
  } 

</script>









      
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>