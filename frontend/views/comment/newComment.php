<?php
?>
<article class="row">
    <div class="col-md-2 col-sm-2 hidden-xs">
        <figure class="thumbnail">
            <?php if(!empty($newComment->getAvatar())):?>
                <img class="img-responsive" src="<?= '../../web/upload/avatar/'.$newComment->getAvatar()?>" />
            <?php else:?>
                <img class="img-responsive" src="https://img.thuthuatphanmem.vn/uploads/2018/09/19/avatar-facebook-chat-4_105604005.jpg" />
            <?php endif;?>
            <figcaption class="text-center"><?= $newComment->user->username?></figcaption>
        </figure>
    </div>
    <div class="col-md-10 col-sm-10">
        <div class="panel panel-default arrow left">
            <div class="panel-body">
                <header class="text-left">
                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> <?=date('y-m-d H:i:s',$newComment->created_at)?></time>
                </header>
                <div class="comment-post">
                    <p>
                        <?= $newComment->content?>
                    </p>
                </div>
                <p class="text-right"><a  class="btn btn-default btn-sm btnReply" id="<?= $newComment->id?>" ><i class="fa fa-reply"></i> reply</a></p>
            </div>
            <?php if(!empty($newComment->commentBlogs)):?>
                <input type="hidden" id="countComment_<?=$newComment->id?>" value="<?= $newComment->getCommentBlogs()->count()?>">
                <input type="hidden" id="displayComment_<?=$newComment->id?>" value="5">
                <a class="see_comment see_more_<?=$newComment->id?>" id="<?= $newComment->id?>">see more comment</a>
            <?php endif;?>
        </div>
        <section class="comment-list" id="commentList_<?=$newComment->id?>">

        </section>
    </div>
</article>
