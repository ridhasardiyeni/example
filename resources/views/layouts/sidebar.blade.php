<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Olan Beruk</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
         <li class="active">
             <a  href="">
              <i class="glyphicon glyphicon-briefcase"></i>
              <span class="mini-click-non">Dashboard</span>
             </a>
            
         </li>
         <li class="active">
             <a  href="{{url('mahasiswa')}}">
              <i class="glyphicon glyphicon-briefcase"></i>
              <span class="mini-click-non">Mahasiswa</span>
             </a>
            
         </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>