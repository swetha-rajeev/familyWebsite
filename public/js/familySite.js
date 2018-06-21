
//Declare an array for images 
//var images = ['url(/images/family_pic1.jpg)','url(/images/family_pic2.jpg)',
              //'url(/images/kids-pic.jpg)'];

//var jumbotron = document.querySelector(".jumbotron");
//jumbotron.style.backgroundImage="url('/images/kids-pic.jpg')";
//jumbotron.style.backgroundImage = images[1];
//var i=0;
 // function changeBackground(){
 // 	jumbotron.style.backgroundImage = images[i];
 // 	i=i+1;
 // 	if(i===3) then i=0;
 // 	setTimeout(function(){ changeBackground() }, 500);
 // }

 // changeBackground();
//var slug = require('slug');

  var changeBackground = function(){
  //making the variables as private
     var i= 1;
     var jumbotron = document.querySelector(".jumbotron");
     var images = ['url(/images/family_pic1.jpg)','url(/images/family_pic2.jpg)',
              'url(/images/kids-pic.jpg)'];
     return function(){
      //console.log(i);
      jumbotron.style.backgroundImage = images[i];
        i = i + 1;
        if(i===3) i=0;
     }
     //assignImage();
 };
 function slugify(text)
{
  return text.toString().toLowerCase()
    .replace(/\s+/g, '-')           // Replace spaces with -
    .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
    .replace(/\-\-+/g, '-')         // Replace multiple - with single -
    .replace(/^-+/, '')             // Trim - from start of text
    .replace(/-+$/, '');            // Trim - from end of text
}
 function createPost(){
   var title = document.getElementById('inputTitle');
    var slugInput = document.getElementById('inputSlug');
    slug_original= 'http://localhost:8000/posts/';
     title.addEventListener("keyup",function(event){
     
     var titleValue = title.value;
    //alert(titleValue);
    // if (titleValue = " ")
    // {
    //   titleValue = "-";
    // }
    //regukar expression parssing
    if(event.key == " ")
    {
      titleValue = titleValue + "-";
    }
    // print(slug('i ♥ unicode'));
    titleValue = slugify(titleValue);
    slugInput.value = slug_original+titleValue;
    
});
    //  title.addEventListener('keydown', function(event) {
    //    key = event.key; // "a", "1", "Shift", etc.
    //    slug_original = slug_original+key;
    //    slug.value = slug_original;
    // });
}

if(window.location.pathname == '/')
{
 
  var changeImage = changeBackground();
  setInterval(changeImage,4000);
}
else if(window.location.pathname == '/posts/create')
{

  createPost();



}

//  var changeBackground = function(){
//  	//making the variables as private
//      var i= 1;
//      var jumbotron = document.querySelector(".jumbotron");
//      var images = ['url(/images/family_pic1.jpg)','url(/images/family_pic2.jpg)',
//               'url(/images/kids-pic.jpg)'];
//      return function(){
//      	//console.log(i);
//      	jumbotron.style.backgroundImage = images[i];
//       	i = i + 1;
//       	if(i===3) i=0;
//      }
//      //assignImage();
//  };
//  var changeImage = changeBackground();
//  setInterval(changeImage,4000);



// var button = document.querySelector("#toggleButton");
//   // var buttonAttribute = button.getAttribute("aria-expanded");
//   var navitems = document.querySelectorAll(".nav-link");
  
//   button.addEventListener("click", function(){
//     buttonAttribute = button.getAttribute("aria-expanded");
//     //console.log(buttonAttribute);
//     if(buttonAttribute === "false")
//     {
//        for (var i = 0; i < navitems.length; i++) {
//              navitems[i].style.color = "green";
//            }
//     }
//     else
//       {
//         for (var i = 0; i < navitems.length; i++) {
//              navitems[i].style.color = "#dce1e6";
//              navitems[i].style.fontWeight = "bold";

//            }
//     }
//  });
 //var dropdown = dropdownToggler();
