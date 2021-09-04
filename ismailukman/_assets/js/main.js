//removeClass w/ regex support
(function(e){jQuery.fn.removeClass=function(t){if(t&&typeof t.test==="function"){for(var n=0,r=this.length;n<r;n++){var i=this[n];if(i.nodeType===1&&i.className){var s=i.className.split(/\s+/);for(var o=s.length;o--;){if(t.test(s[o])){s.splice(o,1)}}i.className=jQuery.trim(s.join(" "))}}}else{e.call(this,t)}return this}})(jQuery.fn.removeClass);




$(document).ready(function(){
   
   
   $.each(['#000', '#f96868', '#b0e6f9', '#0f0', '#0ff', '#00f', '#f0f', '#fff'], function() {
      $('#palette').append("<li><a href='#artboard' data-color='" + this + "' style='background: " + this + ";'></a></li>");
   });
   
   $('#palette a:first').addClass('active');
   
   $('#palette a').click(function(){
      $('#palette a').removeClass('active');
      $(this).addClass('active');
   });
   
   
   $('#artboard').sketch();
   
   
   $('#tools a:not(.clear-canvas)').on('click', $(document), function(e){
      if($(this).attr('data-download') != 'png'){
         $('#tools a').removeClass('active');
         $(this).addClass('active');
         $('#artboard').removeClass(/^cursor-/).addClass($(this).attr('data-cursor-style'));
      }
   });
   
   
   $('#tools a.clear-canvas').on('click', $(document), function(e){
      $(this).parent().find('.prompt').toggleClass('active');
   });
   
   $('#tools a.clear-canvas').parent().find('.p-y').on('click', $(document), function(e){
      $('#artboard').sketch().actions = [];
      var myCanvas = document.getElementById("artboard");
      var ctx = myCanvas.getContext('2d');
      ctx.clearRect(0, 0, myCanvas.width, myCanvas.height);
      $('#tools a.clear-canvas').trigger('click');
   });
   
   $('#tools a.clear-canvas').parent().find('.p-n').on('click', $(document), function(e){
      $('#tools a.clear-canvas').trigger('click');
   });
   
   
   
   //get the default activated brush
   if($('#tools a.active').length){ $('#artboard').addClass($('#tools a.active').attr('data-cursor-style')); }
   
   $('#intro').click(function(){
      $(this).slideUp(500,function(){ $('#intro').remove(); });
   });
   
   
});


$(window).bind('load resize',function(){
   var artboard_w = $(window).width();
   var artboard_h = $(window).height();
   $('#artboard').attr('width',artboard_w).attr('height',artboard_h);
});


function sendSketch(sketch){
   
   $.post("_lib/canvas2img.php", { sketch:sketch },function(data){
      
      if(data != 0)
      {
         $('body').prepend('<div id="drawing"><a href="#">Draw again?</a><div class="tw"><div class="ti"><div class="img-frame"><img src="'+data+'" alt=""></div></div></div></div>');
         $('#drawing a').on('click', $(document), function(e){
            e.preventDefault();
            location.reload();
         });
      }  
      else
      { alert('Error. Please try again later.'); return; }
      
   });
   
}

