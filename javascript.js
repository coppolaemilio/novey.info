$(window).ready(function(){
  $("nav li").click(function(){
    if (!window.location.hash)
      {
      var clas = $(this).attr("class");
      window.location.hash = clas;
      console.log(clas);
      $("article:not(." + clas + ")").parent().hide();
      }
    else
      {
      window.location.hash = "";
      $("article").parent().show();
      }
    });
  
  
  
  function readURL(input)
    {
    if (input.files && input.files[0])
      {
      var reader = new FileReader();
      reader.onload = function (e)
        {
        $('#file-input img').attr('src', e.target.result);
        alert(e.target.result);
        }
      reader.readAsDataURL(input.files[0]);
      }
    }

  $("#file-input").change(function(){
    readURL(this);
    });
  });
