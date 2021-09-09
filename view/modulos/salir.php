<?php

session_destroy();
session_commit();

echo '<script>

	window.location = "";

</script>';