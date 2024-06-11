 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="{{'/'}}" class="brand-link">
     <img src="{{URL::asset('/admin/dist/img/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light">Acharya Balkrishna</span>
   </a>
   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar Search Form -->
     <div class="form-inline">
       <div class="input-group" data-widget="sidebar-search">
         <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
         <div class="input-group-append">
           <button class="btn btn-sidebar">
             <i class="fas fa-search fa-fw"></i>
           </button>
         </div>
       </div>
     </div>
     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <li class="nav-item">
           <a href="{{url('/dashboard')}}" class="nav-link">
             <i class="nav-icon fas fa-th"></i>
             <p>Dashboard</p>
           </a>
         </li>

         <li class="nav-item">
           <a href="{{url('/admin/language')}}" class="nav-link">
             <i class="nav-icon fas fa-th"></i>
             <p>Language</p>
           </a>
         </li>

         <li class="nav-item">
           <a href="{{url('/admin/publication')}}" class="nav-link">
             <i class="nav-icon fas fa-th"></i>
             <p>Publication</p>
           </a>
         </li>

         <li class="nav-item">
           <a href="{{url('/admin/menu')}}" class="nav-link">
             <i class="nav-icon fas fa-th"></i>
             <p>Menu</p>
           </a>
         </li>

         <li class="nav-item">
           <a href="{{url('/admin/news')}}" class="nav-link">
             <i class="nav-icon fas fa-th"></i>
             <p>News</p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{url('/admin/photoGallery')}}" class="nav-link">
             <i class="nav-icon fas fa-th"></i>
             <p>Gallery</p>
           </a>
         </li>
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>