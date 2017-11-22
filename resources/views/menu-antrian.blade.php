@extends('layout.layout')
  @section('header')
  <link href="{{ asset('css/style/style.css') }}" rel="stylesheet">
  @endsection
  @section('content')


  <div class="container content ">
    <div class="row">
        <div class="col-md-6">
          <button  class="col-md-9 cus-button display-block " value="1" id="loketA" name="loketA" onclick="saveAntrian(this)"> Loket A </button>
        </div>
        <div class="col-md-6 ">
          <button onclick="saveAntrian(this)" class="col-md-9 cus-button display-inline-table" name="loketB" id="loketB" value="2"> Loket B</button>
        </div>   
        <div class="col-md-6  ">
         <button onclick="saveAntrian(this)" class="col-md-9  cus-button display-block"  name="loketC" id="loketC" value="3">Loket C</button>
        </div>
        <div class="col-md-6">
          <button onclick="saveAntrian(this)" class="col-md-9 cus-button display-inline-table"name="loketD" id="loketD" value="4"> Loket D</button>
        </div>  
    </div>
  </div>
  @endsection

  @section('footer')
  <footer id="footer">
 
    <div class="container">
        <span class=" italic">"Pilih antrian"</span>
    </div>


  <script>
    var loketA = 0;
    var loketB = 0;
    var loketC = 0;
    var loketD = 0;
    var noAntrian = 0;

    function saveAntrian(objButton){
      var idLoket = objButton.value;
      if (idLoket == '1'){
        loketA +=1;
        noAntrian = loketA;
        console.log(loketA + 'A');
      }else if(idLoket == '2'){
          loketB +=1;
          noAntrian = loketB;

        }
      else if(idLoket == '3'){
        loketC +=1;
        noAntrian = loketC;

        }
      else{
          loketD +=1;
          noAntrian = loketD;
      }

      $.ajaxSetup({
      headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      var param1 = '1';
      var param2 = 'B';


      var data = {
        antrian : param1,
        loket : param2,
      }


      $.ajax({
        type:'POST',
        url:'{{ url("antrian") }}',
        data: data,
        dataType:"json",
        success:function(){
        alert("succ");
        },
        error:function(){
        alert("error");
        }
      });l

      // $.ajax({
      //   type:'post',
      //   dataType:"json",
      // // data:"{ 'idLoket': idLoket, 'noAntrian' : noAntrian}",
      //   data:"{idLoket:'idLoket'}",
      //   url:'{{ url("antrian") }}',
      //   success:function(data){
      //   alert(data);
      //   },
      //   error:function(){
      //   alert("error");
      //   }
      // });

    }

  </script>

  <script type="text/javascript">
   
    $("#coba").click(function(){
        var url = $(this).attr("data-link");
        $.ajax({
            url: "antrian",
            type:"POST",
            data: { testdata : 'testdatacontent' },
            success:function(data){
                alert(data);
            },error:function(){ 
                alert("error!!!!");
            }
        }); //end of ajax
    });

  </script>

  </footer>
  @endsection  


</html>
