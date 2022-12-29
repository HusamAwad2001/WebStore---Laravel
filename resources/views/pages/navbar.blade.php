
@if(Auth::user() && Auth::user()->roles =='admin')


    <li class="nav-item  ">
        <a href="#" class="nav-link nav-toggle"> <i class="fa fa-user"></i>
            <span class="title">Category</span> <span class="arrow"></span>
        </a>
        <ul class="sub-menu">

            <li class="nav-item  ">
                <a href="{{ route('category.index') }}" class="nav-link "> <span class="title">All Category</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{ route('category.create') }}" class="nav-link "> <span class="title">Add Category</span>
                </a>
            </li>

        </ul>
    </li>

    <li class="nav-item  ">
        <a href="#" class="nav-link nav-toggle"> <i class="fa fa-user"></i>
            <span class="title">Product</span> <span class="arrow"></span>
        </a>
        <ul class="sub-menu">

            <li class="nav-item  ">
                <a href="{{ route('products.index') }}" class="nav-link "> <span class="title">All Product</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{ route('products.create') }}" class="nav-link "> <span class="title">Add Product</span>
                </a>
            </li>

        </ul>
    </li>
    <li class="nav-item  ">
        <a href="#" class="nav-link nav-toggle"> <i class="fa fa-user"></i>
            <span class="title">Warehouses</span> <span class="arrow"></span>
        </a>
        <ul class="sub-menu">

            <li class="nav-item  ">
                <a href="{{ route('warehouses.index') }}" class="nav-link "> <span class="title">All Warehouse</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{ route('warehouses.create') }}" class="nav-link "> <span class="title">Add Warehouse</span>
                </a>
            </li>

        </ul>
    </li>

    <li class="nav-item  ">
        <a href="#" class="nav-link nav-toggle"> <i class="fa fa-user"></i>
            <span class="title">All Order</span> <span class="arrow"></span>
        </a>
        <ul class="sub-menu">

            <li class="nav-item  ">
                <a href="{{ route('orders.index') }}" class="nav-link "> <span class="title">All orders</span>
                </a>
            </li>


        </ul>
    </li>

@else

    <li class="nav-item  ">
        <a href="#" class="nav-link nav-toggle"> <i class="fa fa-user"></i>
            <span class="title">All Order</span> <span class="arrow"></span>
        </a>
        <ul class="sub-menu">

            <li class="nav-item  ">
                <a href="{{ route('myOrder') }}" class="nav-link "> <span class="title">My orders</span>
                </a>
            </li>


        </ul>
    </li>

@endif
