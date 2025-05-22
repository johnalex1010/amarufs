<form action="<?php echo home_url(); ?>" method="get" class="buscador">
    <label for="s">Buscador</label>
    <input type="text" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="Buscador...">
    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
</form>