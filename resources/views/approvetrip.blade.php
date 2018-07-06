@extends('layouts.uppernav')

  <link rel="stylesheet" href="{{asset('css/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/all.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap-colorpicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap-timepicker.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
  <style>
      table, th, td { 
          
          border: 2px solid #ddd;
          padding: 50px;
      }
      
      table {
        text-align-last: center;
          border-collapse:collapse;
        
          width: 100%;
      }
      
      th, td {
          padding: 50px;
      }
      </style>
  @include('inc.sidenav')
  @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Visits &amp; Trips
       
      </h1>
      {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol> --}}
    </section>


    <!--Pending Trip -->
    <section class="content">

      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Request For Approval</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
        <form id="planAtrip_form" action="{{route('TOdashboard')}}" name="trip_form" method="post" enctype="multipart/form-data" >
            <div class="col-md-6 ">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Type Of Project </label>
                    <input type="text" class="form-control" name="" value="">
                  
                </div>
                <div class="form-group ">
                    <label for="">Project Name </label>
                    <input type="text" class="form-control" name="" value="">
                  
                </div>

                <div class="form-group ">
                    <label for="">Location </label>
                    <input type="text" class="form-control" name="" value="">
                  
                </div>

                <div class="form-group ">
                    <label for="">Visiting Area(s) </label>
                    <input  type="text" class="form-control input" value="" >
                      <button id="b2" class="btn pull-right" style="position: relative; top: -34px;"   type="button">+</button>
                  
                </div>

                <div class="form-group" id="field">
                      <label for="">Name Of Officers </label>
                      <input autocomplete="off" id="field1" type="text" class="form-control input" name="prof1" value="" data-items="8">
                      <button id="b1" class="btn add-more pull-right" style="    position: relative;
                      top: -34px;" type="button">+</button>
                  </div>
                    
            </div>

             <div class="col-md-6">
                <div class="form-group required">
                  <label><span style="color:red;">*</span>Date:</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                     <input type="text" class="form-control pull-right" id="datepicker">
                    </div>
                </div>
    
                <div class="form-group">
                <label for="">Date &amp; Timings </label>
                <!-- Date range -->
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="reservation">
                  </div>
                </div>

                <div class="form-group pull-left" style="margin-top:25px;">
                    <button type="submit" class="btn btn-primary">Submit For Approval</button>
                </div>                    
                
                     
                        
                </div>
        </form>
        </div>        
       {{-- You Visited --}}
      <div class="row">
        <div class="col-md-12">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">You visited</h3>
            </div>
            <div class="box-body">
              <table>
                
                <tr>
                  <th>Location</th>
                  <th>Project </th>
                  <th>Team Members</th>
                  <th>Date</th>
                </tr>

                <tr>
                    <td>Lahore</td>
                    <td>PITB</td>
                    <td>Team Members,Team Members,Team Members</td>
                    <td>12/12/2018</td>
                  </tr>
                  <tr>
                      <td>Location</td>
                      <td>Location</td>
                      <td>Team Members</td>
                      <td>Date</td>
                    </tr>
                    <tr>
                        <td>Location</td>
                        <td>Location</td>
                        <td>Team Members</td>
                        <td>Date</td>
                      </tr>
                      <tr>
                          <td>Location</td>
                          <td>Location</td>
                          <td>Team Members</td>
                          <td>Date</td>
                        </tr>
              </table>
            
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          {{-- <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Color & Time Picker</h3>
            </div>
            <div class="box-body">
              <!-- Color Picker -->
              <div class="form-group">
                <label>Color picker:</label>
                <input type="text" class="form-control my-colorpicker1">
              </div>
              <!-- /.form group -->

              <!-- Color Picker -->
              <div class="form-group">
                <label>Color picker with addon:</label>

                <div class="input-group my-colorpicker2">
                  <input type="text" class="form-control">

                  <div class="input-group-addon">
                    <i></i>
                  </div>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- time Picker -->
              <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Time picker:</label>

                  <div class="input-group">
                    <input type="text" class="form-control timepicker">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Date picker</h3>
            </div>
            <div class="box-body">
              <!-- Date -->
              <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date range -->
              <div class="form-group">
                <label>Date range:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservation">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date and time range -->
              <div class="form-group">
                <label>Date and time range:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservationtime">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- Date and time range -->
              <div class="form-group">
                <label>Date range button:</label>

                <div class="input-group">
                  <button type="button" class="btn btn-default pull-right" id="daterange-btn">
                    <span>
                      <i class="fa fa-calendar"></i> Date range picker
                    </span>
                    <i class="fa fa-caret-down"></i>
                  </button>
                </div>
              </div>
              <!-- /.form group -->

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- iCheck -->
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">iCheck - Checkbox &amp; Radio Inputs</h3>
            </div>
            <div class="box-body">
              <!-- Minimal style -->

              <!-- checkbox -->
              <div class="form-group">
                <label>
                  <input type="checkbox" class="minimal" checked>
                </label>
                <label>
                  <input type="checkbox" class="minimal">
                </label>
                <label>
                  <input type="checkbox" class="minimal" disabled>
                  Minimal skin checkbox
                </label>
              </div>

              <!-- radio -->
              <div class="form-group">
                <label>
                  <input type="radio" name="r1" class="minimal" checked>
                </label>
                <label>
                  <input type="radio" name="r1" class="minimal">
                </label>
                <label>
                  <input type="radio" name="r1" class="minimal" disabled>
                  Minimal skin radio
                </label>
              </div>

              <!-- Minimal red style -->

              <!-- checkbox -->
              <div class="form-group">
                <label>
                  <input type="checkbox" class="minimal-red" checked>
                </label>
                <label>
                  <input type="checkbox" class="minimal-red">
                </label>
                <label>
                  <input type="checkbox" class="minimal-red" disabled>
                  Minimal red skin checkbox
                </label>
              </div>

              <!-- radio -->
              <div class="form-group">
                <label>
                  <input type="radio" name="r2" class="minimal-red" checked>
                </label>
                <label>
                  <input type="radio" name="r2" class="minimal-red">
                </label>
                <label>
                  <input type="radio" name="r2" class="minimal-red" disabled>
                  Minimal red skin radio
                </label>
              </div>

              <!-- Minimal red style -->

              <!-- checkbox -->
              <div class="form-group">
                <label>
                  <input type="checkbox" class="flat-red" checked>
                </label>
                <label>
                  <input type="checkbox" class="flat-red">
                </label>
                <label>
                  <input type="checkbox" class="flat-red" disabled>
                  Flat green skin checkbox
                </label>
              </div>

              <!-- radio -->
              <div class="form-group">
                <label>
                  <input type="radio" name="r3" class="flat-red" checked>
                </label>
                <label>
                  <input type="radio" name="r3" class="flat-red">
                </label>
                <label>
                  <input type="radio" name="r3" class="flat-red" disabled>
                  Flat green skin radio
                </label>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              Many more skins available. <a href="http://fronteed.com/iCheck/">Documentation</a>
            </div>
          </div>
          <!-- /.box -->
        {{-- </div> --}}
        
      </div> 
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection


  @section('scripttags')
  <script src="{{asset('js/jquery-ui.min.js')}}"></script>
  <script src="{{asset('js/moment.js')}}"></script>
  <script src="{{asset('js/select2.full.min.js')}}"></script>
  <script src="{{asset('js/jquery.inputmask.js')}}"></script>
  <script src="{{asset('js/jquery.inputmask.date.extensions.js')}}"></script>
  <script src="{{asset('js/jquery.inputmask.extensions.js')}}"></script>
  <script src="{{asset('js/moment.min.js')}}"></script>
  <script src="{{asset('js/daterangepicker.js')}}"></script>
  <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-colorpicker.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-timepicker.min.js')}}"></script>
  <script src="{{asset('js/icheck.min.js')}}"></script>
<!-- Page script -->

<script>
    $(document).ready(function(){
      var next = 1;
      $(".add-more").click(function(e){
          e.preventDefault();
          var addto = "#field" + next;
          var addRemove = "#field" + (next);
          next = next + 1;
          var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
          var newInput = $(newIn);
          var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me pull-right" style="    position: relative;top: -34px;" >-</button></div><div id="field">';
          var removeButton = $(removeBtn);
          $(addto).after(newInput);
          $(addRemove).after(removeButton);
          $("#field" + next).attr('data-source',$(addto).attr('data-source'));
          $("#count").val(next);  
          
              $('.remove-me').click(function(e){
                  e.preventDefault();
                  var fieldNum = this.id.charAt(this.id.length-1);
                  var fieldID = "#field" + fieldNum;
                  $(this).remove();
                  $(fieldID).remove();
              });
      });
      
  
      
  });

  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
@endsection

