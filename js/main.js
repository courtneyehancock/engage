$(document).ready(function() {
           $('li').click(function() {
               $('li.menu-item.active').removeClass('active');
               $(this).addClass('active');
           });
       });
