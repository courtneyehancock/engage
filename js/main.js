var links = document.querySelectorAll("#navbar li a");
  for (const link of links) {
    link.addEventListener("click", (e) => {
    var target = e.target;

    links.forEach(function(currentLink) {
        currentLink.classList.remove('active');
    });

      // if target already had .active. remove it. Otherwise, add it
      target.classList.toggle('active');
    })
}

$(document).ready(function() {
           $('li').click(function() {
               $('li.menu-item.active').removeClass("active");
               $(this).addClass("active");
           });
       }); 
