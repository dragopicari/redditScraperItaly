
            <div class="saved">

                <div class="saved-title">

                    <h1 class="last3-title">Last 3 Saved</h1>

                </div>

                <div class="last3" >

                <?php foreach ( $posts as $post) : ?>
					
                <div class='card-data'>

                <div class='round-img'>
                    <img class='img' src='https://a.thumbs.redditmedia.com/08tpP0BeZkMyb7QKRqpLfskGb0dRHf8pi8d4oEoxPT4.png'></img>
                </div>
                <div class='cnt-text'>
                    <p class='contenuto'><?php echo $post['title']; ?></p>
                </div>
                <div class='source2'>

                    <div class='who'>
                        <p class='who-tit'><?php echo $post['fonte']; ?></p>
                    </div>
                    <form method="POST" action="savepin/delete">
                    <input type="text" name="id" value="<?php echo $post['id']; ?>" style="display:none">
                    <button class='delete' type="submit">                        
                    <p class='who-tit'>X</p>
                    </button>
                    </form>

                </div>
                </div>
                

                <?php endforeach; ?>

                </div>

            </div>
