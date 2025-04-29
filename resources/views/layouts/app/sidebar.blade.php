<div class="border-end bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-light">Management Data</div>
    <div class="list-group list-group-flush">
       
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ url('dashboard') }}">Dashboard</a>
        @can('view good')
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ url('goods') }}">Data Barang</a>
        @endcan
        @can('view incoming')
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ url('incomings') }}">Barang Masuk</a>
        @endcan
        @can('view outcoming')
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ url('outcomings') }}">Barang Keluar</a>
        @endcan
        @can('view report')
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ url('reports') }}">Laporan Barang</a>
        @endcan
        @can('view operator')
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ url('operators') }}">Data Operator</a>
        @endcan
        @can('view user')
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ url('users') }}">Users</a>
        @endcan
        @can('view permission')
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ url('permissions') }}">Permisssion</a>
        @endcan
        @can('view role')
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ url('roles') }}">Role</a>
        @endcan
    </div>
</div>