$(function(){
  //Functions
  function toggleSideBar(_this){
    var b = $("#sidebar_collapse")[0];
    var w = $("#main_wrapper");
    var s = $(".left_sidebar");
    
    if(w.hasClass("sb-collapsed")){
      //$(".fa",b).addClass("fa fa-bars").removeClass("fa fa-bars");
      w.removeClass("sb-collapsed");      
    }else{
      //$(".fa",b).removeClass("fa fa-bars").addClass("fa fa-bars");
      w.addClass("sb-collapsed");      
    }
    //updateHeight();
  }
    
  function updateHeight(){
    if(!$("#main_wrapper").hasClass("fixed-menu")){
      var button = $("#main_wrapper .collapse_button").outerHeight();
      var navH = $("#head-nav").height();
      //var document = $(document).height();
      var cont = $("#pcont").height();
      var sidebar = ($(window).width() > 755 && $(window).width() < 963)?0:$("#main_wrapper .menu_space .content").height();
      var windowH = $(window).height();
      
      if(sidebar < windowH && cont < windowH){
        if(($(window).width() > 755 && $(window).width() < 963)){
          var height = windowH;
        }else{
          var height = windowH - button;
        }
      }else if((sidebar < cont && sidebar > windowH) || (sidebar < windowH && sidebar < cont)){
        var height = cont + button;
      }else if(sidebar > windowH && sidebar > cont){
        var height = sidebar + button;
      }  
      
      // var height = ($("#pcont").height() < $(window).height())?$(window).height():$(document).height();
      $("#main_wrapper .menu_space").css("min-height",height);
    }else{
      $("#main_wrapper .nscroller").nanoScroller({ preventPageScrolling: true });
    }
  }
        

      /*VERTICAL MENU*/
      $(".left_vnavigation li ul").each(function(){
        $(this).parent().addClass("parent");
      });
      
      $(".left_vnavigation li ul li.active").each(function(){
        $(this).parent().css({'display':'block'});
        $(this).parent().parent().addClass("open");
        //setTimeout(function(){updateHeight();},200);
      });
      
      $(".left_vnavigation").delegate(".parent > a","click",function(e){
        $(".left_vnavigation .parent.open > ul").not($(this).parent().find("ul")).slideUp(300, 'swing',function(){
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
          //var menuH = $("#main_wrapper .menu_space .content").height();
          // var height = ($(document).height() < $(window).height())?$(window).height():menuH;
          //updateHeight();
         $("#main_wrapper .nscroller").nanoScroller({ preventPageScrolling: true });
         /*if(CodeMirror){
          cm.refresh();
         }*/
         
        });
        e.preventDefault();
      });
      
      /*Small devices toggle*/
      $(".left_toggle").click(function(e){
        var ul = $(".left_vnavigation");
        ul.slideToggle(300, 'swing', function () {
        });
        e.preventDefault();
      });
      
      /*Collapse sidebar*/
      $("#sidebar_collapse").click(function(){
          toggleSideBar();
      });
      
      
      if($("#main_wrapper").hasClass("fixed-menu")){
        var scroll =  $("#main_wrapper .menu_space");
        scroll.addClass("nano nscroller");
 
        function update_height(){
          var button = $("#main_wrapper .collapse_button");
          var collapseH = button.outerHeight();
          var navH = $("#head-nav").height();
          var height = $(window).height() - ((button.is(":visible"))?collapseH:0);
          scroll.css("height",height);
          $("#main_wrapper .nscroller").nanoScroller({ preventPageScrolling: true });
        }
        
        $(window).resize(function() {
          update_height();
        });    
            
        update_height();
        $("#main_wrapper .nscroller").nanoScroller({ preventPageScrolling: true });
        
      }else{
        $(window).resize(function(){
          //updateHeight();
        }); 
        //updateHeight();
      }
      
      /*SubMenu hover */
        var tool = $("<div id='sub_menu-nav' style='position:fixed;z-index:9999;'></div>");
        
        function showMenu(_this, e){
          if(($("#main_wrapper").hasClass("sb-collapsed") || ($(window).width() > 755 && $(window).width() < 963)) && $("ul",_this).length > 0){   
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
            tool.html('<ul class="sub_menu">' + menu.html() + '</ul>');
            tool.show();
            
            menu.css('top', top);
          }else{
            tool.hide();
          }
        }

        $(".left_vnavigation li").hover(function(e){
          showMenu(this, e);
        },function(e){
          tool.removeClass("over");
          setTimeout(function(){
            if(!tool.hasClass("over") && !$(".left_vnavigation li:hover").length > 0){
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
     
        $(".left_vnavigation li").click(function(e){
          if((($("#main_wrapper").hasClass("sb-collapsed") || ($(window).width() > 755 && $(window).width() < 963)) && $("ul",this).length > 0) && !($(window).width() < 755)){
            showMenu(this, e);
            e.stopPropagation();
          }
        });
        
        $(".left_vnavigation li").on('touchstart click', function(){
          //alert($(window).width());
        });
        
      $(window).resize(function(){
        //updateHeight();
      });

      var domh = $("#pcont").height();
      $(document).bind('DOMSubtreeModified', function(){
        var h = $("#pcont").height();
        if(domh != h) {
          //updateHeight();
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
      
  /*Side Chat*/
  $('.toggle-menu').jPushMenu();

  /*NanoScroller*/      
  $(".nscroller").nanoScroller();     


  /*Bind plugins on hidden elements*/
  /*Dropdown shown event*/
  $('.dropdown').on('shown.bs.dropdown', function () {
    $(".nscroller").nanoScroller();
  });
    
  /*Tabs refresh hidden elements*/
  $('.nav-tabs').on('shown.bs.tab', function (e) {
    $(".nscroller").nanoScroller();
  });
 
});
        
$(document).ready(function() {
  /*administer dropdown*/
	$('.administrator').click(function(){
		$(this).next('.administrator_box').slideToggle(500);		
	})
	$(document).mouseup(function (e)	
		{			
			if($('.administrator_box').length>0){
				if(!$('.administrator_box, .administrator').is(e.target)){
					if($(window).width()){
						$('.administrator_box').fadeOut();
					}else{
						$('.administrator_box').fadeIn();
					}
				}
			}
		}); 
  
  
});


$(document).ready(function(){
	$(".a_close").click(function(){
		$(this).closest(".alert").fadeOut();
	});
	setTimeout(function() {
		$('.alert').fadeOut();
	}, 10000);
});


