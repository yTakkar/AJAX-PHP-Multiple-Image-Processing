$(function(){
  $('input[type="file"]').on('change', function(e){
    $('.output').remove();
    var files = this.files;
    var allowed = ["image/jpeg", "image/png", "image/gif"];
    for (var i = 0; i < files.length; i++) {
      var type = files[i].type;
      console.log(files[i]);
      console.log(type);
      if (!((type == allowed[0]) || (type == allowed[1]) || (type == allowed[2]))) {
        console.log('not image');
      } else {
        console.log('image');
        var reader = new FileReader();
        reader.onload = function(e){
          $('.wrapper').after('<div class="output"><img src="" id="opt_img" class="opt_img"></div>');
          //gotta keep in mind that something doesn't work with classes but they do work with ids.
          //for example this src attribute thing.
          //so id is recommended when you see that something is not working with the class.
          // $('.opt_img').attr('src', e.target.result);
          $('#opt_img').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[i]);
      }
    }
    // console.log(new FileReader());
  });
});
