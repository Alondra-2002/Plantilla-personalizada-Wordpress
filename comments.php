<div class="comments">

    <h2>Comentarios</h2>

    <?php 
        $args = array(
            'Walker'        => null,
            'max_depth'     => '',
            'style'         => 'ul', 
            'callback'      => null,
            'end-callback'  => null, 
            'type'          => 'all',
            'page'          => '',
            'per_page'      => '',
            'avatar_size'   => 32, 
            'reverse_top_level' => null, 
            'reverse_children' => '', 
            'format'        => 'html5', 
            'short_ping'    => false, 
            'echo'          => true
        );
    ?>

</div>

        <?php 
            wp_list_comments( $args, $comments);
        
        $comments_args = array(
            'label_submit' => 'Commentar', 
            'little_reply' => 'Escriba una respuesta al comentario',
            'comment_notes-after' => '',
            'comment_field' => '<p class="comment-form-comment"><label 
            for="comment">' . _x( 'Comment','noun' ) . '</label><br /><textarea
            id="comment" name="comment" aria-required="true"></textarea>
            </p>'
        );

        comment_form($comments_args);
        ?>