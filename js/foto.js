$(document).ready(function(){
    $('#upfoto').change(()=>{
        var gambar_file = $('#upfoto')[0].files[0]
    
        var reader = new FileReader();
        reader.onload = function (e) {
          $('#bingfoto').attr('src', e.target.result);
        }
        reader.readAsDataURL(gambar_file)
    
        $('#bingfoto').css("visibility", "visible")
      })
});