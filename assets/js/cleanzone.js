var App = (function () {

  var config = {//Basic Config
    animate: false,
    popover: true,
    assetsPath: 'assets',
    imgPath: 'img',
    jsPath: 'js',
    libsPath: 'lib',
    tooltip: true
  };

  function toggleSideBar(_this){
    var b = $("#sidebar-collapse")[0];
    var w = $("#cl-wrapper");
    var s = $(".cl-sidebar");
    
    if(w.hasClass("sb-collapsed")){
      $(".fa",b).addClass("fa-angle-left").removeClass("fa-angle-right");
      w.removeClass("sb-collapsed");
    }else{
      $(".fa",b).removeClass("fa-angle-left").addClass("fa-angle-right");
      w.addClass("sb-collapsed");
    }
  }
  
  function updateHeight(){
    if(!$("#cl-wrapper").hasClass("fixed-menu")){
      var button = $("#cl-wrapper .collapse-button").outerHeight();
      var navH = $("#head-nav").height();
      var cont = $("#pcont").height();
      var sidebar = ($(window).width() > 755 && $(window).width() < 963)?0:$("#cl-wrapper .menu-space .content").height();
      var windowH = $(window).height();
      
      if(sidebar < windowH && cont < windowH){
        if(($(window).width() > 755 && $(window).width() < 963)){
          var height = windowH;
        }else{
          var height = windowH - button - navH;
        }
      }else if((sidebar < cont && sidebar > windowH) || (sidebar < windowH && sidebar < cont)){
        var height = cont + button + navH;
      }else if(sidebar > windowH && sidebar > cont){
        var height = sidebar + button;
      }  
      
      $("#cl-wrapper .menu-space").css("min-height",height);
    }else{
      $("#cl-wrapper .nscroller").nanoScroller({ preventPageScrolling: true });
    }
  }

  return {
    conf: config,
    init: function (options) {
      //Extends basic config with options
      $.extend( config, options );

      /*VERTICAL MENU*/
      $(".cl-vnavigation li ul").each(function(){
        $(this).parent().addClass("parent");
      });
      
      $(".cl-vnavigation li ul li.active").each(function(){
        $(this).parent().show().parent().addClass("open");
      });
      
      $(".cl-vnavigation").delegate(".parent > a","click",function(e){
        $(".cl-vnavigation .parent.open > ul").not($(this).parent().find("ul")).slideUp(300, 'swing',function(){
           $(this).parent().removeClass("open");
        });
        
        var ul = $(this).parent().find("ul");
        ul.slideToggle(300, 'swing', function () {
          var p = $(this).parent();
          if(p.hasClass("open")){
            p.removeClass("open");
          }else{
            p.addClass("open");
          }

          $("#cl-wrapper .nscroller").nanoScroller({ preventPageScrolling: true });
        });
        e.preventDefault();
      });
      
      /*Small devices toggle*/
      $(".cl-toggle").click(function(e){
        var ul = $(".cl-vnavigation");
        ul.slideToggle(300, 'swing', function () {
        });
        e.preventDefault();
      });
      
      /*Collapse sidebar*/
      $("#sidebar-collapse").click(function(){
          toggleSideBar();
      });
      
      
      if($("#cl-wrapper").hasClass("fixed-menu")){
        var scroll =  $("#cl-wrapper .menu-space");
        scroll.addClass("nano nscroller");
 
        function update_height(){
          var button = $("#cl-wrapper .collapse-button");
          var collapseH = button.outerHeight();
          var navH = $("#head-nav").height();
          var height = $(window).height() - ((button.is(":visible"))?collapseH:0) - navH;
          scroll.css("height",height);
          $("#cl-wrapper .nscroller").nanoScroller({ preventPageScrolling: true });
        }
        
        $(window).resize(function() {
          update_height();
        });    
            
        update_height();
        $("#cl-wrapper .nscroller").nanoScroller({ preventPageScrolling: true });
        
      }
      
      /*SubMenu hover */
        var tool = $("<div id='sub-menu-nav' style='position:fixed;z-index:9999;'></div>");
        
        function showMenu(_this, e){
          if(($("#cl-wrapper").hasClass("sb-collapsed") || ($(window).width() > 755 && $(window).width() < 963)) && $("ul",_this).length > 0){   
            $(_this).removeClass("ocult");
            var menu = $("ul",_this);
            if(!$(".dropdown-header",_this).length){
              var head = '<li class="dropdown-header">' +  $(_this).children().html()  + "</li>" ;
              menu.prepend(head);
            }
            
            tool.appendTo("body");
            var top = ($(_this).offset().top + 8) - $(window).scrollTop();
            var left = $(_this).width();
            
            tool.css({
              'top': top,
              'left': left + 8
            });
            tool.html('<ul class="sub-menu">' + menu.html() + '</ul>');
            tool.show();
            
            menu.css('top', top);
          }else{
            tool.hide();
          }
        }

        $(".cl-vnavigation li").hover(function(e){
          showMenu(this, e);
        },function(e){
          tool.removeClass("over");
          setTimeout(function(){
            if(!tool.hasClass("over") && !$(".cl-vnavigation li:hover").length > 0){
              tool.hide();
            }
          },500);
        });
        
        tool.hover(function(e){
          $(this).addClass("over");
        },function(){
          $(this).removeClass("over");
          tool.fadeOut("fast");
        });
        
        
        $(document).click(function(){
          tool.hide();
        });
        
        $(document).on('touchstart click', function(e){
          tool.fadeOut("fast");
        });
        
        tool.click(function(e){
          e.stopPropagation();
        });
     
        $(".cl-vnavigation li").click(function(e){
          if((($("#cl-wrapper").hasClass("sb-collapsed") || ($(window).width() > 755 && $(window).width() < 963)) && $("ul",this).length > 0) && !($(window).width() < 755)){
            showMenu(this, e);
            e.stopPropagation();
          }
        });
      
      /*Return to top*/
      var offset = 220;
      var duration = 500;
      var button = $('<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>');
      button.appendTo("body");
      
      jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
      });
    
      jQuery('.back-to-top').click(function(event) {
          event.preventDefault();
          jQuery('html, body').animate({scrollTop: 0}, duration);
          return false;
      });
      

      /*NanoScroller*/      
      $(".nscroller").nanoScroller();     

      /*Animate Entrance*/
        if( config.animate ){
          $("body").animate({opacity:1,'margin-left':0},400);
        }else{
          $("body").css({opacity:1,'margin-left':0});
        }

      /*Bind plugins on hidden elements*/
    	/*Dropdown shown event*/
        $('.dropdown').on('shown.bs.dropdown', function () {
          $(".nscroller").nanoScroller();
        });
        
      /*Tabs refresh hidden elements*/
        $('.nav-tabs').on('shown.bs.tab', function (e) {
          $(".nscroller").nanoScroller();
        });
      
      /*Tooltips*/
        if(config.tooltip){
          $('.ttip, [data-toggle="tooltip"]').tooltip();
        }
      
      /*Popover*/
        if(config.popover){
          $('[data-popover="popover"]').popover();
        }

    }
  };
 
})();


/*
  function formatstandar( noaplica , b ,  pregunta ,  idpregunta ){

    l = "";
    if (noaplica == 2) {
        l+="<tr><td>"+b+"</td><td>"+pregunta+"</td>";
        l+="<td><input type='checkbox' class='trueresponse' id='"+idpregunta+"'></td><td><input type='checkbox' class='falseresponse'  id='"+idpregunta+"' > </td>";
        l+="<td>No aplica <input type='checkbox' name='noaplica'  value='1' > </td><tr>";
      
    }else{
        l+="<tr><td>"+b+"</td><td>"+pregunta+"</td>";
        l+="<td><input type='checkbox' class='trueresponse' id='"+idpregunta+"'></td><td><input type='checkbox' class='falseresponse'  id='"+idpregunta+"' > </td></tr>";
  
    }

    return l;
  }  



  function setTableBasic( l , flagnumpregunta , contestadas , preguntaok , respuestano , trueresponseaction , falseresponseaction, SUMATORIAPUNTOS , SUMATORIAPUNTOSSOLICITADOS  ){

    l+="</tbody></table>";
    llenaelementoHTML("#cuestionario" , l);
    llenaelementoHTML("#pregguntastotales" , flagnumpregunta);
    llenaelementoHTML("#contestadas" , contestadas);
    llenaelementoHTML("#preguntascontestadasok", preguntaok);
    llenaelementoHTML("#respuestano" , respuestano);
    $(".trueresponse").click(trueresponseaction);
    $(".falseresponse").click(falseresponseaction);
    llenaelementoHTML( "#mispuntosencuesta", SUMATORIAPUNTOS );
    llenaelementoHTML("#mispuntossolicitados", SUMATORIAPUNTOSSOLICITADOS);

  }


function  cargapage () {
  
  redirect("");
}

*/