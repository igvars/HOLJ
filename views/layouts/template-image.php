<?php
/**
 * @var $image
 */
?>

<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="uploaded-image-block">
        <div class="image-wrap">
            <img src="/<?= $image->source_url ?>" alt="<?= $image->alt ?>">
        </div>
        <span class="image-remove image-trash glyphicon glyphicon-remove-circle"
              data-id="<?= $image->id ?>"
              data-url="/pet/remove"
        ></span>
    </div>
</div>