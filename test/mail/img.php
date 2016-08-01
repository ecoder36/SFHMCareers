
<style>
.image { 
   position: relative; 
   width: 100%; /* for IE 6 */
}

h2 { 
   position: absolute; 
   top: 200px; 
   left: 0; 
   width: 100%; 
}

h2 span { 
   color: white; 
   font: bold 24px/45px Helvetica, Sans-Serif; 
   letter-spacing: -1px;  
   background: rgb(0, 0, 0); /* fallback color */
   background: rgba(0, 0, 0, 0.7);
   padding: 10px; 
}
h2 span.spacer {
   padding:0 5px;
}

$(function() {
    
    $("h2")
        .wrapInner("<span>")

    $("h2 br")
        .before("<span class='spacer'>")
        .after("<span class='spacer'>");

});


</style>
<div class="image">

      <img src="https://updraftplus.com/wp-content/uploads/2013/01/dropbox-02-1024x1024.png" alt="" />
      
   <h2><span>A Movie in the Park:<span class='spacer'></span><br /><span class='spacer'></span>Kung Fu Panda</span></h2>

</div>