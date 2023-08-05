<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}" >
        <i class="fa fa-sign-out-alt"></i>Çıkış Yap
        </a>
      </li>
    </ul>
  </nav>
  

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="" class="brand-link">
      <div class="image bg-success d-flex align-items-center justify-content-center m-0 p-2">
        <i class="fa fa-plane-departure"></i>
        <span class="brand-text font-weight-light">Uçak Bileti</span>
      </div>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a class="nav-link active">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Görevler
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Görev Ekle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tüm Görevler</p>
                </a>
              </li>
            </ul>
          </li>
          <!--<li class="nav-item menu-open">
            <a class="nav-link active">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Projeler
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proje Ekle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tüm Projeler</p>
                </a>
              </li>
            </ul>
          </li>-->
        </ul>
      </nav>
    </div>
  </aside>
