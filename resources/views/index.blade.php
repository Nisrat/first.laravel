<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Application</title>

    
</head>

<body>

    
    <div class="float-container">
        <div class="child1"></div>
        <div class="child2">Movies</div>
       
            <div class="float-child"><img id="pic1"  src="" alt="View1" height="342" width="209"></div>
            <div class="float-child"><img id="pic2"  src="" alt="View2" height="342" width="209"></div>
            <div class="float-child"><img id="pic3"  src="" alt="View3" height="342" width="209"></div>
            <div class="float-child"><img id="pic4"  src="" alt="View4" height="342" width="209"></div>
            <div class="float-child3"></div>
           
       
    </br>
    </br>
    <input type="file" id="myFileInput" class="float-image">
    <button id="myBtn1" class="float-image">Upload Image-1</button>
    <button id="myBtn2" class="float-image">Upload Image-2</button>
    <button id="myBtn3" class="float-image">Upload Image-3</button>
    <button id="myBtn4" class="float-image">Upload Image-4</button>
   </div>
   
   <script>
      
      document.querySelector("#myFileInput").addEventListener('change', function () {
            const reader = new FileReader();
            reader.addEventListener('load',()=>{
                localStorage.setItem("recent-image", reader.result);
                //console.log(reader.result);
            });
        reader.readAsDataURL(this.files[0]);
   });
               document.getElementById("myBtn1").addEventListener('click', ()=>{
               const recentImageDataUrl= localStorage.getItem("recent-image");
               if(recentImageDataUrl){
                   document.querySelector("#pic1").setAttribute("src", recentImageDataUrl);

                   
               }
           });
          
           document.getElementById("myBtn2").addEventListener('click', ()=>{
               const recentImageDataUrl= localStorage.getItem("recent-image");
               if(recentImageDataUrl){
                   document.querySelector("#pic2").setAttribute("src", recentImageDataUrl);

                   
               }
           });
           document.getElementById("myBtn3").addEventListener('click', ()=>{
               const recentImageDataUrl= localStorage.getItem("recent-image");
               if(recentImageDataUrl){
                   document.querySelector("#pic3").setAttribute("src", recentImageDataUrl);

                   
               }
           });
           document.getElementById("myBtn4").addEventListener('click', ()=>{
               const recentImageDataUrl= localStorage.getItem("recent-image");
               if(recentImageDataUrl){
                   document.querySelector("#pic4").setAttribute("src", recentImageDataUrl);

                   
               }
           });
   </script>
    
</body>

</html>
