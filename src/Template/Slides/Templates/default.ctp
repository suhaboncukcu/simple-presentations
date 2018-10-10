<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Slide $slide
 * @var \App\Model\Entity\Slide $next
 *  @var \App\Model\Entity\Slide $prev
 */
?>

<?php $this->layout = 'empty' ?>

<div class="default__slide-block">
    <div class="default__is-centered">
        <div class="default__slide-title"><h1><?=h($slide->title)?></h1></div>
        <div class="default__slide-subtitle"><h2><?=h($slide->subtitle)?></h2></div>
        <div class="default__slide-description"><?=h($slide->description)?></div>
    </div>
    <?php if(!is_null($next)): ?>
    <a href="<?=$this->Url->build([
            'controller' => 'Slides',
            'action' => 'display',
            'id' => $next->id
    ])?>" class="default__arrow default__next-slide">Next</a>
    <?php endif; ?>

    <?php if(!is_null($prev)): ?>
    <a href="<?=$this->Url->build([
        'controller' => 'Slides',
        'action' => 'display',
        'id' => $prev->id
    ])?>" class="default__arrow default__prev-slide">Prev</a>
    <?php endif; ?>
</div>



<?php $this->append('css'); ?>
<style>
    .default__slide-block {
        position: fixed;
        top: 0px;
        bottom: 0px;
        right: 0px;
        left: 0px;
        background: #1a1a1a;
        color: #F0F0F0;
        font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
        display: flex;
        align-items: center;
    }

    .default__slide-block .default__is-centered {
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }

    .default__arrow {
        font-weight: bold;
        text-decoration: none;
        color: white;
        position: absolute;
        opacity: 0.6;
    }

    .default__arrow:hover {
        opacity: 1;
    }

    .default__arrow.default__next-slide {
        right: 2rem;
    }

    .default__arrow.default__prev-slide {
        left: 2rem;
    }

</style>
<?php $this->end(); ?>
