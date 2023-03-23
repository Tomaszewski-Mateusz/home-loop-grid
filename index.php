<?php $i = 0; ?>
<div class="row c-grid g-0">
    <?php while ($i <= 19) : ?>
        <?php if ($i == 0) { ?>
            <div class="col-12 col-md-6">
                <div class="c-grid__card">
                    <img class="img-fluid aspect-3by2" src="https://picsum.photos/200/300" alt="">
                    <h4 class="title-primary">test test test Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Minus officiis tempore magnam odit fuga, sequi labore illo
                        voluptatum, qui reprehenderit est ratione eum adipisci amet blanditiis inventore ut.
                        Voluptate, voluptatem?</h4>
                </div>
            </div>
        <?php } elseif ($i >= 1 && $i <= 4) { ?>
            <?php if ($i == 1) {
                echo '<div class="col-12 col-md-6"> <div class="row g-0">';
            } ?>
            <div class="col-12 col-md-6">
                <a href="#">
                    <div class="c-grid__card">
                        <img class="img-fluid aspect-3by2" src="https://picsum.photos/200/300" alt="">
                        <h4 class="title-primary"><?php echo $i; ?></h4>
                    </div>
                </a>
            </div>
            <?php if ($i == 4) :
                echo '</div> </div>';
            endif; ?>
        <?php } elseif ($i >= 5 && $i <= 7) { ?>
            <div class="col-12 col-md-4">
                <div class="c-grid__card">
                    <img class="img-fluid aspect-16by9" src="https://picsum.photos/967" alt="">
                    <h4 class="title-primary"><?php echo $i; ?></h4>
                </div>
            </div>
        <?php } elseif ($i >= 8 && $i <= 12) { ?>
            <?php if ($i == 8) :
                echo '<div class="col-12 col-md-6"> <div class="row g-0">';
            endif;
            if ($i == 8) { ?>
                <div class="col-12 col-md-6">
                    <div class="c-grid__card">
                        <img class="img-fluid aspect-2by3" src="https://picsum.photos/200/300" alt="">
                        <h4 class="title-primary">test test test</h4>
                    </div>
                </div>
            <?php } elseif ($i >= 9 && $i <= 10) { ?>
                <div class="col-12 col-md-6">
                    <div class="c-grid__card">
                        <img class="img-fluid aspect-1by1" src="https://picsum.photos/200/300" alt="">
                        <h4 class="title-primary">test test test</h4>
                    </div>
                </div>
            <?php } elseif ($i == 11) { ?>
                <div class="col-12 col-md-6">
                    <div class="c-grid__card masonry-fit">
                        <img class="img-fluid aspect-2by3" src="https://picsum.photos/200/300" alt="">
                        <h4 class="title-primary">test test test</h4>
                    </div>
                </div>
            <?php } elseif ($i == 12) { ?>
                <div class="col-12">
                    <div class="c-grid__card masonry-fit-footer">
                        <img class="img-fluid aspect-16by9" src="https://picsum.photos/200/300" alt="">
                        <h4 class="title-primary">test test test</h4>
                    </div>
                </div>
            <?php } ?>
            <?php if ($i == 12) :
                echo '</div> </div>';
            endif; ?>
        <?php } elseif (($i >= 13 && $i <= 19)) {
            if ($i == 13) :
                echo '<div class="col-12 col-md-6"> <div class="row g-0"> <div class="col-12">';
            endif; ?>
            <div class="row c-grid__card c-grid__card--no-shadow">
                <div class="col-12 col-md-5">
                    <img class="img-fluid" src="https://picsum.photos/200/300" alt="">
                </div>
                <div class="col-12 col-md-7">
                    <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate aut,
                        fugiat aspernatur nesciunt, optio, recusandae quia doloribus vitae illum
                        perspiciatis ipsa eos quae necessitatibus architecto vero. Itaque
                        tempora voluptatum nostrum!</h4>
                </div>
            </div>
            <?php if ($i == 19) :
                echo '</div></div></div>';
            endif; ?>
        <?php } ?>
        <?php $i++; ?>
    <?php endwhile; ?>
</div>