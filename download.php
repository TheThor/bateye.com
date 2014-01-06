<?php
header("Content-disposition: attachment; filename=catalogue.pdf");
header("Content-type: application/pdf");
readfile("huge_document.pdf");
