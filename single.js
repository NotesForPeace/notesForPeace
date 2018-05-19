jQuery(document).ready(function($){
  if ($(window).width() > 500) {
    $(".about-individual").find("img").appendTo("#about-images");
    $(".about-individual").find("p").appendTo("#about-text");
  }
  });
  