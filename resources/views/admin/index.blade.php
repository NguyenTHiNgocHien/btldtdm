@extends('admin.template.master')
@section('content')
<section class="content">
   {{-- {{ (\Auth::guard('nhanvien')->user()->load('quyen')->quyen->q_ten) }} --}}
   <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-4">
          <h1>Thông báo nhanh</h1>
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
          <ol class="breadcrumb float-sm-right">
            {{-- <li class="breadcrumb-item"><a href="#">Trang chủ</a></li> --}}
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
   <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-olive"><i class="fas fa-money-bill-wave"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Tổng doanh thu</span>
          <span class="info-box-number">90<small>%</small></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="fas fa-pause"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">ĐH chưa duyệt</span>
          {{-- <span class="info-box-number">{{$countDH}}</span> --}}
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>


    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-blue"><i class="ion ion-ios-people-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Khách hàng</span>
          <span class="info-box-number">{{$countKH}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-purple"><i class="ion ion-ios-cart-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">SP bán trong ngày</span>
        <span class="info-box-number">{{$countSP}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Biểu đồ lượt truy cập</h3>
                  
                </div>
              </div>
              <div class="card-body">
                

                <div class="position-relative mb-4">
                  <canvas id="visitors-chart" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> Lượt truy cập
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Trang truy cập
                  </span>
                </div>
              </div>
      </div>
            <!-- /.card -->   
    </div>
          <!-- /.col-md-6 -->

    <div class="col-lg-12">
      <div class="card">
            <div class="card-header border-0">
              <h3 class="card-title">Lượt truy cập trong tháng</h3>
              
            </div>
            <div class="card-body table-responsive p-0">
              <table class="table table-striped table-valign-middle">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Địa chỉ</th>
                  <th>Lượt truy cập</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data['fetchTopReferrers'] as $key=>$item)
                <tr>
                  <td>
                    {{$key+1}}
                  </td>
                <td id="khongxacdinh">{{ $item["url"] }}</td>
                  <td>
                    {{ $item["pageViews"] }}
                  </td>
                 
                </tr>
                @endforeach
                
                </tbody>
              </table>
            </div>
      </div>
    </div>
          <!-- /.card -->
    <div class="col-lg-6">
      <div class="card card-danger">
        <div class="card-header">
          <h3 class="card-title">Doanh thu theo loại sản phẩm</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 661px;" width="661" height="250" class="chartjs-render-monitor"></canvas>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">
            <i class="far fa-chart-bar"></i>
            Khách hàng mới theo tháng
          </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div id="bar-chart" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="661" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 661px; height: 300px;"></canvas><canvas class="flot-overlay" width="661" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 661px; height: 300px;"></canvas><div class="flot-svg" style="position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; pointer-events: none;"><svg style="width: 100%; height: 100%;"><g class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><text x="137.5340909090909" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">February</text><text x="256.0894886363636" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">March</text><text x="369.2855113636364" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">April</text><text x="480.2393465909091" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">May</text><text x="31.572443181818187" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">January</text><text x="586.2478693181819" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">June</text></g><g class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><text x="8.953125" y="269" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">0</text><text x="8.953125" y="205.5" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">5</text><text x="1" y="15" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">20</text><text x="1" y="142" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">10</text><text x="1" y="78.5" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">15</text></g></svg></div></div>
        </div>
        <!-- /.card-body-->
      </div>
    </div>
  </div>

</section>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script>
  $(document).ready(function () {
    $('#khongxacdinh').text('Trang thường');
  });
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-164120573-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-164120573-2');
</script>


<script>
  $(function () {
  'use strict'

  var ticksStyle = {
    fontColor: '#495057',
    fontStyle: 'bold'
  }

  var mode      = 'index'
  var intersect = true



  var $visitorsChart = $('#visitors-chart')
  var visitorsChart  = new Chart($visitorsChart, {
    data   : {
      labels  : {!! json_encode($data['date']->map(function($d){return $d->format("d/m/Y");})) !!},
      datasets: [{
        type                : 'line',
        data                : {!! json_encode($data['visitors']) !!},
        backgroundColor     : 'transparent',
        borderColor         : '#007bff',
        pointBorderColor    : '#007bff',
        pointBackgroundColor: '#007bff',
        fill                : false
        // pointHoverBackgroundColor: '#007bff',
        // pointHoverBorderColor    : '#007bff'
      },
        {
          type                : 'line',
          data                : {!! json_encode($data['pageViews']) !!},
          backgroundColor     : 'tansparent',
          borderColor         : '#ced4da',
          pointBorderColor    : '#ced4da',
          pointBackgroundColor: '#ced4da',
          fill                : false
          // pointHoverBackgroundColor: '#ced4da',
          // pointHoverBorderColor    : '#ced4da'
        }]
    },
    options: {
      maintainAspectRatio: false,
      tooltips           : {
        mode     : mode,
        intersect: intersect
      },
      hover              : {
        mode     : mode,
        intersect: intersect
      },
      legend             : {
        display: false
      },
      scales             : {
        yAxes: [{
          // display: false,
          gridLines: {
            display      : true,
            lineWidth    : '4px',
            color        : 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks    : $.extend({
            beginAtZero : true,
            suggestedMax: 20
          }, ticksStyle)
        }],
        xAxes: [{
          display  : true,
          gridLines: {
            display: false
          },
          ticks    : ticksStyle
        }]
      }
    }
  })
  })

</script>
{{-- Thong ke doanh thu theo loai --}}
<script>
  //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Chrome', 
          'IE',
          'FireFox', 
          'Safari', 
          'Opera', 
          'Navigator', 
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions      
    })
</script>
{{-- Thong ke khach hang theo thang --}}
<script>
  /*
     * BAR CHART
     * ---------
     */

     var bar_data = {
      data : [[1,10], [2,8], [3,4], [4,13], [5,17], [6,9]],
      bars: { show: true }
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
         bars: {
          show: true, barWidth: 0.5, align: 'center',
        },
      },
      colors: ['#3c8dbc'],
      xaxis : {
        ticks: [[1,'January'], [2,'February'], [3,'March'], [4,'April'], [5,'May'], [6,'June']]
      }
    })
    /* END BAR CHART */
</script>
@endsection