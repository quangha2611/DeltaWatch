@extends('voyager::master')
@section('css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"></script>
@endsection
@section('page_title')
    Đang xem báo cáo
@endsection
@section('content')
    <div class="container-fluid">
        <h1 class="page-title" style="padding-left: 0">
            Báo cáo số lượng đơn hàng tháng {{ $month }}/{{ $year }}
        </h1>
        <div>
            <canvas id="myChart" width="400" height="150" days="{{ json_encode($days) }}" orders="{{ json_encode($orders) }}"></canvas>
            <script>
                var ctx = document.getElementById('myChart');
                var days = ctx.getAttribute('days');
                days = JSON.parse(days);
                days.map( day => parseInt(day) );
                var orders = ctx.getAttribute('orders');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: days,
                        datasets: [{
                            data: JSON.parse(orders),
                            label: 'Số lượng đơn hàng',
                            borderColor: 'rgb(75, 192, 192)',
                            tension: 0.1,
                            fill: false,
                        }]
                    },
                });
            </script>
        </div>
    </div>
@stop



