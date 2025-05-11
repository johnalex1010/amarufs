<form action="<?php echo home_url(); ?>" method="get">
    <label for="">Buscador</label>
    <input type="text" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="Buscar">
    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
</form>