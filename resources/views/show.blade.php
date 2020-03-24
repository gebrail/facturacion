<?php
return  '<p class="text-capitalize">'.Carbon::parse($facturas->fechaCreacion)->isoFormat('MMM DD/YY').'</p>';