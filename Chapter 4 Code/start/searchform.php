<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
   <div class="input-group">
      <input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'search', 'jbst-4' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'search', 'jbst-4' ) ?>" />
      <span class="input-group-btn">
        <button class="btn btn-primary-outline" type="button"><?php echo esc_attr_x( 'Search', 'search', 'jbst-4' ) ?></button>
      </span>
    </div>   
</form>
