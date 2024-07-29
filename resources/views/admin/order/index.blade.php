@extends("admin.template")
@section("content")
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Table</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Tabel Pesanan</h6>
                        <div class="table-responsive tw-h-[100vh]">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>catalogue_id</th>
                                        <th>package name</th>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>phone_number</th>
                                        <th>wedding_date</th>
                                        <th>status</th>
                                        <th>Actions</th>
                                        <th>user_id</th>
                                        <th>created_at</th>
                                        <th>updated_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $order->catalogue_id }}</td>
                                            <td>{{ $order->package_name }}</td>
                                            <td>{{ $order->name }}</td>
                                            <td>{{ $order->email }}</td>
                                            <td>{{ $order->phone_number }}</td>
                                            <td>{{ $order->wedding_date }}</td>
                                            <td class="{{ 'status-' . strtolower($order->status) }}">{{ ucfirst($order->status) }}</td>
                                            <td>
                                                <form action="{{ route('orders.changeStatus', $order->order_id) }}" method="POST" id="statusForm{{ $order->order_id }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="status" id="statusInput{{ $order->order_id }}">
                                                </form>
                                                
                                                <div class="dropdown">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton{{ $order->order_id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                                        {{ ucfirst($order->status) }}
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $order->order_id }}">
                                                        <li><a class="dropdown-item" href="#" onclick="changeStatus('{{ $order->order_id }}', 'pending')">Pending</a></li>
                                                        <li><a class="dropdown-item" href="#" onclick="changeStatus('{{ $order->order_id }}', 'approved')">Approved</a></li>
                                                        <li><a class="dropdown-item" href="#" onclick="changeStatus('{{ $order->order_id }}', 'canceled')">Canceled</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>{{ $order->user_id }}</td>
                                            <td>{{ $order->created_at }}</td>
                                            <td>{{ $order->updated_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    function changeStatus(orderId, status) {
        document.getElementById('statusInput' + orderId).value = status;
        document.getElementById('statusForm' + orderId).submit();
    }
</script>
@endsection
