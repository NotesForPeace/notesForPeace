function rearrange_about_individual(){
    var paragraphs = document.getElementsByClassName("about-individual>p");
    var textDiv = document.getElementById("#about-text");
    textDiv.innerText += paragraphs;
    $("about-individual").children("img").appendTo("#about-images");
}

jQuery(document).ready(function($){
    $(".about-individual").find("img").appendTo("#about-images");
    $(".about-individual").find("p").appendTo("#about-text");
  });