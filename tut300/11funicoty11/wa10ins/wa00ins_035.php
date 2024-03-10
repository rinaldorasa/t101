


<?php 

//  035

// modale ui
echo '

<style>
  .modal-backdrop {
    background-color: olive;
    opacity: 0.5;
  }
</style>

    <div id="MODALE" style="overflow:auto;"  class="ui container">
        <div  style="width:99.5%; height:99.5%; background-color:transparent; color:black;"  class="ui basic modal">
            <article class="ui header">
            
            <blockquote class="ui segment">
			
			<a href="./dlb/a/logout.php" class="ui red inverted button">LOGOUT</a>   
         
            <a href="LeggiCIF.php" class="ui primary inverted button">LeggiCIF</a>
             
			 
            <a href="breaty11.php" style="text-decoration: none; text-decoration-thickness: 0px;"  class="ui primary inverted button">BACKUP</a>
            
            </blockquote>            
            
            <div>
            <a href="http://avid3820725.altervista.org/pdfjs/web/viewer.html?file=http://avid3820725.altervista.org/funicoty07/w_a_0_0_gitm/test.pdf">PDFJS</a>
            </div>
            <div>            
            <div>
            <a href="https://animate.style/">https://animate.style/</a>
            </div>
            <div>
            <a href="https://releases.jquery.com/jquery/">https://releases.jquery.com/jquery/</a>
            </div>
            </article>
			

            <div class="actions">
                <div class="ui negative button">
                    <!-- Chiudi -->
					<i class="window close outline icon"></i>
					
                </div>
                <div class="ui positive button">
                    
					<i class="window close outline icon"></i>
                </div>
            </div>

			
        </div>
        <button class="ui massive green inverted button"
                onclick="openModal()">
        <!-- Click --> 
		<i class="list icon"></i>
        </button>
    </div>

    <script>
    
    
    /*
        const openModal = () => {
            $(".ui.modal").modal("setting",
                "transition", "horizontal flip").modal("show");
        }
        
        
     */   
        
    /*
    
    .css("background-color", "yellow");
    
    */    
        
	/*
	const openModal = () => {
				$(".ui.modal").modal("setting",
					"transition", "horizontal flip").modal("show").css("background-color", "white");
			}
	
	
	*/


/*
const openModal = () => {
            $(".ui.modal").modal("setting",
                "transition", "horizontal flip").modal("setBackdrop").css("background-color", "white").modal("show").css("background-color", "white");


        };


*/



const openModal = () => {

 document.querySelector("#w_a_1_1_UP_DOWN_NELLA_PAGINA").style.display="block";

            $(".ui.modal").modal("setting",
                "transition", "horizontal flip").modal("setBackdrop").css("background-color", "white").modal("show").css("background-color", "white");



        };


    </script>
    
    
    

';

?> 
<!-- 035 modal ui -->


