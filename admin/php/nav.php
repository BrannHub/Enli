<div class="wrapper ">
   <div class="sidebar" data-color="orange" data-background-color="black" data-image="https://i.imgur.com/jbKKAMa.jpg">
     <!--
       Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

       Tip 2: you can also add an image using data-image tag
   -->
     <div class="logo">
       <a href="#" class="simple-text logo-normal">
         <center><img src="https://i.imgur.com/OHMNlUV.png" style="width:30%;" /></center>
       </a>
     </div>
     <div class="sidebar-background" style="background-image: url(https://ak9.picdn.net/shutterstock/videos/1957549/thumb/1.jpg) "></div>
     <div class="sidebar-wrapper">
       <div class="user">
         <div class="photo">
           <img src="https://i.imgur.com/Khy7xko.png" />
         </div>
         <div class="user-info">
           <a data-toggle="collapse" href="#collapseExample" class="username">
             <span>
               Elias Astrada
               <b class="caret"></b>
             </span>
           </a>
           <div class="collapse" id="collapseExample">
             <ul class="nav">
               <li class="nav-item">
                 <a class="nav-link" href="#">
                   <span class="sidebar-mini"> <i class="material-icons">people</i> </span>
                   <span class="sidebar-normal"> Mi perfil </span>
                 </a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="#">
                   <span class="sidebar-mini"> <i class="material-icons">edit</i> </span>
                   <span class="sidebar-normal"> Editar perfil </span>
                 </a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="#">
                   <span class="sidebar-mini"> <i class="material-icons">settings</i> </span>
                   <span class="sidebar-normal"> Ajustes </span>
                 </a>
               </li>
             </ul>
           </div>
         </div>
       </div>
       <ul class="nav">
         <li class="nav-item active">
           <a class="nav-link" href="inicio.php">
             <i class="material-icons">dashboard</i>
             <p> Inicio </p>
           </a>
         </li>
       </ul>
     </div>
   </div>
   <div class="main-panel">
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg bg-warning navbar-absolute fixed-top ">
       <div class="container-fluid">
         <div class="navbar-wrapper">
           <div class="navbar-minimize">
             <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
               <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
               <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
             </button>
           </div>
           <a class="navbar-brand" href="#"><?php echo $pagina; ?></a>
         </div>
         <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
           <span class="sr-only">Toggle navigation</span>
           <span class="navbar-toggler-icon icon-bar"></span>
           <span class="navbar-toggler-icon icon-bar"></span>
           <span class="navbar-toggler-icon icon-bar"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-end">
           <ul class="navbar-nav">
             <li class="nav-item dropdown">
               <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="material-icons">notifications</i>
                 <span class="notification">5</span>
                 <p class="d-lg-none d-md-block">
                   Some Actions
                 </p>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                 <a class="dropdown-item" href="#">Mike John responded to your email</a>
                 <a class="dropdown-item" href="#">You have 5 new tasks</a>
                 <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                 <a class="dropdown-item" href="#">Another Notification</a>
                 <a class="dropdown-item" href="#">Another One</a>
               </div>
             </li>
             <li class="nav-item dropdown">
               <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="material-icons">person</i>
                 <p class="d-lg-none d-md-block">
                   Account
                 </p>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                 <a class="dropdown-item" href="#">Profile</a>
                 <a class="dropdown-item" href="#">Settings</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="#">Log out</a>
               </div>
             </li>
           </ul>
         </div>
       </div>
     </nav>
     <!-- End Navbar -->
