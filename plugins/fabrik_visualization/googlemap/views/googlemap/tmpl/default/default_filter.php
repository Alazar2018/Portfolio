<?php
/**
 * Default Google Map Viz Filter Template
 *
 * @package     Joomla.Plugin
 * @subpackage  Fabrik.visualization.googlemap
 * @copyright   Copyright (C) 2005-2020  Media A-Team, Inc. - All rights reserved.
 * @license     GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Language\Text;

if ($this->showFilters) : ?>
<form method="post" name="filter" action="<?php echo $this->filterFormURL; ?>">
<?php
	foreach ($this->filters as $table => $filters) :
		if (!empty($filters)) :
		?>
	  <table class="filtertable fabrikTable fabrikList">

	   <thead>
	  	<tr>
	  		<th><?php echo Text::_($table) ?></th>
	  		<th style="text-align:right"><a href="#" class="clearFilters"><?php echo Text::_('PLG_VISUALIZATION_GOOGLEMAP_CLEAR'); ?></a></th>
	  	</tr>
	  </thead>

	  <tfoot>
	  	<tr>
	  		<th colspan="2" style="text-align:right;">
	  			<input type="submit" class="fabrik_filter_submit button" value="<?php echo Text::_('PLG_VISUALIZATION_GOOGLEMAP_GO') ?>" />
	  		</th>
	  	</tr>
	  </tfoot>

	  <tbody>
	  <?php
			$c = 0;
			foreach ($filters as $filter) :
				$required = $filter->required == 1 ? ' class="notempty"' : '';
			?>
	    <tr class="fabrik_row oddRow<?php echo ($c % 2); ?>">
	    	<td<?php echo $required ?>><?php echo $filter->label ?> </td>
	    	<td><?php echo $filter->element ?></td>
	    </tr>
	  <?php
				$c++;
			endforeach;
			?>
	  </tbody>

	  </table>
	  <?php
		endif;
	endforeach;
	?>

</form>
<?php
endif;
