$(document).ready(function (){    

  //  COUNT FOR SERVICES
    for(i=1; i<=4; i++){
        var attr_nm = "#serv_cnt_";
        var attr_id = attr_nm.concat(i);

        $.ajax({
            type:'GET',
            async: false,
            url:'/count_services',
            data: {'id' : i},
            success:function(data) {
            $(attr_id).html(data);
            }
          });
    }
    
    //LAST ORDER 
    $.ajax({
      type:'GET',
      async: false,
      url:'/last_order',
      data: {'id' : 1},
      success:function(data) {
      $("#last_order_tbl").html(data);
      }
    });

    // UPDATE STATUS PESANAN
    $(document).on('change ','.upd_stts', function(){
      var id = $(this).attr("id");
      //alert(id);
      var e = document.getElementById(id);
      var value = e.value;
      var status = e.options[e.selectedIndex].text;
      
      $.ajax({
        type:'GET',
        url:'/upd_status',
        data: {'id' : id, 'stts' : status},
        success:function(data) {
        //alert(data);
        }
      });
      });

});