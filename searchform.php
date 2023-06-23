<div class="dropdown search">
  <button class="searchButton" type="button" id="dropdownsearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img class="icon" src="<?php echo get_template_directory_uri() . '/src/assets/ic.search.png'; ?>" alt="search icon">
  </button>

  <div class="dropdown-menu search-menu" aria-labelledby="dropdownsearch">
    <form role="search" method="get" class="search-form p-2" action="<?php echo home_url('/'); ?>">
      <label>
        <span class="screen-reader-text"><?php echo _x('Search for:', 'label') ?></span>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Buscar …', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>" />
      </label>
      <input type="submit" class="search-submit" value="<?php echo esc_attr_x('Search', 'submit button') ?>" />
    </form>
  </div>
</div>