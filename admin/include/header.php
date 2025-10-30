 <!-- [ Header Topbar ] start -->
 <header class="pc-header">
   <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
     <div class="me-auto pc-mob-drp">
       <ul class="list-unstyled">
         <!-- ======= Menu collapse Icon ===== -->
         <li class="pc-h-item pc-sidebar-collapse">
           <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
             <i class="ti ti-menu-2"></i>
           </a>
         </li>
         <li class="pc-h-item pc-sidebar-popup">
           <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
             <i class="ti ti-menu-2"></i>
           </a>
         </li>
         <li class="pc-h-item d-none d-md-inline-flex">
           <form class="form-search">
             <i class="search-icon">
               <svg class="pc-icon">
                 <use xlink:href="#custom-search-normal-1"></use>
               </svg>
             </i>
             <input type="search" class="form-control" placeholder="Ctrl + K" />
           </form>
         </li>
       </ul>
     </div>
     <!-- [Mobile Media Block end] -->
     <div class="ms-auto">
       <ul class="list-unstyled">
         <li class="dropdown pc-h-item">
           <a
             class="pc-head-link dropdown-toggle arrow-none me-0"
             data-bs-toggle="dropdown"
             href="#"
             role="button"
             aria-haspopup="false"
             aria-expanded="false">
             <svg class="pc-icon">
               <use xlink:href="#custom-sun-1"></use>
             </svg>
           </a>
           <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
             <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
               <svg class="pc-icon">
                 <use xlink:href="#custom-moon"></use>
               </svg>
               <span>Dark</span>
             </a>
             <a href="#!" class="dropdown-item" onclick="layout_change('light')">
               <svg class="pc-icon">
                 <use xlink:href="#custom-sun-1"></use>
               </svg>
               <span>Light</span>
             </a>
             <a href="#!" class="dropdown-item" onclick="layout_change_default()">
               <svg class="pc-icon">
                 <use xlink:href="#custom-setting-2"></use>
               </svg>
               <span>Default</span>
             </a>
           </div>
         </li>
         <li class="dropdown pc-h-item">
           <a
             class="pc-head-link dropdown-toggle arrow-none me-0"
             data-bs-toggle="dropdown"
             href="#"
             role="button"
             aria-haspopup="false"
             aria-expanded="false">
             <svg class="pc-icon">
               <use xlink:href="#custom-language"></use>
             </svg>
           </a>
           <div class="dropdown-menu dropdown-menu-end pc-h-dropdown lng-dropdown">
             <a href="#!" class="dropdown-item" data-lng="en">
               <span>
                 English
                 <small>(UK)</small>
               </span>
             </a>
             <a href="#!" class="dropdown-item" data-lng="fr">
               <span>
                 français
                 <small>(French)</small>
               </span>
             </a>
             <a href="#!" class="dropdown-item" data-lng="ro">
               <span>
                 Română
                 <small>(Romanian)</small>
               </span>
             </a>
             <a href="#!" class="dropdown-item" data-lng="cn">
               <span>
                 中国人
                 <small>(Chinese)</small>
               </span>
             </a>
           </div>
         </li>
       </ul>
     </div>
   </div>
 </header>

 <!-- [ Header ] end -->