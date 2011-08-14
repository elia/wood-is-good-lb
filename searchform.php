    <div class="search">
        <form action="<?php bloginfo('url'); ?>" method="get">
            <input class="searchText" type="text" name="s" value="Enter your text here.." onfocus="this.value=(this.value=='Enter your text here..') ? '' : this.value;" onblur="this.value=(this.value=='') ? 'Enter your text here..' : this.value;" />
			<input class="searchBtn" type="submit" value="Go" />
            <div style="clear:both"></div>
         </form>
    </div>
