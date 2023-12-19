<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
      </div>
  
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search..."/>
        <span class="input-group-btn">
          <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Categories</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('categories.index') }}"><i class="fa fa-circle-o"></i>Category List</a></li>
          <li ><a href="{{ route('categories.create') }}"><i class="fa fa-circle-o"></i> Add Category</a></li>
        </ul>
        
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Products</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('products.index') }}"><i class="fa fa-circle-o"></i>Product List</a></li>
          <li class="active"><a href="{{ route('products.create') }}"><i class="fa fa-circle-o"></i>Add Product</a></li>
        </ul>

        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Sellers</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="index.html"><i class="fa fa-circle-o"></i>Seller List</a></li>
          <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i>Add Seller</a></li>
        </ul>



    </ul>
  </section>
  <!-- /.sidebar -->
</aside>