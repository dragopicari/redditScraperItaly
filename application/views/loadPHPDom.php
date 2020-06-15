<?php 
require 'simple_html_dom.php';
$html = file_get_html('https://old.reddit.com/r/italy/top/');
for ($i = 0; $i<10; $i++){

       $title= $html->find('p[class="title"]', $i);
       $tag= $html->find('p[class="tagline"]', $i);

       $userId = $this->session->userdata('user_id');
       

       echo "
       <div class='card-data'>
       <div class='round-img'>
           <img class='img' src='https://a.thumbs.redditmedia.com/08tpP0BeZkMyb7QKRqpLfskGb0dRHf8pi8d4oEoxPT4.png'></img>
       </div>
       <div class='cnt-text'>
           <p class='contenuto'>$title</p>
       </div>
       <div class='source'>

           <div class='who'>
               <p class='who-tit'>data&statss</p>
           </div>

           <form method='POST' action='savepin/save_data'>

		   <input type='text' name='titPin' class='titPin' value=''>
		   <input type='text' name='fontPin' class='fontPin' value=''>
           <input type='text' name='hourPin' class='hourPin' value=''>
           
           <input type='text' name='user_id' value='$userId' style='display: none;'>
		   
		   <button class='savePin' type='submit'>
					<p class='savPin-tit'>SALVA</p>					   
			</button>
			  
            </form>


           <div class='when'>
               <p class='time'>$tag</p>
           </div>

       </div>
	   </div>
       ";

}

?>

