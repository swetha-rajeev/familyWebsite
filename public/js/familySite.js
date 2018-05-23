
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
 var changeImage = changeBackground();
 setInterval(changeImage,4000);


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
